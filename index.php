<?php
include("include/header.php");
?>   
<html>
<head>
<style type="text/css">
/*
.image-resize{
    height:400px;
    padding:0 18px 0 0 ;
} */

</style>
</head>
</html>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/slide-1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AJ Online Shop</strong></h1>
                            <p class="m-b-40">Purches Big Brands Item At Very Comfortable Price.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slide-2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AJ Online Shop</strong></h1>
                            <p class="m-b-40">Purches Big Brands Item At Very Comfortable Price.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/slide-3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AJ Online Shop</strong></h1>
                            <p class="m-b-40">Purches Big Brands Item At Very Comfortable Prices.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
            <?php
include("include/header.php");

$cat_q = "select * from category";
                                    
$cat_res = mysqli_query($link,$cat_q);

while($cat_row = mysqli_fetch_assoc($cat_res))
{   echo '<div class="shop-cat-box1">'; 
   echo '<img class="img-responsive image-resize" src="images/category/'.$cat_row['cat_image'].'" alt="" />';
    echo '<a class="btn hvr-hover" href="category.php?id='.$cat_row['cat_id'].'&cat='.$cat_row['cat_nm'].'">'.$cat_row['cat_nm'].'</a>';
    echo  "</div>";
}

?>

              
                
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button data-filter=".top-featured">latest product</button>
                        </div>
                    </div>
                </div>
            </div>
<?php
        include("include/header.php");

        $cat_q = "select * from product order by p_id desc LIMIT 0,4";
                                            
        $cat_res = mysqli_query($link,$cat_q);
        echo '<div class="row special-list">';
        while($cat_row = mysqli_fetch_assoc($cat_res))
        {
          echo  '<div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="images/product/'.$cat_row['p_img'].'" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="category-single.php?id='.$cat_row['p_id'].'" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <a class="cart" href="addtocard.php?nm='.$cat_row['p_nm'].'&price='.$cat_row['p_price'].'&img='.$cat_row['p_img'].'">add to card</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>'.$cat_row['p_nm'].'</h4>
                            <h5>$ '.$cat_row['p_price'].'</h5>
                        </div>
                    </div>
                </div>';
            

        }
        echo '</div>';
        ?>
        </div>
    </div>
    <!-- End Products  -->
	<?php
	include("include/footer.php");
	?>