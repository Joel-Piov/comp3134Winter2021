<?php
function Login()
{
    if(empty($_POST['username']))
    {
        alert("Login Invalid")
        return false;
    }
    
    if(empty($_POST['password']))
    {
        alert("Password invalid")
        return false;
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if($username == "host"){
        if($password == "pass"){
            alert("Login Success")
        } else {
            alert("Login Failed")
        }
    } else {
        alert("Login Failed")
    }
}

function alert($msg) {
    echo "<script type='text/javascript'>('$msg');</script>";
}


?>