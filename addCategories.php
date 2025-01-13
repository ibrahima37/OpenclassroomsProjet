<?php require_once ('connection.php') ?>
<?php
  $nc=$_POST["nomCat"]; 
  $d=$_POST["description"];
  $req="insert into categories(NOM_CAT,DESCRIPTION) values ('$nc', '$d')";
  mysqli_query($con,$req);
  header("location:gesCategories.php")
?>