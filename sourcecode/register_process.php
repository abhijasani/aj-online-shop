<?php

session_start();

if(! empty($_POST))
{
    $error = array();
    extract($_POST);

    if(empty($fnm))
    {
        $error['fnm']="please enter your first name";
    }

    if(empty($lnm))
    {
        $error['lnm']="please enter your last name";
    }

    if(empty($email))
    {
        $error['email']="please enter your email address";
    }

    if(empty($phone))
    {
        $error['phone']="please enter your phone no";
    }

    if(empty($gender))
    {
        $error['gender']="please select your gender";
    }

    if(empty($pwd))
    {
        $error['pwd']="please enter password";
    }

    if(empty($cpwd))
    {
        $error['cpwd']="please enter comform password";
    }

    if($pwd!=$cpwd)
    {
   	$error['match']="Password Do Not Match";  
    }
    else  if(strlen($pwd)<6)
    {
 	$error[]="Enter minimum 6 Digit Password";
    }


    if(! empty($error))
    {
        $_SESSION['error'] = $error;
        $_SESSION['register'] = $_POST;
        header("location:register.php");
    }
    else
    { 
         include("include/config.php");

        $q = "insert into register
        (r_fnm,r_lnm,r_email,r_phone,r_gender,r_pwd,r_time) 
        values
        ('$fnm','$lnm','$email','$phone','$gender','$pwd',$t)";

        mysqli_query($link,$q);

        $_SESSION['done']="done ! successfully registtration";
       header("location:register.php");  
    }
}
else
{
    header("location:register.php");
}


?>