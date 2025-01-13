<?php require_once ('connection.php') ?>
<?php
    $req="select * from categories";
    $rsCat = mysqli_query($con, $req);

    if (!$rsCat) {
        echo "Erreur de requête : " . mysqli_error($con);
        exit();
    }

?>
<table border="0">
    <?php while($cat=mysqli_fetch_assoc($rsCat)){ ?>
        <tr>
            <td>
                <a href="index.php?idcat=<?php echo($cat['CODE_CAT'])?>">
                    <?php echo($cat['NOM_CAT'])?>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
<?php
    mysqli_free_result($rsCat);
?>