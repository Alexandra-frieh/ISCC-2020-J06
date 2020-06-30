<html>
<head>
    <meta charset="utf-8">
    <title>T-Shirt php</title>
</head>
<body>
<?php
$nom_produit="T-Shirt femme";
$couleur="rouge";
$prix=15.50;
$disponible=true;
$quantite=10;
$nb_ajout=10;
$nb_achat=5;

?>



<?php
 include("affichage.php"); 
 include("gestion-produit.php"); 
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=achat($quantite, $nb_achat);
$disponible=update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=achat($quantite, $nb_achat);
$disponible=update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite=restockage($quantite, $nb_ajout);
$disponible=update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
?>

</body>
</html>