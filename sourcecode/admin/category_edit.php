<?php
include("include/header.php");
$cid= $_GET['id'];
$q= "select * from category where cat_id=$cid";
$res=mysqli_query($link,$q);
$row=mysqli_fetch_assoc($res);
?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">edit category</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span> edit category</span></li>
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
                            <form action="category_edit_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Category Name</label>
                                     <input class="form-control" type="text" name="cnm"  id="example-text-input" value="<?php echo $row['cat_nm']; ?>">
                                </div>
                                <div>
                                <img src="../images/category/<?php echo $row['cat_image']; ?>" width="70px" height="60px"><br/><br/>
                                    <input type="file" name="image" /><br/>
                                </div>
                                <input type="hidden" name="cid" value='<?php echo $row['cat_id'];  ?>' >
								
                                 <div class="form-group">
                                    <input class="btn btn-success mb-3" type="submit" value="edit category" >
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