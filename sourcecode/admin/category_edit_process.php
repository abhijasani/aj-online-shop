<?php
session_start();



if(! empty($_POST))
{
    $error = array();
    extract($_POST);

    if(empty($cnm))
    {
        $error[]="please enter category name";
    }

    if(! empty($_FILES['image']['name']))
    {
        $ext= strtoupper(substr($_FILES['image']['name'],-4));

        if(!($ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".GIF" ))
        {
            $error[]="wrong image type";
        }
       
    }

    if(! empty($error))
    {
        $_SESSION['error']=$error; 
        header("location:category_edit.php?id=$cid");
     }
    else
    {
        include("../include/config.php");

        if(! empty($_FILES['image']['name']))
        {  
           $img_nm = $t."_".$_FILES['image']['name'];
           move_uploaded_file($_FILES['image']['tmp_name'],"../images/category/".$img_nm);

            $q="update category set
               cat_nm='$cnm',
               cat_image='$img_nm'
               where cat_id=$cid";
        }
        else{
           $q="update category set
           cat_nm='$cnm'
           where cat_id=$cid";

        }


      /*  $q = "insert into category
        (cat_nm,cat_image,cat_time)
        values
        ('$cnm','$img_nm','$t')"; */

        mysqli_query($link,$q);
        $_SESSION['done']="done! succesfully product update";

        header("location:category_edit_process.php");
    }
}
else
{
    header("location:category.php");
}
?>