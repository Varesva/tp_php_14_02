<!-- Question de cours
 1 - les superglobales sont des variables qui sont disponibles n'importe où dans le dossier php, leur portée s'étend à l'ensemble des pages. 

 2- ORM signifie Object Relational Mapping (mapping objet-relationnel). Un ORM sert à manipuler des bases de données relationnelles (donc des bdd SQL). Par exemple: Simple ORM qui est un ORM qui va servir à faire des CRUD, il y a aussi DOCTRINE.  

 3- Create, Read, Update, Delete : permet de créer, lire, mettre à jour et supprimer des données d’une bdd relationnelle (ex: mySQL). 
 
 4- MVC signifie Modèle - Vue - Contrôleur. Le but du MVC est de stocker son code de manière structurée.

-->
<?php include ("../header.php"); ?>
<h1>Page d'accueil</h1>

<form action="../crud/create.php" method="POST">
        <h2>Créer un article: </h2>
        <br>
        <label for="titre">Entrer le titre de l'article à créer: </label>
        <input type="text" name="titre" placeholder= "Vélo BMX neuf" required maxlength="50">
        <br>
        <label for="prix">Entrer le prix (en €) de l'article à créer: </label>
        <input type="text" name="prix" placeholder= "30€" required maxlength="4" size="5">
        <br>
        <label for="description">Entrer la description de l'article à créer: </label>
        <input type="text" name="description" placeholder= "Caractéristiques de l'article, état du produit (comme neuf, utilisé quelques fois etc)" required maxlength="300" size="70">
        <!-- <br>
        <label for="description">Photo de votre article: </label>
        <input type="file" name="photo" required accept="image/png, image/jpeg, image/jpg"> -->
        <br>
        <input type="submit" value="Créer mon article">
    </form>

    
<?php include ("../footer.php"); ?>
