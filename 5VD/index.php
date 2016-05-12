<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
      <link rel="stylesheet" href="style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Je maatje zoeken</title>
  </head>
  <p><body>
    <h1>Vind je maatje en je boekje voor 5VD</h1>
    <p>Kut he dat mondeling. Gelukkig kan dit je tijd besparen. </p>
      <div class="alert alert-warning" role="alert"><strong>Let op!</strong> Als 1 of meer van jouw boeken niet hierbij staat, is de kans groot dat je hem niet hoeft voor te bereiden.</div>
    <a href="insert.php" class="btn btn-info">Voeg je boeken toe aan de database</a><br><br>
    <form  method="post" action="index.php?go"  id="searchform">
      <input  type="text" name="name">
      <input  type="submit" name="submit" class="btn btn-success" value="ZOEKEN!1!11!">
    </form>
  </body></p>
</html>
<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  $query=$_POST['name'];
  //connect  to the database
  $db=mysql_connect("db.florisdeboer.com", "user",  "pass") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("dbname");
  //-query  the database table
  $sql="SELECT  Naam, Boek1, Boek2, Boek3, Boek4 FROM boekjes3 WHERE Boek1 LIKE '%" . $query .  "%' OR Boek2 LIKE '%" . $query ."%' OR Boek3 LIKE '%" . $query .  "%' OR Boek4 LIKE '%" . $query .  "%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);

      if(!$result){
          echo "<div class='alert alert-danger'>Er is een error opgetreden. Bel of WhatsApp me: 0637609345</div>";
      }
      
    echo "    <table class='table'>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Boek 1</th>
                <th>Boek 2</th>
                <th>Boek 3</th>
                <th>Boek 4</th>
            </tr>
        </thead>";
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $Name=$row['Naam'];
          $Boek1=$row['Boek1'];
          $Boek2=$row['Boek2'];
          $Boek3=$row['Boek3'];
          $Boek4=$row['Boek4'];
      
    echo "<tbody>
        <tr>
            <th scope='row'>".$Name."</th>
            <td>".$Boek1."</td>
            <td>".$Boek2."</td>
            <td>".$Boek3."</td>
            <td>".$Boek4."</td>
        </tr>
    </tbody>";
    
  }
      
      echo "</table>";

  }
  }
  else{
  echo  "<p>Zoek bijvoorbeeld op: 'M.' </p>";
  }
?>

