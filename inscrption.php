

<?php 


$nom = $email = $tel = $pays = $ville = $adresse = $mdp = $mdp1 = "";
$nomError = $emailError = $telError = $paysError = $villeError = $adresseError = $mdpError = $mdp1Error = "";
$success = false;
$myemail= "mariamsabrinatraore@gmail.com";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nom    = verification($_POST['nom']);
	$email   = verification($_POST['email']);
	$tel     =  verification($_POST['tel']);
	$pays    = verification($_POST['pays']);
	$ville   =verification($_POST['ville']);
	$adresse = verification($_POST['adresse']);
	$mdp     =  verification($_POST['mdp']);
	$mdp1    = verification($_POST['mdp1']);
	$success = true;


if (empty($nom)) {

	$nomError = "tu t'es trompé";
$success = false;

}
if (empty($email)) {

	$emailError = "tu t'es trompé";
$success = false;

}
if ($success) {
	# code...
}

}



function verification($var){
	$var = trim($var);
	$var = stripcslashes($var);
	$var = htmlspecialchars($var);
	return $var;

}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<title>zokubird</title>
</head>
<body>
	<div class="row mt-5" >
   		<div class="col-md-6 text-center">
			<img class="deux"src="img/zoku.png"> 
			<div> <p class="text-warning">Avec nous obtenez une page web qui <br> écoute et parle à vos visiteurs. </p> </div>
		<div class="mt-3 btn">	<a href="ADMINISTRATION/connexion.php" class="cnn " >CONNEXION</a></div>
   			
   		</div>
   		<div class="col-md-6" style="border: 1px solid #ff4500">
   			<div class="row text-light text-center" style="background:#ff4500;">
   			CREER UN COMPTE
   		     </div>
    	    <form class="m-3 was-validated " action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);  ?>" method="POST">

			 	<div class="row">
			 	  <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Nom et prénoms </label>
			    	<input name="nom" type="text" class="form-control" id="formGroupExampleInput" placeholder="Votre nom et prénoms required" value=" <?php echo($nom) ?> ">
			    	<span style="color: #d82c2e"> <?php echo $nomError; ?> </span>
			  	 </div>
			  	 <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Email</label>
			    	<input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Votre email"  value=" <?php echo($email) ?> ">
			    	<span style="color: #d82c2e"> <?php echo $emailError; ?> </span>
			    	

			  	 </div>
			  	 <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Telephone</label>
			    	<input name="tel" type="tel " class="form-control" id="formGroupExampleInput" placeholder="+22568986345">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    	

			  	 </div>
			 	 <div class="form-group col-md-6">
			    	<label  for="formGroupExampleInput2">Pays</label>
			   		<input name="pays" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cote d'ivoire">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    	

			  	</div>
			  	<div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Ville</label>
			    	<input name="ville" type="text" class="form-control" id="formGroupExampleInput" placeholder="vote ville">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			  


			  	 </div>
			  	 <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Adresse</label>
			    	<input  name="adresse" type="text" class="form-control" id="formGroupExampleInput" placeholder="votre adresse">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    	

			  	 </div>
			  	 <div class="form-group col-md-12">
			    	<label for="formGroupExampleInput">Nom de votre page</label>
			    	<input name="page" type="text" class="form-control" id="formGroupExampleInput" placeholder="mariam'shop">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    	

			  	 </div>
			  	 <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Mot de passe</label>
			    	<input name="mdp" type="password" class="form-control" id="formGroupExampleInput" placeholder="***********">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    

			  	 </div>
			  	 <div class="form-group col-md-6">
			    	<label for="formGroupExampleInput">Reprendre votre mot de passe</label>
			    	<input type="password" name="mdp1" class="form-control" id="formGroupExampleInput" placeholder="***********">
			    	<!-- <span style="color: #d82c2e">message d'erreur</span> -->
			    

			  	 </div>
			 	</div>
			 	<div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Acceptez nos termes et conditions d’utilisation 
			      </label>
			    </div>
			  </div>
			   <div class="text-center"><button type="submit" class="cnn mt-3 btn" style="background: #ff4500;">VALIDER</button></div>
			   <h4 style="text-align: center; display: <?php if ($success) {echo "block"; }else{ echo "none"; }  ?>">Votre message a ete envoye</h4>
	    </form>	
   	</div>
   	</div>
   	<div class="row mt-5" style="height: 30px; background:#ff4500;" >
   	 <div class="col-md-12 text-center text-light"> Copyright zokubird</div> 
   	  </div>
   </div>

    <div class="cols-md background mt-3 text-center" style="font-size: 15px;" >
	   			L’utilisateur à la possibilité de voir nos termes et condition en cliquant sur « Acceptez nos termes et conditions d’utilisation » <br>fait une proposition de terme et conditions d’utilisation 
	</div>
	
</body>
</html>