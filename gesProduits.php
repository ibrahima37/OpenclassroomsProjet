<?php require_once ('connection.php') ?>
<?php
    $req="select * from categories";
    $rsCat=mysqli_query($con,$req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des categories</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once ('entete.php') ?>
    <div id="formProduits" align="center">
        <form method="post" action="addProduits.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>REF Produit:</td>
                    <td><input type="text" name="refProduit"/></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><input type="text" name="designation"/></td>
                </tr>
                <tr>
                    <td>Categorie:</td>
                    <td>
                        <select name="idcat">
                            <?php while($cat=mysqli_fetch_assoc($rsCat)) {?>
                                <option value="<?php echo($cat['CODE_CAT'])?>">
                                    <?php echo($cat['NOM_CAT'])?>
                                </option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Quantite:</td>
                    <td><input type="text" name="quantite"/></td>
                </tr>
                <tr>
                    <td>Prix:</td>
                    <td><input type="text" name="prix"/></td>
                </tr>
                <tr>
                    <td>Photo:</td>
                    <td><input type="file" name="photo"/></td>
                </tr>
                <tr>
                    <td>Disponible:</td>
                    <td><input type="checkbox" name="disponible" checked="checked"/></td>
                </tr>
                <tr>
                    <td>En promotion:</td>
                    <td><input type="checkbox" name="promotion"/></td>
                </tr>
                <tr>
                    <td>Selectionner:</td>
                    <td><input type="checkbox" name="selectionne" chechked="checked"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Ajouter"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>