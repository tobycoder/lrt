<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
      <link rel="stylesheet" href="style.css" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Toevoegen</title>
  </head>
  <p><body>
    <h1>Boeken toevoegen</h1>
    <p>Je mondeling. Jup schijt aan die. Gelukkig hebben we een duo-toets en kan je, door hier je boeken toe te voegen, kijken met wie je deze verschrikking kan voltooien. Veel plezier!</p>
    <a href="http://www.florisdeboer.com/luxor/5VD" class="btn btn-info">Zuruck gehen</a><br><br>
<form  method="post" action="insert.php"  id="searchform">
      <table class="table">
        <thead>
            <tr>
                <th>Naam:</th>
                <th>Boek 1:</th>
                <th>Boek 2:</th>
                <th>Boek 3:</th>
                <th>Boek 4:</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                  <td><input  type="text" name="name"><br></td>
                  <td><input  type="text" name="boek1"><br></td>
                  <td><input  type="text" name="boek2"><br></td>
                  <td><input  type="text" name="boek3"><br></td>
                  <td><input  type="text" name="boek4"><br></td>
              </tr>
          </tbody>
          
    
      </table><br>
    <input  type="submit" name="submit" value="TOEVOEGEN!!11!1" class="btn btn-success">
      </form>
  </body></p>
</html>
<?php
  if(isset($_POST['submit'])){
      $naam = $_POST['name'];
      $boek1 = $_POST['boek1'];
      $boek2 = $_POST['boek2'];
      $boek3 = $_POST['boek3'];
      $boek4 = $_POST['boek4'];

  //connect  to the database
  $db=mysql_connect("db.florisdeboer.com", "user",  "pass") or die ('Ik ken niet connecten: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("dbname");
  //-query  the database table
  $sql="INSERT INTO boekjes3 (Naam, Boek1, Boek2, Boek3, Boek4) VALUES ('$naam', '$boek1', '$boek2', '$boek3', '$boek4')";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
      echo "<div class='alert alert-success'>Yes! gelukt!</div>";
      
  }
?>
