<?php
session_start();
if (!isset($_SESSION['email'])) {
	header ('Location: nonmember.html');
	exit();
}
?>
<!DOCTYPE html>
<head>
	<title>O'library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="reset.css"/>
	<link rel="stylesheet" href="livre.css"/>
<link href="styles.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">

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
Bienvenue <?php echo htmlentities(trim($_SESSION['email'])); ?> !<br />
</body>
</html>

	<img id="livre1" img src="livre.jpg">
	<div id="liste1">
	<ul>
		<li>Les aventures de Guigui</li>
		<li>Claire</li>
		<li>24 - 10 -2018</li>
	</ul>
</div>
<button type="submit" id="bouton_reserver1" >Réserver</button>
	<img id="livre2" img src="livre.jpg">
	<div id="liste2">
		<ul>
			<li>Chair de poule</li>
			<li>Xavier</li>
			<li>11 - 11 -2018</li>
		</ul>
	</div>
<button type="submit" id="bouton_reserver2" >Réserver</button>
	<img id="livre3" img src="livre.jpg">
	<div id="liste3">
		<ul>
			<li>Math</li>
			<li>François</li>
			<li>17 - 08 -2016</li>
		</ul>
	</div>
<button type="submit" id="bouton_reserver3" >Réserver</button>
	<img id="livre4" img src="livre.jpg">
	<div id="liste4">
		<ul>
			<li>Kirikou</li>
			<li>Tom</li>
			<li>21 - 07 -2017</li>
		</ul>
	</div>

<button type="submit" id="bouton_reserver4" >Réserver</button>
</body>

</html>
