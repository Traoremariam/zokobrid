<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<title>zokubird</title>
</head>
<body style="border: 2px solid black " >
	<div class="row " >

		<div class="col-4">	<img class="deux"src="../img/zoku.png"> </div>
		<div class="col-4 mt-5">Bienvenu Kouakou <br> Vous êtes éditeur sur la page zokubird <br>de : Hôtel Kipré <br>  <a href="">Déconnexion</a> </div>
				<div class="col-4 mt-5"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  	<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
</svg></div>
	
	</div>
	<div class="row text-center" style="background: #ff4500; ">
			
				<div class="col-6">  <a href="informationadmin.php" style="color: white"> VOTRE PAGE </a></div>
				<div class="col-6"> <a href="gestionutisalateur.php" style="color: white">  GESTION UTILISATEURS  </a></div>
				
				 
	</div>
		 	<div style="text-align: center; font-weight: bold;font-size: 20px; margin-top: 20px;">GESTION DES UTILISATEURS (3) </div>
		 	<div class="row text-center">
		 		<div class="col-3" style="background: #ff4500; height: 40px; margin-left: 20px;"> <a href="ajoututilisateur.php" style="color: white ; ">Ajouter un utilisateur</a> </div>
		 		<div class="col-4">Les utilisateurs en rouge sont les utilisateurs bloqués qui ne pourront plus se connecter à la plateforme 
 
 				</div>
		 	</div>



		 	<center>
		 		<table class="table table-bordered text-center mt-3" style="width: 85%;">
        <thead>
          <tr style="background:#ff4500 "> 
            <th>Nom</th>
            <th>Rôle</th>
            <th>Description </th>
            <th> Date d’enregistrement</th>
			<th></th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kouakou </td>
            <td>Editeur </td>
            <td> Saisie des données (questions et <br> réponses) </td>
            <td> 10/06/2020 à 12 :30 </td>
            <td> Opérations </td>



   

          </tr>
          <tr>
            <td>AKA jean</td>
            <td> Superviseur</td>
            <td> Supervise les activités de <br>l’administration et des utilisateur </td>
            <td> 12/06/2020 à 16 : 40 </td>
            <td> Opérations </td>

           </tr>
           <tr>
            <td>YAO roger </td>
            <td> Editeur </td>
            <td> Saisie des données (questions et réponses) </td>
            <td> 12/06/2020 à 00 :12 </td>
            <td> Opérations</td>


           </tr>

           
          


          </tr>
        </tbody>
      </table>
		 	</center>
		 	<div class="row text-center " >   
		 		<div class="col-3 "><button style="background:#ff4500; "><<</button></div>
		 		<div class="col-3 "><button style="background:#ff4500; ">1</button></div>
		 		<div class="col-3 "><button style="background:#ff4500; ">2</button></div>
		 		<div class="col-3 "><button style="background:#ff4500; ">>></button></div>

		 	</div>
		 	<div class="row mt-5" style="height: 30px; background:#ff4500;" >
   	 <div class="col-md-12 text-center text-light"> Copyright zokubird</div> 
   	  </div>
</body>
</html>