<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Mon site web</title>

    <link href="styles.css" rel="stylesheet">

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
<h1>CONNEXION</h1>

    <form method="post" action="newconnexions.php">
        <input type="text" name="email" placeholder="Email"/><br>
        <input type="password" name="password" placeholder="Mot de passe"/><br>
        <input type="submit" name="submit" value="Se connecter"/>
    </form>

    <footer>
            <div class="wrapper">
                <h1>Livres<span class="orange">.</span></h1>
                <div class="copyright">Copyright © Tous droits réservés.</div>
			</div>
        </footer>
</div>

</body>
</html>
