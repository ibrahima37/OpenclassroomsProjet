<?php require_once ('connection.php') ?>
<?php
    $req="select * from categories";
    $rsCat=mysqli_query($con,$req) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <script>
        function confirmation(idcat){
            var rep=confirm("Etes vous sure de vouloir supprimer cette categorie ?");
            if(rep==true){
                document.location="supprimerCategorie.php?idcat="+idcat
            }
        }
    </script>
</head>
<body>
    <?php require_once ('entete.php') ?>
    <div id="formcategories" align="center">
        <form method="post" action="addCategories.php">
            <table>
                <tr>
                    <td>Nom categorie:</td>
                    <td><input type="text" name="nomCat"/></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="3" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ajouter"/></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="listeCategories" align="center">
        <table border="1">
            <tr>
                <th>CODE CAT</th>
                <th>NOM CAT</th>
                <th>Designation</th>
            </tr>
            <?php while($cat=mysqli_fetch_assoc($rsCat)){?>
                <tr>
                    <td><?php echo($cat['CODE_CAT'])?></td>
                    <td><?php echo($cat['NOM_CAT'])?></td>
                    <td><?php echo($cat['DESCRIPTION'])?></td>
                    <td>
                        <a href="javascript:confirmation(<?php echo($cat['CODE_CAT'])?>)">supprimer</a>
                    </td>
                </tr>
                <?php }?>
        </table>
    </div>
</body>
</html>