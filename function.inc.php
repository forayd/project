<?php

function emptyRegisterInput($name, $fr, $ar, $an) {
    $result;
    if (empty($name) || empty($fr) || empty($ar) || empty($an)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function invalidName($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function invalidFr($fr) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $fr)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function invalidAn($an) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $an)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function invalidAr($ar) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $ar)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}


function creatUser($conn, $name, $fr, $ar, $an) {
    $sql = "INSERT INTO users (Nom, francais, arabe, anglais) VALUE (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

        if( !mysqli_stmt_prepare($stmt, $sql) ) {
            header("Location: register_form.php?error=stmtFailed");
            exit();
        }

        
        mysqli_stmt_bind_param($stmt, "ssss", $name, $fr, $ar, $an);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: register_form.php?error=none");
        exit();
}




