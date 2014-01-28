<?php 
  
  $path = dirname(__FILE__)."/data/";
  $files = readDirectory($path);
  $options="";
  $filename=null;

  if(isset($_POST['doCreate'])) {
    $filename = $path . basename(trim(strip_tags($_POST['filename'])));
    if(empty($_POST['filename'])) {
      $res = "Filen skapades ej, filnamnet kan ej vara tomt. Välj ett annat filnamn.";
    }
    else if(is_file($filename)) {
        $res = "Filen skapades ej, den finns redan. Välj ett annat filnamn.";
    }
    else 
    {
       file_put_contents($filename, null);
       $res = "Filen skapades.";
       $files = readDirectory($path);
    }
  }
  foreach ($files as $advertisement) {
    $options .= "<option value='{$advertisement}'>{$advertisement}</options>";
  }
 ?>

<h1>Lägg till annons</h1>

<p>Ange ett unikt namn på din annons och klicka sedan på Skapa</p>
<form method="post">
  <fieldset>
      <p>
        <label for="input1">Tillgängliga annonser: </label>
        <br>
        <select id="input1" name="advertisementFile">
          <?php 
            echo $options;
          ?>
        </select>
      </p>
      <br>
      <p>
        <label for="newFileName">Nytt unikt namn: </label>
        <br>
        <input type="text" name="filename">
      </p>
      <p>
        <input type="submit" name="doCreate" value="Skapa">
        <input type="submit" name="regret" value="Ångra">
      </p>
  </fieldset>
</form>

<?php if(isset($res)): ?>
  <p>
    <output class="success"><?php echo $res; ?></output>
  </p>
<?php endif; ?>