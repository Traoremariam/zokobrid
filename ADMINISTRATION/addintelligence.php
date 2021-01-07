
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>zokubird</title>
</head>
<body style="border: 2px solid black ">
	<div class="row">
		<div class="col-4">	<img class="deux"src="../img/zoku.png"> </div>
		<div class="col-4 mt-5">Bienvenu Kouakou <br> Vous êtes Editeur sur la page zokubird <br>de : Hôtel Kipré <br>  <a href="">Déconnexion</a> </div>
				<div class="col-4 mt-5"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  	<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
	</svg></div>

		
		
	</div>
	<div class="row text-center" style="background: #ff4500; ">
			
				<div class="col-4">  <a href="tabintelligence.php" style="color: white"> INTELLIGENCE </a></div>
				<div class="col-4"> <a href="echecintelligence.php" style="color: white">  LES ECHECS  </a></div>

				<div class="col-4"> <a href="informationedit.php" style="color: white">MON PROFIL </a></div>
	</div>
	<div class="m-5"style="text-align: center; font-weight: bold;font-size: 25px; margin-top: 20px;">Enregistre une intelligence  </div>

	<center>
		<div  style="border: 2px solid #ff4500; width: 55%;">
 		<div  >
 			<form class="was-validated m-5"style="color: #ff4500; font-size: 20px;">

 				<div class="mb-3">
				    <label for="validationTextarea" style="float: left; color: black;">Les questions</label>
				    <textarea class="form-control is-invalid" id="validationTextarea" required placeholder="qui vous êtes | parlez-nous de vous ?|qui êtes-vous ?| Présentez vous | donnez des informations sur vous |Qui tu es | tu es qui |toi tu es qui "></textarea>
				    <div class="mb-3">
				    <label for="validationTextarea" style="float: left;">La reponse</label>
				    <textarea class="form-control is-invalid" id="validationTextarea" required placeholder="Je suis l’assistant vocal de l’hôtel Kipré. Je suis prête à réponse à vos préoccupations "></textarea>
				    <div class="row">
				    	<div class="col-6">
				    		<div class="form-group">
   								 <label for="exampleFormControlFile1">Ajouter un fichier (jpg, png, mp4) </label>
   								 <input type="file" class="form-control-file" id="exampleFormControlFile1">
  							</div>
				    	</div>
				    	<div class="col-6 mt-2">Ou votre code d’intégration YouTube ci-dessous </div>
				    	

				    </div>
  				</div>
  				<div class="mb-3">
				    <textarea class="form-control is-invalid" id="validationTextarea" required></textarea>
			
			  
			  </div>
			  <button type="submit" class="btn btn-primary" style="background:#ff4500;width: 300px;">Valider  </button>
			</form>
 		
 		</div>
	</div>


	</center>
	
	<div class="row mt-5" style="height: 30px; background:#ff4500;" >
   	 <div class="col-md-12 text-center text-light"> Copyright zokubird</div> 
   	  </div>
</body>
</html>