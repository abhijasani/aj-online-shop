<?php
 include("include/header.php");
?>

<html>
<head>
<style type="text/css">
.c1{
    width:65%;
    display:block;
    height:35px;
}

.c2{
    align="center";
}

.c3{
    width:65%;
    display:block;
    height:120px;
}
</style>
</head>
</html>
           
   

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                          <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: samras boys hostel <br>near saurastra univercity,<br> gangotri park,<br>rajkot-360001. </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-9737579748">9737579748</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:abhijasani7@gmail.com">abhijasani7@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>CONTACT US</h2>
                          <form action="contact_process.php" method="post">
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

                                <lable><b>Your Name</b></lable><br/>
                                <input type="textbox" name="name" class="c1"><br/>

                                <lable><b>Your Mobile No</b></lable><br/>
                                <input type="textbox" name="mno" class="c1"><br/>

                                <lable><b>Your Email</b></lable><br/>
                                <input type="textbox" name="email" class="c1" ><br/>

                                <lable><b>Enter Messege</b><lable><br/>
                               <textarea rows="4" height="35px" name="messege" class="c3"></textarea><br/>

                               <input type="submit" class="c2" name="send message" >

                          </form><br><br><br>
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
                        <h2>how to reach us</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.8900209115877!2d69.98861131494488!3d21.745788985614347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90ae978f2b20e6e3!2sJASANI%20FARM!5e0!3m2!1sen!2sin!4v1599541691191!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:10px solid black"; allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

   


 
 <?php
 include("include/footer.php");
 ?>