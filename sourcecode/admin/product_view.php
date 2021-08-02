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
                            <h4 class="page-title pull-left">product list</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>product list</span></li>
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
                                                <th>category</th>
                                                <th>color</th>
                                                <th>price</th>
                                                <th>size</th>
                                                <th>description</th>
                                                <th>image</th>
                                                <th>date</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php

                                            $cat_q = "select * from product";
                                            
                                            $cat_res = mysqli_query($link,$cat_q);

                                           while($cat_row = mysqli_fetch_assoc($cat_res))
                                           {    echo '<tr>';
                                                echo '<td>'.$cat_row['p_id'].'</td>';
                                                echo '<td>'.$cat_row['p_nm'].'</td>';
                                                echo '<td>'.$cat_row['p_cat'].'</td>';
                                                echo '<td>'.$cat_row['p_color'].'</td>';
                                                echo '<td>'.$cat_row['p_price'].'</td>';
                                                echo '<td>'.$cat_row['p_size'].'</td>';
                                                echo '<td>'.$cat_row['p_desc'].'</td>';
                                                echo '<td>';
                                                echo '<img class="img-size" src="../images/product/'.$cat_row['p_img'].'" alt="" />';
                                                echo '</td>';
                                            /*    echo '<td>'.$cat_row['p_img'].'</td>'; */
                                                echo '<td>'.date('d-m-y',$cat_row['p_time']).'</td>';
                                                echo '<td>
                                                <a href="product_edit.php?id='.$cat_row['p_id'].'" class= "btn btn-success btn-xs">edit</a>
                                                <a href="product_delete.php?id='.$cat_row['p_id'].'" class= "btn btn-danger btn-xs" onclick="return confirm(\'do you have delete this item ?\');">delete</a>
                                                </td>';
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