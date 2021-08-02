<?php
include("include/header.php");
?>
<html>
    <head>
        <style type="text/css">
            .img-size{
                width:40px;
                height:40px;
            } 
        </style>
    </head>
</html>    

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">order list</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>order list</span></li>
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
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>no</th>
                                                <th>name</th>
                                                <th>user id</th>
                                                <th>mobile no.</th>
                                                <th>quality</th>
												<th>rate</th>
												<th>total</th>
												<th>city</th>
												<th>address</th>
												<th>time</th>
											</tr>
                                        </thead>
                                        <tbody>
                                       <?php

                                            $cat_q = "select * from orders";
                                            
                                            $cat_res = mysqli_query($link,$cat_q);

                                           while($cat_row = mysqli_fetch_assoc($cat_res))
                                           {    echo '<tr>';
                                                echo '<td>'.$cat_row['o_id'].'</td>';
                                                echo '<td>'.$cat_row['o_nm'].'</td>';
												echo '<td>'.$cat_row['o_uid'].'</td>';
												echo '<td>'.$cat_row['o_mno'].'</td>';
												echo '<td>'.$cat_row['o_qty'].'</td>';
												echo '<td>'.$cat_row['o_rate'].'</td>';
												echo '<td>'.$cat_row['o_total'].'</td>';
												echo '<td>'.$cat_row['o_city'].'</td>';
												echo '<td>'.$cat_row['o_add'].'</td>';
												echo '<td>'.date('d-m-y',$cat_row['o_time']).'</td>';
												
												
													
												 
                                           }
                                        
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
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