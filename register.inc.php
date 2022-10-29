<?php

if (isset($_POST['submit'])) {
    
  require_once 'connection.php';
    require_once 'function.inc.php';

    $name = $_POST['username'];
    $fr = $_POST['francais'];
    $ar = $_POST['arabe'];
    $an = $_POST['anglais'];

  

        if ( emptyRegisterInput($name, $fr, $ar, $an) !== false) {
            header("location: register_form.php?error=emptyinput");
            exit();
        }

        if(invalidName($name) !== false) {
            header("location: register_form.php?error=empty");
            exit();
        }
        if(invalidFr($fr) !== false) {
            header("location: register_form.php?error=empty1");
            exit();
        }
        if(invalidAr($ar) !== false) {
            header("location: register_form.php?error=empty2");
            exit();
        }
        if(invalidAn($an) !== false) {
            header("location: register_form.php?error=empty3");
            exit();
        }
        
       
        creatUser($conn,$name, $fr, $ar, $an);


} else {
    header("location: register_form.php");
    exit();
}
