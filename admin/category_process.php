<?php
session_start();

$ext= strtoupper(substr($_FILES['image']['name'],-4));

if(! empty($_POST))
{
    $error = array();
    extract($_POST);

    if(empty($cnm))
    {
        $error[]="please enter category name";
    }

    if(empty($_FILES['image']['name']))
    {
        $error[]="please select image";
    }
    else if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF" ))
    {
       
        $error[]="wrong image type";
    }
    
    if(! empty($error))
    {
        foreach($error as $er)
        {
            /* echo '<font color="red">'.$er.'</font><br />'; */
            $_SESSION['error']=$error;
            header("location:category.php");
        }
    }
    else
    {
        include("../include/config.php");

        $img_nm = $t."_".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/category/".$img_nm);

        $q = "insert into category
        (cat_nm,cat_image,cat_time)
        values
        ('$cnm','$img_nm','$t')";

        mysqli_query($link,$q);

        header("location:category.php");
    }
}
else
{
    header("location:category.php");
}
?>