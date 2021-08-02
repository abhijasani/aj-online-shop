<?php
include("include/header.php");

$pid = $_GET['id'];

$p_q= "select * from product where p_id = $pid";
$p_res = mysqli_query($link,$p_q);
$p_row= mysqli_fetch_assoc($p_res);

?>   

<!-- Start All Title Box -->
 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>item </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> category-details </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="category-name"> <?php echo $p_row['p_nm']; ?> </div>
    <div class="row category-single">
        <div class="category-img"> 
            <img src="images/product/<?php echo $p_row['p_img']; ?>">
        </div>
        <div class="category-desc">
            <h2> color </h2>
            <h3><?php echo $p_row['p_color']; ?></h3>

            <h2>price</h2>
            <h3>₹ <?php echo $p_row['p_price']; ?></h3>

            <h2>size</h2>
            <p><?php echo $p_row['p_size']; ?></p>

            <h2>description</h2>
            <p><?php echo $p_row['p_desc']; ?></p>

            <a href="addtocard.php?nm=<?php echo $p_row['p_nm']; ?>&price=<?php echo $p_row['p_price']; ?>&img=<?php  echo $p_row['p_img']; ?>">add to card</a>
        </div>
    </div>    
  
  
	<?php
	include("include/footer.php");
	?>