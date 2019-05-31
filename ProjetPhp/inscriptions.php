<?php
   
if (isset($_POST['submit']))
{
   
$nom = htmlspecialchars(trim($_POST['nom']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
   
if ($nom&&$prenom&&$email&&$password&&$repeatpassword)
        {
        if (strlen($password)>=6)
            {
                if ($password==$repeatpassword)
                {
            // On crypte le mot de passe
                $password = md5($password);
 
 // on se connecte à MySQL et on sélectionne la base
    $c = new mysqli ("localhost","root","passofbdd","postfix");
  
 //On créé la requête
$sql = "INSERT INTO user VALUES ('$nom','$prenom','$email','$password')";
  
    // On envoie la requête
$res = $c->query($sql);
       // on ferme la connexion
mysqli_close($c);
  
}else echo "Les mots de passe ne sont pas identiques";
}else echo "Le mot de passe est trop court !";
}else echo "Veuillez saisir tous les champs !";
   
}

header('Location: https://www.projetlinux.com/');
  exit();
   
?>
