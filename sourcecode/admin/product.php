<?php
include("include/header.php");
?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">add product</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>add product</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <?php    if(isset($_SESSION['done']))
                                    {
                                        echo '<p class="alert alert-success">'.$_SESSION['done'].'</p>';
                                    }
                                     else if(! empty($_SESSION['error']))
                                      {
                                          foreach($_SESSION['error'] as $er)
                                      {
                                            echo '<p class="alert alert-danger">'.$er.'</p>';
                                     }
                                }   
                          ?>
                            <form action="product_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">product Name</label>
                                     <input class="form-control" type="text" name="pnm"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label  class="col-form-label">Category</label>
                                    <select class="form-control" name="category" >
                                       <?php  

                                            $cat_q="select * from category";
                                            $cat_res=mysqli_query($link,$cat_q);

                                            while($cat_row=mysqli_fetch_assoc($cat_res))
                                            {
                                                echo ' <option value="'.$cat_row['cat_id'].'">'.$cat_row['cat_nm'].'</option>';
                                            }

                                       ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">color</label>
                                     <input class="form-control" type="text" name="color"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">price</label>
                                     <input class="form-control" type="number" name="price"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">size</label>
                                     <input class="form-control" type="text" name="size"  id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">description</label>
                                     <textarea class="form-control"  name="desc"  id="example-text-input"></textarea>
                                </div>
                                <div>
                                    <input type="file" name="image" /><br/>
                                </div>
								
                               	
                                 <div class="form-group">
                                    <input class="btn btn-success mb-3" type="submit" value="add product" >
                                </div>	
                           </form>   
                           <?php
                                unset($_SESSION['error']);
                                unset($_SESSION['done']);
                        ?>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                   
                </div>
            </div>
        </div>
        <!-- main content area end -->
<?php
include("include/footer.php");
?>