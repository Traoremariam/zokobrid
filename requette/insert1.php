

 <?php 
require 'database.php';

if(!empty($_POST))
{

        $info                  = checkInput($_POST['info']);
        $email               = checkInput($_POST['email']);
        $tel                  = checkInput($_POST['tel']);
        $youtube              = checkInput($_POST['youtube']);
        $facebook            = checkInput($_POST['facebook']); 
        $twiter              = checkInput($_POST['twiter']); 
        $site                = checkInput($_POST['site']); 
           



         $db = Database::connect();

         $statement = $db->prepare("INSERT INTO `utulisateurs`(`information`,`image_video`, `tel`, `email`, `youtube`, `facebook`, `twiter`, `site`) VALUES (?,?,?,?,?,?,?,?)");
         
            $statement->execute(array($info,$email,$,$tel,$youtube,$Facebook,$twiter,$site,));
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