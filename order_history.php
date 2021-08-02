<?php
error_reporting(0);
 include ("include/header.php");
include ("include/config.php");
if(!isset($_SESSION['client']['status']))
{
	header("location:login.php");
}
$uid=$_SESSION['client']['uid'];
$res=mysqli_query($link,"select * from orders where o_uid=$uid order by o_id desc");
 ?>
 	<center><h3>Mr.  <?php echo $_SESSION['client']['nm']; ?></h3>
 <br>
 <h5>Your Complete Order History</h5></center>
 <br>
 	<?php
 if(isset($_SESSION['done']))
 {
 	echo'<center><b><font color="green">'.$_SESSION['done'].'</font></b></center>';
 }
 unset($_SESSION['done']);
 ?>
 	<center><h2>Your Orders</h2></center>
<table class="" align="center"   border="3" width="80%" >
  <thead >
    <tr align="center" >
      <th>No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Qty.</th>
      <th scope="col">Total</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
    $co=1;
  while($row=mysqli_fetch_array($res))
  {
  	
   $sq="select * from product where p_nm='".$row['o_nm']."' ";
     $cres=mysqli_query($link,$sq);
      $crow=mysqli_fetch_assoc($cres);
     $rate=($row['o_qty'])*($crow['p_price']);
      
      
       echo'<tr align="center">
       <td>'.$co.'</td>
      <td>'.$crow['p_nm'].'</td>
      <td><img align="center" src="images/product/'.$crow['p_img'].'" width="100px" height="100px" /></td>
      <td>Rs '.$crow['p_price'].'</td>
     <td>'.$row['o_qty'].'</td>
    <td>'.$rate.'</td>
       <td>'.date('d-m-Y',$row['o_time']).'</td>
  
    </tr>';
    $co++;
    }
echo'</tbody>';
echo'</table>';
?>
	<br><br><br>
	<?php include ("include/footer.php"); ?>