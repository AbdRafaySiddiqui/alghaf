<?php include 'header.php';
include "conn.php";
?>
<?php
require('config.php');
$id=$_GET['id'];
?>

<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="SELECT * from packages where id='$id'";
	$result=mysqli_query($conn,$query);
}

if(isset($_POST['btnsubmit']))
{
   
    $comment=$_POST['comment'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    $date=date('d-m-y h:i:s');
    echo "<script>alert(".$date.")</script>"; 
    $query1="insert into comments( comment_id,comment, name, email, website, date)values('$id','$comment','$name','$email','$web','$date')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        echo "<script>alert('Successfully')</script>";
//        header("Location:comments.php");       
    }else{
//         echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
    }
  }
  

$sqli="SELECT * FROM comments";
$result_comment=mysqli_query($conn,$sqli);


$id=$_GET['id'];
$imgsql="SELECT * FROM images WHERE packageid=$id";
$img_result=mysqli_query($conn,$imgsql);

?>
<script type="text/javascript">
$(document).ready(function(){
    var form = $('#myForm');
    $('#btn').click(function(){
        $.ajax({
            url: form.attr("action");
            type: 'post',
            data: $("#myForm input").serialize(),

            success: function(data){
                console.log(data);
            }

        });

    });
});
</script>

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Dubai Packages</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dubai Tour</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<?php

 while($row=mysqli_fetch_array($result))
{
?>

<section class="main-content detail">
    <div class="container">
        <div class="row">
            <div id="content" class="col-lg-8">
                <div class="detail-content content-wrapper">
                    <div class="detail-info">
                        <div class="detail-info-content clearfix">
                            <h2><?php echo $row['name'];?></h2>
                            <p class="detail-info-price"><span class="bold">$<?php echo $row['price'];?></span></p>
                            
                        </div>
                    </div>
                      <!-- Carousel wrapper -->
                    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <!-- Inner -->
                        <div class="carousel-inner">
                            <!-- Single item -->
                            <div class="carousel-item active">
                            <img width="400" height="400" alt="Sunset Over the City" class="d-block w-100" src="../alghaf/img/<?php echo $row['image']?>">
                            </div>
                            <?php
                            while($img_row=mysqli_fetch_array($img_result))
{
?>
                            <!-- Single item -->
                            <div class="carousel-item">
                            
                                <img width="400" height="400" src="../alghaf/img/<?php echo $img_row['image']?>"
                                    alt="Canyon at Night" />    
                            </div>
                            <?php
}
?>  
                        </div>
                       
                        <!-- Inner -->   
                        
                    </div>
                    
                    <!-- Carousel wrapper -->
                   
                   
                    <div class="detail-timeline detail-box">
                        <div class="detail-title">
                            <h3>Tour Timeline</h3>
                        </div>
                        <div class="timeline-content">
                            <ul class="timeline">

                                <li>
                                    <div class="direction-r">
                                        <div class="day-wrapper">
                                            <span>1</span>
                                        </div>
                                        <div class="flag-wrapper">
                                            <span class="flag">Tour Timeline  </span>
                                        </div>
                                        <div class="desc">
                                            <p><?php echo $row['des'];?></p>

                                        </div>
                                    </div>
                                </li>

                                
                            </ul>
                        </div>
                    </div>
                    <div class="location-map detail-box">
                        <div class="detail-title">
                            <h3>Location Map</h3>
                        </div>
                        <div class="map-frame">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30117489106!2d54.94753935474709!3d25.076381474223048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1644613486007!5m2!1sen!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                   
                    <div class="comments detail-box">
                        <div class="detail-title">
                            <h3>Comments</h3>
                        </div>
                     
                        <div class="comment-content">
                        <?php while($rows_comment=mysqli_fetch_array($result_comment))
        {

                            ?>

                            <div class="comment-item">

                                <div class="row">
                                    <div class="col-lg-6 col-md-4">
                                        <div>
                                            <!-- <img src="images/comment.jpg" alt="Images"> -->
                                            <h4><?php echo $rows_comment['name'];?></h4>
                                            <!-- <span class="comment-date">(18 Dec 2018)</span> -->
                                            <!-- <a class="btn-blue btn-red" href="#">Reply</a> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                        <div class="comment-desc">
                                        <p><?php echo "Comment: ".$rows_comment['comment'];?></p></div>
                                        <div>    <span class="travel-date"><?php echo "Date: ".$rows_comment['date'];?></span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php
        }
                                ?>

                        </div>
                    </div>
                    <div class="comments-form detail-box">
                        <div class="detail-title">
                            <h3>Add Your Comment</h3>
                        </div>


                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="textarea form-group col-lg-12">
                                    <label for="Name">Your Comment:</label>
                                    <textarea name="comment" class="form-control" required></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="Name">Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">Email address:</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="web">Website:</label>
                                    <input type="text" name="web" class="form-control" >
                                </div>
                                <div class="col-lg-12">
                                    <div class="comment-btn">
                                    <input type="submit" value="Submit" name="btnsubmit" style="background-color:aqua;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="sidebar-sticky" class="col-lg-4">
                <aside class="detail-sidebar sidebar-wrapper">
                    <div class="sidebar-item sidebar-item-dark">
                        <div class="detail-title">
                            <h3>Book this tour</h3>
                        </div>

                        <form method="POST" action="action.php?id=<?php echo $_GET['id'];?>" id="myForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="text" name="name" class="form-control"  placeholder="Enter Your Full Name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group col-lg-6 col-left-padding">
                                    <input type="text" name="number" class="form-control" placeholder="Enter Your Phone Number" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="date" name="date" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6 col-left-padding">
                                    <input type="number" name="person" class="form-control" placeholder="Enter Persons" required>
                                </div>
                                <div class="textarea col-lg-12">
                                    <textarea name="msg" placeholder="Enter Message" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="comment-btn">
                                    <!-- <button type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary">
  Submit
</button> -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Proceed to payment.
</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                    <div class="sidebar-item sidebar-helpline">
                        <div class="sidebar-helpline-content">
                            <h3>Any Questions?</h3>
                            <p>Plz Contact On given Number Thank You!</p>
                            <p><i class="flaticon-phone-call"></i> +971 56 452 1706</p>
                            
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SELECT PAYMENT TYPE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="submit.php?id=<?php echo $_GET['id'];?>" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $publishKey ?>"
    data-amount="<?php echo $row['price']*100;?>"
    data-name="Alghaf Travlers"
    data-description="Travel Agency"
    data-image=""
    data-currency="usd"
    >
    </script>
    <br>
    <br>
    <input form="myForm" type="submit" name="btn" id="cash" value="cash on site" class="btn btn-primary">

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
</section>



<script>var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
myModal.addEventListener('shown.bs.modal', function () {
myInput.focus()
})</script>



<!-- <script>
$('#Send-form ').attr('disabled', true);
$('input:text').keyup(function () {
    var disable = false;
       $('input:text').each(function(){
            if($(this).val()==""){
                 disable = true;                
            }
       });
  $('#Send-form ').prop('disabled', disable);
}); -->
<?php 
}
include "footer.php";
?>