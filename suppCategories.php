<?php require_once ('connection.php') ?>
<?php
  $idc=$_GET["idCat"]; 
  $req="delete from categories where CODE_CAT=$idc";
  $res = mysqli_query($con, $req);
  header("location:gesCategories.php")
?>