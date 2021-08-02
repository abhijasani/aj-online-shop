<?php
include('include/config.php');
session_start();
extract($_POST);
if(! empty($_POST))
{
$sq=mysqli_query($link,"select * from register where r_email='".addslashes($email)."' and r_pwd='".addslashes($pwd)."' ");
$row=mysqli_fetch_assoc($sq);
     if(! empty($row))
    {
		if($row['r_status']==0)
		{
			$_SESSION['error']="Your Account is Blocked!";
		header("location:login.php");
		}
		else
		{
			$t=time();
	$_SESSION['client']['nm']=$row['r_fnm'];
	$_SESSION['client']['uid']=$row['r_id'];
    $_SESSION['client']['status']=true;
    $login=$email.' Is Logged in';
    $uq="insert into logs (ac_nm,ac_time) values('$login','$t')";
	mysqli_query($link,$uq);
	if(isset($_SESSION['url'])) 
     { 
     $url=	$_SESSION['url'];
     	header("location:$url");
      } else
      {
header('location:index.php');
       }
  }
	}
	else
	{
		$_SESSION['error']="Enter Valid Email Or Password!";
		header("location:login.php");
	}

}
else
{
	$_SESSION['error']="please enter email or password!";
	header("location:login.php");
}
?>