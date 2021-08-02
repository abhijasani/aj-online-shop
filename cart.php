<?php
include("include/header.php");
?>

                

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                    <form action="addtocard.php" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>no.</th>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                       <?php     
                       
                       $co = 1;
                       $total = 0;

                       foreach($_SESSION['cart'] as $id=>$val)
                       {
                           $rate = $val['qty'] * $val['price'];
                           $total = $total + $rate;

                          echo  '<tr>';
                          echo '<td>'.$co.'</td>';
                           echo     '<td class="thumbnail-img">';
                            echo    '<a href="#"><img class="img-fluid1" src="images/product/'.$val['img'].'" alt="" /></a>';
                            echo '</td>';
                            echo '<td class="name-pr">';
                            echo    '<a href="#">'.$val['nm'].'</a>';
                            echo '</td>';
                            echo '<td class="price-pr">';
                            echo    '<p>₹ '.$val['price'].'</p>';
                            echo '</td>'; 
                           echo '<td class="quantity-box"><input type="number" size="4" value="'.$val['qty'].'" min="1" class="c-input-text qty text" name="'.$id.'"></td>';
                            echo '<td class="total-pr">';
                            echo    '<p>₹ '.$rate.'</p>';
                            echo '</td>';
                            echo '<td class="remove-pr">';
                            echo    '<a href="addtocard.php?id='.$id.'"><i class="fas fa-times"></i></a>';
                            echo '</td>';
                             echo '</tr>';
                        $co++;

                       }
                       ?>
                       <tr>
                        <td colspan="5" style="text-align:right" class="td-css">grand total</td>
                        <td colspan="2" class="td-css"> ₹ <?php echo $total; ?></td>
                        </tr>
                       
                       
                            </tbody>
                        </table>
                                 <div class="col-lg-6 col-sm-6">
                                     <div class="update-box">
                                        <input value="Update Cart" type="submit">
                                       
                                     </div>
                                 </div>
								 
								 
									<a href="index.php" class="btn btn-danger" style="width:25px height:18px" aria-hidden="true">Continue Shopping</a>
								
								<?php echo '<a href="order.php?total='.$total.'&id='.$id.'&rate='.$rate.'"class="btn btn-success" style="margin-top:6px" >Complete Order</a>';?>
				
                        </form>
                    </div>
                </div>
            </div>

           
                
            </div>

           

        </div>
    </div>
    <!-- End Cart -->
<?php
include("include/footer.php");
?>