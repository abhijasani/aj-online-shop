<?php  
include("include/header.php");
session_start();

?>
  <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>login form</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> LOGIN FORM </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<html>
<head>
<style type="text/css">
form{
    margin-left:550px;
	line-height:10px;
	
}

label{
    margin-top:20px;
    font-size:23px;
    
}
h1{
	margin-left:550px;
    font-size:40px;
    margin-top:130px;
}
.c1{
    width:40%;
    display:block;
    height:35px;
}
.c2{
    margin-left:20px;
}
.btn1{
height:20px;
width:150px;
}

</style>

</head>
<body>
<h1>LOGIN FORM</h1>
<?php 
if(isset($_SESSION['error']))
				{	
				echo'<font color="red">'.$_SESSION['error'].'</font>';
				unset($_SESSION['error']);
			    }
				?>
				


<form action="login_process.php" method="post">

<label>Email</label><br />
<input type="textbox" name="email" class="c1"  ><br />

<label>Password</label><br />
<input type="password" name="pwd" class="c1"  ><br /><br />

<input type="submit" value=" login" class="btn1" ><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</form>

</body>
</html>
<?php
include("include/footer.php");
?>