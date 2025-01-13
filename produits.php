<?php require_once ('connection.php') ?>
<?php
    if(isset($_GET['idcat'])){
        $idc=$_GET['idcat'];
        $req="select * from produits where CODE_CAT=$idc";
    }
    else if(isset($_GET['promo'])){
        $req="select * from produits where PROMOTION=1";
    }
    else if(isset($_POST['motcle'])){
        $mc=$_POST['motcle'];
        $req="select * from produits where DESIGNATION like '%$mc%'";
    }
    else{
        $req="select * from produits where SELECTIONNE=1";
    }
    $resProd=mysqli_query($con, $req) ;
    if (!$resProd) {
        echo "Erreur de requête : " . mysqli_error($con);
        exit();
    }
?>
<?php while($p=mysqli_fetch_assoc($resProd)){?>
<div id="produit">
    <table>
        <tr>
            <td>Ref:</td>
            <td><?php echo($p['REF_PRODUIT'])?></td>
            <td rowspan="3">
                    <img src="IMG/<?php echo($p['PHOTO'])?>" alt="XALIL" width="200px", height="100px">
            </td>
        </tr>
        <tr>
            <td width="80px">Designation:</td>
            <td width="100px"><?php echo($p['DESIGNATION'])?></td>
        </tr>
        <tr>
            <td width="80px">Quantite:</td>
            <td><?php echo($p['QUANTITE'])?></td>
        </tr>
        <tr>
            <td width="80px">Prix:</td>
            <td><?php echo($p['PRIX'])?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <div id="formPanier">
                    <form method="post" action="addCaddie.php" id="form2">
                        <input type="hidden" name="refProduit" value="<?php echo($p['REF_PRODUIT'])?>"/>
                        <input type="hidden" name="designation" value="<?php echo($p['DESIGNATION'])?>"/>
                        <input type="text" name="quantite" size="5" value="1"/>
                        <input type="hidden" name="prix" value="<?php echo($p['PRIX'])?>"/>
                        <input type="image" src="IMG/panier.jpg" width="50px", height="50px" value="submit"/>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php }
    mysqli_free_result($resProd);
?>
<br style="clear:both"/>