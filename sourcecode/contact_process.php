<?php
session_start();

if(! empty($_POST))
{
    $error=array();
    extract($_POST);

    if(empty($name))
    {
        $error[]="please enter your name";
    }

    if(empty($email))
    {
        $error[]="please enter your email";
    }

    if(empty($mno))
    {
        $error[]="please enter your mobile no";
    }
    else if(! is_numeric($mno))
    {
        $error[]="please enter number";
    }
    else if(strlen($mno) !=10 )
    {
        $error[]="please enter vaild no";
    }

    if(empty($messege))
    {
        $error[]="please enter your massage";
    }

    if(! empty($error))
    {
        foreach($error as $er)
        {
           /* echo '<font color="red">'.$er.'<font>'; */
            $_SESSION['error'] = $error;
        header("location:contact.php");
    
        }
    }   
    else
    {
        include("include/config.php");

        $q = "insert into contact
        (c_nm,c_mno,c_email,c_msg,c_time) 
        values
        ('$name','$mno','$email','$messege',$t)";

        mysqli_query($link,$q);

        $_SESSION['done']="done ! successfully registtration";
       header("location:contact.php");  
    }
 
}
else
{
    header("location:contact.php");
}


?>