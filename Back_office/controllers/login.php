<?php
//controllers
require_once('../model/db_connect.php');


function login(){

    $db = dbConnect();
    $msg = "";

    if(isset($_POST['submit'])){

                
        if (!isset($_POST['userName']) || empty($_POST['userName'])
        || (!isset($_POST['password']) || empty($_POST['password']))){
    
            $msg="Merci de remplir les champ  !";
        } else { 
    
            $userName = htmlspecialchars($_POST['userName']);
            $password = htmlspecialchars($_POST['password']);
                                                            
            $req = $db->prepare("SELECT * FROM admin WHERE userName = :userName");
            $req->bindParam(':userName', $userName);
            $req->execute();
    
            if ($req->rowCount() > 0 ) {    
    
                $data = $req->fetchAll();   
    
                if (password_verify($password, $data[0]["password"])) {
    
                    $_SESSION['userName'] = $data[0]['userName']; 
                }
    
                if (!password_verify($password, $data[0]["password"])) {
    
                    $msg='identifiant ou mots de passe incorrect';
                }
    
            } else {
            
                $msg='identifiant ou mots de passe incorrect';
                
            }
        }
    }

    require_once('../view/login.php');
}