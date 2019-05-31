<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Mon site web</title>

    <link href="styles.css" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>


<header>
    <div class="wrapper">
        <h1>Livres<span class="orange">.</span></h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                        <li><a href="livre.php">Livres</a></li>
                <li><a href="newconnexion.php">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="formulaire">

    <form method="post" action="inscriptions.php">

        <input type="text" name="nom" placeholder="Nom"/><br>

        <input type="text" name="prenom" placeholder="Prenom"/><br>

	<input type="text" name="email" placeholder="Adresse mail"/><br>
        
	<input type="password" name="password" placeholder="Mot de passe"/><br>

        <input type="password" name="repeatpassword" placeholder="Repeter le mot de passe"><br>

        <input type="submit" name="submit" value="S'inscrire"/>

    </form>
</div>

<footer>
    <div class="wrapper">
        <h1>Livres<span class="orange">.</span></h1>
        <div class="copyright">Copyright © Tous droits réservés.</div>
    </div>
</footer>
       
</body>
</html>
