<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />

        <title>Blog agent de voyages</title>

   		 <link href="style.css" rel="stylesheet" />
   	</head>

   	<body>

   		<h1>Bienvenue sur le blog des voyages</h1>

   		<h2>Derniers articles publiés</h2>

<?php
			//CONNEXION A LA BDD / mysql : alex
ini_set("display_errors", 1);
try
{
	$bdd = new PDO ('mysql:host=localhost;dbname=my_blog;charset=utf8','alex','alexandra32');
}

catch (Exception $e)
{
	die('Erreur:'.$e->getMessage());
}

  // Affiche tous les billets de la bdd

$req =$bdd->query('SELECT * FROM billets');



while ($reponse = $req->fetch())
{
  
?>
      <div class="news">

        <h3><?php echo $reponse['titre']; ?></h3>

        <p><?php echo $reponse ['contenu']; ?></p>

      </div>

<?php
}

$req->closeCursor(); // arrete la requete
?>

      <a href="commentaires.php"> Voir commentaires </a>
      
   	</body>

   	</html>
