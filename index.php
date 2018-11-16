<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<title>Blog agent de voyages</title>
		

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   		 <link rel="stylesheet" href="style.css"/>
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
      <div class="news" >

	  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="card-deck">  
			<div class="card " style="max-width: 18rem;">
				
			<img class="card-img-top" src=".../100px180/" alt="Card image cap">
				<div class="card-body ">
					<h5 class="card-title"><?php echo $reponse['titre']; ?></h5>
					<p class="card-text"><?php echo $reponse ['contenu']; ?></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>	   
			</div>
			</div>
		</div>
		</div>
	  </div>
      </div>

<?php
}

$req->closeCursor(); // arrete la requete
?>

      <a href="commentaires.php"> Voir commentaires </a>
      
   	</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   	</html>
