<?php  error_reporting(0);
include ("include/config.php");
session_start();
if(!isset($_SESSION['client']['status']))
{
	header("location:login.php");
}
include("include/header.php");
$uid=$_SESSION['client']['uid'];
$total=$_GET['total'];
$rate=$_GET['rate'];
$pid=$_GET['id'];
$res=mysqli_query($link,"select * from register where r_id=$uid");
$row=mysqli_fetch_array($res);

?>
<html>
<head>
<style type="text/css">
form{
    margin-left:550px;
	line-height:10px;
	
}

h4{
    margin-top:20px;
    font-size:23px;
    
}
h1{
	margin-left:550px;
	font-size:40px;
}
.c1{
    width:40%;
    display:block;
    height:35px;
}
.c2{
    
	width:40%;
    display:block;
    height:60px;
}
.btn1{
height:40px;
width:200px;
margin-left:75px;
margin-top:20px;
}

</style>

</head>




					<center><h4 class="mb-sm-4 mb-3">Add a new Details</h4></center>
					<form action="order_process.php" method="post" class="creditly-card-form agileinfo_form">
						
										<h4 class="c1"> your first name </h4>
										<input class="c1" type="text" name="nm" value="<?php echo $row['r_fnm']; ?>" disabled>
							
										<h4 class="c1"> your last name </h4>
										<input class="c1" type="text" name="unm" value="<?php echo $row['r_lnm']; ?>" disabled>
									
									<h4 class="c1"> enter your mobile no.  </h4>
												<input type="text" class="c1" placeholder="Mobile Number" name="mno" required="">
										
										<h4 class="c1"> enter your address </h4>
												<textarea  class="c2" placeholder="Address" name="address" style="resize:none" required></textarea>
										
									<h4 class="c1"> enter your city name </h4>
										<input type="text" class="c1" placeholder="Town/City" name="city" required="">

									<h4 class="c1"> total amount</h4>
										<input class="c1" type="text" name="total" value="Rs. <?php echo $total; ?>" disabled>
									
									
										<input type="hidden" name="rate"  value="<?php echo $rate; ?>"> 
										<input type="hidden" name="total"  value="<?php echo $total; ?>">
										<input type="hidden" name="uid"  value="<?php echo $uid; ?>">
										<input type="hidden" name="pid"  value="<?php echo $pid; ?>">
								
								
								<input type="submit" class="btn1"  value="Order Now" >
		
					</form><br /><br /><br />
    <!-- End Cart -->
<?php
include("include/footer.php");
?>