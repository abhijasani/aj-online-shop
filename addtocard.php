<?php
        session_start();

    if(isset($_GET['nm']))
    {
        $_SESSION['cart'][]= array("nm"=>$_GET['nm'],"img"=>$_GET['img'],"price"=>$_GET['price'],"qty"=>1);
    }
    else if(!empty($_POST))
    {
        foreach($_POST as $id=>$val)
        {
            $_SESSION['cart'][$id]['qty']=$val;
        }
    }
    else if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        unset($_SESSION['cart'][$id]);
    }
    else if (! empty($_POST))
    {
        foreach($_POST as $id=>$val)
        {
            $_SESSION['cart'][$id]['qty']=$val;
        }
    }
    else if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        unset($_SESSION['cart'][$id]);
    }    
    
    

    header("location:cart.php");


?>