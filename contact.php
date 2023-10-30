<?php include 'header.php'?>
<?php
include "conn.php";

if(isset($_POST['btnsubmit'])){
    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['comments'];
    $query="INSERT INTO `contact`(`name`, `email`, `ph`, `message`) VALUES ('$name','$email','$phone','$msg')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('Thanks for contacting us we will reach you soon')</script>";
    }
    else{
        echo "<script>alert('Error sending message')</script>";
    }
}
?>

<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2>Contact Us Page</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>

<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
</ul>
</nav>
</div>
</div>
<div class="section-overlay"></div>
</section>

<section class="contact">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div id="contact-form" class="contact-form">
<div id="contactform-error-msg"></div>
<form method="post">
<div class="row">
<div class="form-group col-lg-12">
<label>Name:</label>
<input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
</div>
<div class="form-group col-lg-6">
<label>Email:</label>
<input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
</div>
<div class="form-group col-lg-6 col-left-padding">
<label>Phone Number:</label>
<input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
</div>
<div class="textarea col-lg-12">
<label>Message:</label>
<textarea name="comments" placeholder="Enter a message" required></textarea>
</div>
<div class="col-lg-12">
<div class="comment-btn">
<input type="submit" name="btnsubmit" class="btn-blue btn-red" value="Send Message">
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-4">
<div class="contact-about footer-margin">
<div class="about-logo">
<img src="images/logo.png" alt="Image">
</div>
<h4>Travel With Us</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
<div class="contact-location">
<ul>
<li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
<li><i class="flaticon-phone-call"></i> +971 56 452 1706</li>
</ul>
</div>
<div class="footer-social-links">
<ul>
<li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
<li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer.php'?>