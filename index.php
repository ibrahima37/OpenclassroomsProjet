<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTE DE VOITURE DE LUX</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php require_once ("entete.php") ?>
    <table width="100%">
        <tr>
            <td width="22%" valign="top">
                <div id="categories">
                    <?php require_once ("categories.php") ?>
                </div>
            </td>
            <td width="78%">
                <div id="contenue" align="left">
                    <?php 
                        if(isset($_GET['panier']))
                            require_once ("panier.php");
                        else
                            require_once ("produits.php") 
                    ?>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>