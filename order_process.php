<?php session_start();
include("include/config.php");


if(!empty($_POST))
{
extract ($_POST);
$t=time();
$item=$_SESSION['cart'];
foreach($item as $id=>$val)
{

	$qty=$val['qty'];
	$rate=$val['price']*$val['qty']; 
	$nm=$val['nm'];
	$total = $total;
	
/*	echo $nm;
	echo '<br />';
	echo $uid;
	echo '<br />';
	echo $mno;
	echo '<br />';
	echo $qty;
	echo '<br />';
	echo $rate;
	echo '<br />';
	echo $total;
	echo '<br />';
	echo $city;
	echo '<br />';
	echo $address; */
	
	
	$link = mysqli_connect("localhost","root","");

    mysqli_select_db($link,"aj_online_shop");
		
	$q = "insert into orders
        (o_nm,o_uid,o_mno,o_qty,o_rate,o_total,o_city,o_add,o_time) 
        values
        ('$nm',$uid,$mno,$qty,$rate,$total,'$city','$address',$t)";
  
  mysqli_query($link,$q);
  
 /* echo 'Your Order Has Been Successfully Placed Our Delivery Boys Connect You Soon'; */
 }
  $_SESSION['done']="Your Order Has Been Successfully Placed Our Delivery Boys Connect You Soon";
  unset($_SESSION['cart']);
  
	$log='you have a new order <a href="order_manage.php">view</a>';
    
    $aq="insert into logs (ac_nm,ac_time) values ('$log','$t')";
    mysqli_query($link,$aq); 
    
  header("location:order_history.php"); 
 }
 /*else 
 { 
 header("location:order.php");
 } */
?>