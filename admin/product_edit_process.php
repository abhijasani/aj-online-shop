<?php
session_start();
/*
echo '<pre>';
print_r($_POST);
print_r($_FILES['image']);
exit;
*/
    
        

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
            header("location:product_edit.php?id=$pid");
         }
        else
        {  
           include("../include/config.php");

     

           $pnm = addslashes($pnm);
           $color = addslashes($color);
           $size = addslashes($size);
           $desc = addslashes($desc);

         if(! empty($_FILES['image']['name']))
         {  
            $img_nm = $t."_".$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],"../images/product/".$img_nm);

             $q="update product set
                p_nm='$pnm',
                p_cat=$category,
                p_color='$color',
                p_price=$price,
                p_size='$size',
                p_desc='$desc',
                p_img='$img_nm'
                where p_id=$pid";
         }
         else{
            $q="update product set
            p_nm='$pnm',
            p_cat=$category,
            p_color='$color',
            p_price=$price,
            p_size='$size',
            p_desc='$desc'
            where p_id=$pid";

         }


           mysqli_query($link,$q);

           $_SESSION['done']="done! succesfully product update";

           header("location:product.php");
        }
    }
    else
    {
        header("location:product.php");
    }

?>