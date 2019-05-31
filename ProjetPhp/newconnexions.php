<?php
session_start();
// parametre de connexion
$host_name = "localhost";
$database = "postfix";
$db_user_name = "root";
$db_password = "passofbdd";
// connexion
$conn = mysqli_connect($host_name, $db_user_name, $db_password, $database);
// initialisation
// recuperation et insertion
if (isset($_POST['submit'])) {
 
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, MD5($_POST['password']));
        
 $check = mysqli_query( $conn, "SELECT email, password FROM user WHERE email = '$email' and password= '$password'");
    if ( !$check ) {
      printf("Message d'erreur : %s\n", mysqli_error($conn));
}

        $nb_rows = mysqli_num_rows($check);
        if ($nb_rows > 0) {
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$authOK = true;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<link href="styles.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Refresh" content="5;URL=livre.php"> 
</head>
<body>
<header>
            <div class="wrapper">
                <h1>Livres<span class="orange">.</span></h1>
                <nav>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="livre.html">Livres</a></li>
                        <li><a href="newconnexion.php">Connexion</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<?php
// Initialisation du message de réponse

$message = 'Bonjour '.$email.', vous allez être redirigé vers l\'espace membre';
?>
  </div>

<div id="message_bienv">
  <p><?php echo $message ?></p>
</div>
<?php
        } else {
            echo "Wrong Login/password";
        }
    } else {
        echo 'Veuillez remplir tous les champs';
    }
}
?> 

