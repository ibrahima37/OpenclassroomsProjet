<?php require_once ('connection.php') ?>
<?php
    session_start();
    $_SESSION=array();
    $l=$_POST['login'];
    $p=$_POST['pass'];
    $pc=md5($p);
    $req="select * from users where LOGIN='$l' and PASS='$pc'";
    $rs = mysqli_query($con, $req);
    if($u=mysqli_fetch_assoc($rs)){
        $_SESSION['ROLE_USER']=$u['NIVEAU'];
        $_SESSION['LOGIN']=$l;
        header("location:index.php");
    }
    else
    header("location:index.php");
?>
