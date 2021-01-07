<?php 
require 'database.php';

if(!empty($_POST))
{

 		$nom               	 = checkInput($_POST['nom']);
        $email       		 = checkInput($_POST['email']);
        $tel             	 = checkInput($_POST['tel']);
        $pays             	 = checkInput($_POST['pays']);
        $ville             	 = checkInput($_POST['ville']);
        $adresse          	 = checkInput($_POST['adresse']); 
        $page          		 = checkInput($_POST['page']); 
        $mdp         	     = checkInput($_POST['mdp']); 




         $db = Database::connect();

         $statement = $db->prepare("INSERT INTO `utulisateurs`(`nom_et_prenom`, `tel`, `email`, `pays`, `nom_de_page`, `ville`, `adresse`, `mot_de_passe`) VALUES (?,?,?,?,?,?,?,?)");

          $statement->execute(array($nom,$email,$tel,$pays,$ville,$adresse,$page,$mdp,));
           Database::disconnect();

            header("Location: ../ADMINISTRATION/connex.php");

}

        
function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

 ?>