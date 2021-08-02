<?php
session_start();

    $ext= strtoupper(substr($_FILES['image']['name'],-4));
        

    if(! empty($_POST))
    {
        extract($_POST);
        $error = array();

        if(empty($pnm))
        {
            $error[]="please enter product name";
        }

        if(empty($color))
        {
            $error[]="please enter product color";
        }

        if(empty($price))
        {
            $error[]="please enter product price";
        }
        else if(! is_numeric($price))
        {
            $error[]="please enter valid price";
        }

        if(empty($size))
        {
            $error[]="please enter product size";
        }

        if(empty($desc))
        {
            $error[]="please enter product decription";
            
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
            $_SESSION['error']=$error; 
            header("location:product.php");
         }
        else
        {
           include("../include/config.php");
            $img_nm = $t."_".$_FILES['image']['name'];
           move_uploaded_file($_FILES['image']['tmp_name'],"../images/product/".$img_nm);

           $pnm = addslashes($pnm);
           $color = addslashes($color);
           $size = addslashes($size);
           $desc = addslashes($desc);

           $q="insert into product
           (p_nm,p_cat,p_color,p_price,p_size,p_desc,p_img,p_time)
           values
           ('$pnm',$category,'$color',$price,'$size','$desc','$img_nm','$t')";

           mysqli_query($link,$q);

           $_SESSION['done']="done! succesfully product add";

           header("location:product.php");
        }
    }
    else
    {
        header("location:product.php");
    }

?>