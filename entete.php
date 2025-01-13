<?php
 session_start() ;
?> 
<table width="100%" border="0">
    <tr>
        <td width="16%" height="89" align="left">
            <div id="logo"><img src="IMG/LOGO.png" alt="xalil" width="100%" height="100%"></div>
        </td>
        <td width="55%" align="center">
            <div id="pub"><img src="IMG/pub.jpg" width="100%" height="100%"></div>
        </td>
        <td width="30%" align="right" valign="bottom">
            <div id="auth">
                <div id="login">
                    <?php if(isset($_SESSION ['ROLE_USER'])){?>
                        Authentifie avec Login:
                            <?php echo($_SESSION ['LOGIN']) ?>
                    <?php }?>        
                </div>
                <div id="authentification">
                    <form method="post" action="authentification.php">
                        Login: <input type="text" name="login"/><br>
                        Pass: <input type="password" name="pass"/><br>
                        <input type="submit" value="ok"/>
                    </form>
                </div>
            </div>
        </td>
    </tr>
</table>
<div id="menu">
    <table width="100%" border="0">
        <tr>
            <td width="24%" valign="top">               
               <div id="recherche">
                    <form method="post" action="index.php" id="form2">
                         <input type="text" name="motcle"/>
                         <input type="submit" value="chercher"/>
                     </form> 
               </div>               
            </td>
            <td width="8%"><a href="Contacts.php">Contacts</a></td>
            <td width="8%"><a href="Apropos.php">Apropos</a></td>
            <td width="10%"><a href="ServiceClient.php">Service Client</a></td>
            <td width="8%"><a href="index.php">Home</a></td>
            <td width="10%"><a href="index.php?promo=1">Promotion</a></td>
            <td width="8%"><a href="index.php">Selection</a></td>
            <td width="7%"><a href="index.php?panier=1">Panier</a></td>
            <td width="10%"><a href="index.php">Commander</a></td>
            <td width="8%"><a href="Demande-location.php">Demande Location</a></td>
            <td width="10%"><a href="livraison.php">Livraison</a></td>
            <td width="8%"><a href="suivi_livraison.php">Suivi livraison</a></td>
            <td width="10%"><a href="ServiceApresVente.php">ServiceAVente</a></td>
            <?php if(isset($_SESSION ['ROLE_USER'])){?>
            <td width="15%"><a href="gesCategories.php">Gestion Categories</a></td>
            <td width="17%"><a href="gesProduits.php">Gestion Produits</a></td>
            <?php }?>
            <td width="1%">&nbsp;</td>
        </tr>
    </table>
</div>