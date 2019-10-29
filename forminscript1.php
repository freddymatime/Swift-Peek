<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=swift_peek;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if (isset ($_POST["submit"])){

    $pseudo=trim(htmlspecialchars($_POST["pseudo"]));
    /*$allPseudo=$bdd->query("SELECT pseudo FROM users WHERE pseudo='$pseudo'");
    while($alllist=$allPseudo->fetch()){
        if ($pseudo===$alllist){
            die("trouvez un autre pseudo");
        }
       
    }
     */



    $email = trim(htmlspecialchars($_POST["email"]));
    $password = trim(htmlspecialchars($_POST["password"]));
    $password2 = trim(htmlspecialchars($_POST["password2"]));

    
    

       
          
    }



    
        if (isset($pseudo) && isset($email) && isset ($password) && isset($password2)){



                 if ( $password!==$password2 || $pseudo===$alllist ){
                     echo "les password doivent etre identiques et les pseudo different";

                 }
                 else{
                     $password=md5($password);

                    $bdd->exec("INSERT INTO users (pseudo, password, email) VALUE('$pseudo','$password','$email')");
                    echo "inscription reussi";

                 }



        

    }



else{
    echo " completer le formulaire";
}









?>