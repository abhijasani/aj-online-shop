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
                            <h4 class="page-title pull-left">category list</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>category list</span></li>
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
                                                <th>number</th>
                                                <th>email</th>
                                                <th>description</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php

                                            $cat_q = "select * from contact";
                                            
                                            $cat_res = mysqli_query($link,$cat_q);

                                           while($cat_row = mysqli_fetch_assoc($cat_res))
                                           {    echo '<tr>';
                                                echo '<td>'.$cat_row['c_id'].'</td>';
                                                echo '<td>'.$cat_row['c_nm'].'</td>';
                                                echo '<td>'.$cat_row['c_mno'].'</td>';

                                                echo '<td>'.$cat_row['c_email'].'</td>';
                                                echo '<td>'.$cat_row['c_msg'].'</td>';

                                             /*   echo '<td>'.$cat_row['cat_image'].'</td>'; */ 
                                                
                                                
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