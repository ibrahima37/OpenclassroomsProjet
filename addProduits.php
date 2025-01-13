<?php require_once ('connection.php') ?>
<?php
    $ref=$_POST["refProduit"];
    $des=$_POST["designation"];
    $idcat=$_POST["idcat"];
    $quantite=$_POST["quantite"];
    $prix=$_POST["prix"];
    $nomPhoto=$_FILES['photo']['name'];
    $fichierTemporaire=$_FILES['photo']['tmp_name'];
    move_uploaded_file($fichierTemporaire,"./IMG/$nomPhoto");
    if(isset($_POST['disponible'])) $dispo=1; else $dispo=0;
    if(isset($_POST['promotion'])) $promo=1; else $promo=0;
    if(isset($_POST['selectionne'])) $sel=1; else $sel=0;
    $req="insert into produits(REF_PRODUIT, DESIGNATION, QUANTITE, PRIX, PHOTO, DISPONIBLE, PROMOTION, SELECTIONNE, CODE_CAT) 
    values ('$ref', '$des', '$quantite', '$prix', '$nomPhoto', '$dispo', '$promo', '$sel', '$idcat')";
    $res = mysqli_query($con, $req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once ('entete.php') ?>
    <h3>Donnees enregistrees avec succes</h3>
    <table border="1">
        <tr>
            <td>REF :</td>
            <td><?=$ref?></td>
        </tr>
        <tr>
            <td>Designation :</td>
            <td><?=$des?></td>
        </tr>
        <tr>
            <td>Quantite :</td>
            <td><?=$quantite?></td>
        </tr>
        <tr>
            <td>Prix :</td>
            <td><?=$prix?></td>
        </tr>
        <tr>
            <td>Photo :</td>
            <td><img src="IMG/<?=$nomPhoto?>" alt="xalil" width="100" height="50"/></td>
        </tr>
        <tr>
            <td>Disponible :</td>
            <td><?=$dispo?></td>
        </tr>
        <tr>
            <td>Promotion :</td>
            <td><?=$promo?></td>
        </tr>
        <tr>
            <td>Selectionne :</td>
            <td><?=$sel?></td>
        </tr>
        <tr>
            <td>Code Categorie :</td>
            <td><?=$idcat?></td>
        </tr>
    </table>
    <a href="index.php">Homme</a>
</body>
</html>
<?php 
    mysqli_close ($con) ;
?>