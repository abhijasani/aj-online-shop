<?php  
include("include/header.php");
extract($_SESSION['register']);

?>
  <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>register form</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> REGISTER FORM </li>
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
<h1>REGISTER FORM</h1>

<?php
         if(isset($_SESSION['done']))
         {
            echo '<p class="done-style">'.$_SESSION['done'].'</P>';
         }
         else if(! empty($_SESSION['error']))
        {
             foreach($_SESSION['error'] as $er)
             {
                 echo '<font color="red">'.$er.'</font><br />';
             }
        }
?>

<form action="register_process.php" method="post">
<label>First Name</label><br />
<input type="textbox" name="fnm"  class="c1" value="<?php echo $fnm ?>" ><br />

<label>Last Name</label><br />
<input type="textbox" name="lnm" class="c1" value="<?php echo $lnm ?>" ><br />

<label>Email</label><br />
<input type="textbox" name="email" class="c1" value="<?php echo $email ?>" ><br />

<label>Phone no.</label><br />
<input type="textbox" name="phone" class="c1" value="<?php echo $phone ?>" ><br />

<label>Gender</label><br /><br />
<input type="radio" value="male" name="gender" value="<?php echo $gender ?>" >male
<input type="radio" value="female" class="c2"  name="gender" value="<?php echo $gender ?>" >female<br />

<label>Password</label><br />
<input type="password" name="pwd" class="c1" value="<?php echo $pwd ?>" ><br />

<label>Conform password</label><br />
<input type="password" name="cpwd" class="c1" value="<?php echo $cpwd ?>" ><br /><br/><br/>

<input type="submit" value="i accept & register" class="btn1" ><br/><br/>

</form>
<?php

        if(isset($_SESSION['done']))
        {
            unset($_SESSION['done']);
        }

        if(isset($_SESSION['error']))
        {
            unset($_SESSION['error']);
            unset($_SESSION['register']);
        } 

?>
</body>
</html>
<?php
include("include/footer.php");
?>