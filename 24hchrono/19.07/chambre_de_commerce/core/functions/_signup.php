<?php  
	
	//Base de donnees
	include "_bdd.php";

/*_______________________________________________


			All CCAIMAG functions

_________________________________________________*/


if(isset($_POST['inscription'])){

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $statut = filter_input(INPUT_POST, 'statut', FILTER_SANITIZE_STRING);

    $statut = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    //$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $date = date("Y-m-d | h:i:sa");


    $sql = "INSERT INTO users (nom, email, password, statut,user_date) 
            VALUES (:nom, :email, :password, :statut, :ndate)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":nom" => $nom,
        ":email" => $email,
        ":password" => $password,
        ":statut" => $statut,
        ":ndate" => $date
    );

    // Execution de la requete
    $saved = $stmt->execute($params);

    // Redirection
    if($saved) header("Location: ../../login.php");
}

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);;
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

try
  { 
  
   $stmt = $db->prepare("SELECT * FROM users WHERE email=:email");
   $stmt->execute(array(":email"=>$email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   var_dump($count);
   if($row['password']==$password){
    session_start();
    $_SESSION['user_session'] = $row['id_user'];
    header("Location: ../../index.php");
   }
   else{

    
    header("Location: login.php");
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }
?>