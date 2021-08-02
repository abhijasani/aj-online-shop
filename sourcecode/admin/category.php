<?php
include("include/header.php");
?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">add category</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span> add category</span></li>
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
                            <form action="category_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Category Name</label>
                                     <input class="form-control" type="text" name="cnm"  id="example-text-input">
                                </div>
                                <div>
                                    <input type="file" name="image" /><br/>
                                </div>
								
                               	
                                 <div class="form-group">
                                    <input class="btn btn-success mb-3" type="submit" value="add category" >
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