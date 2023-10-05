<?php
//index.php
session_start();

try {

    //controllers
    require_once('../controllers/login.php');



    //si admin se déconnecter
    if (isset($_GET['action']) && $_GET['action'] == "signout") {
        session_destroy();
    }

    //page

    if (!$_SESSION['userName']) {
        login();
    } else {
        echo "Une session et crée";


        
        //le reste du code









        








    }
    

} catch (\Throwable $th) {








}