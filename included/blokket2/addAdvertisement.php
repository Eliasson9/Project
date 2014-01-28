<?php 
  
  $path = dirname(__FILE__)."/data/";
  $options="";
  $filename=null;
  $db = new PDO("sqlite:$dbPath");

  if(isset($_POST['doCreate'])) {
    
    $adv [] = strip_tags($_POST['title'], "<b><i><p><img>");

    $stmt = $db->prepare("INSERT INTO Advertisement (title) VALUES(?)");
    $stmt->execute($adv);
    $output = "Lade till en annons";
  }
  
  $stmt = $db->prepare('SELECT * FROM Advertisement;');
  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $select = "<select id='input1' multiple name='ads'>";
  foreach($res as $adv) {
    $select .= "<option value='{$adv['id']}'>{$adv['title']} ({$adv['id']})</option>";
  }
  $select .= "</select>";
 ?>

<h1>Lägg till annons</h1>

<p>Ange ett unikt namn på din annons och klicka sedan på Skapa</p>
<form method="post">
  <fieldset>
      <p>
        <label for="input1">Tillgängliga annonser: </label>
        <br>
        <?php 
            echo $select;
         ?>
      </p>
      <br>
      <p>
        <label for="newFileName">Nytt unikt namn: </label>
        <br>
        <input type="text" name="title">
      </p>
      <p>
        <input type="submit" name="doCreate" value="Skapa">
        <input type="submit" name="regret" value="Ångra">
      </p>

      <?php if(isset($output)): ?>
        <p><output class="info"><?php echo $output ?></output></p>
      <?php endif; ?>

  </fieldset>
</form>
