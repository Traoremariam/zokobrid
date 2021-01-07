<?php
  session_start();
  
  $message = "";
  // On inclut la connexion à la base
require 'database.php';


  try {
    //connexion a la base de donnees
    

    if(isset($_POST['btnValider'])){
      //recuperation de donnees
      $email = $_POST['email'];
      $page = $_POST['page'];

      $mdp = $_POST['mdp']; 

      //Verifier la validite de email et password
      if(empty($email) || empty($page || empty($mdp)){
        $message = 'Veuillez res....';
      }
      else{
        //recherche de l'utilisateur ayant cet couple email et password
        $query = "SELECT * FROM user WHERE email = :valEmail AND nom_de_page = :valnom_de_page AND mot_de_passe = :valmot_de_passe";
        $stmt = $conn->prepare($query);
        $stmt->execute(
          array('valEmail' => $email,
                'valPassword' => $page
                'valPassword' => $mdp)
              )
        );
        header("Location: ../ADMINISTRATION/tabintelligence.php");

           }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}  

?>