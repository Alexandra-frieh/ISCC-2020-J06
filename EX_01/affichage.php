<?php
function afficher_titre($nom_produit) {
    echo"<h1> Fiche produit $nom_produit</h1>";
}

function afficher_description($couleur, $prix) {
    echo"<p> Couleur $couleur, Prix $prix</p>";
}
function afficher_produit($nom_produit, $couleur, $prix, $disponible) {

   if($disponible==true)
{
   afficher_titre($nom_produit);
   afficher_description($couleur, $prix);

   }
else
{
    echo"<p>Le produit $nom_produit n'est malheuresement plus disponible. </p>";
    return;
}
}

?>