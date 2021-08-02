<?php

$catid= $_GET['id'];
include("include/header.php");

$c_q= "select * from product where p_cat = $catid";
$w_res = mysqli_query($link,$c_q);

?>
<html>
<head>
<style type="text/css">
/*
.image-resize{
    height:400px;
} */

</style>
</head>
</html>

 <!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>category </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> category </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="category-name1"><?php echo $_GET['cat'] ?></div>
  
    <div class="categories-shop1">
        <div class="container">
            <div class="row">
                    

                    <?php

                        while($cat_row = mysqli_fetch_assoc($w_res))
                        {
                            echo '<div class="shop-cat-box1">'; 
                            echo '<img class="img-responsive image-resize" src="images/product/'.$cat_row['p_img'].'" alt="" />';
                            echo '<a class="btn hvr-hover" href="category-single.php?id='.$cat_row['p_id'].'">'.$cat_row['p_nm'].'</a>';
                            echo  '</div>';
                        }

                        ?>
                    
            </div>
        </div>
    </div>



<?php
include("include/footer.php");
?>