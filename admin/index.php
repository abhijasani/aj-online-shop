<?php
include("include/header.php");
?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Datatable</span></li>
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
                                                <th>no.</th>
                                                <th>email id</th>
                                                <th>time</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										  <?php

                                            $cat_q = "select * from logs";
                                            
                                            $cat_res = mysqli_query($link,$cat_q);

                                           while($cat_row = mysqli_fetch_assoc($cat_res))
                                           {    echo '<tr>';
                                                echo '<td>'.$cat_row['l_id'].'</td>';
                                                echo '<td>'.$cat_row['l_email'].' is logged in</td>';
												echo '<td>'.date('d-m-y',$cat_row['l_time']).'</td>';
                                             
                                             
                                                echo '</tr>';
                                               
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