<?php
include "header.php";
include "conn.php";
?>
<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Tours Packages</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dubai</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<br><br>
<div class="container">
    <h1>Price 50K TO 100K </h1>
</div>
<?php
$query = "select * from packages WHERE status=1 AND price<=100000";
$result = mysqli_query($conn, $query);


?>

<section class="deals-on-sale">
    <div class="container">
       
        <div class="row sale-slider slider-button">
        <?php while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="col-md-12">
                <div class="sale-item">
                    <div class="sale-image" style="height:300px">
                    <img alt="Image" style="height:300px" src="../alghaf/img/<?php echo $row['image']?>">
                    </div>
                    <div class="sale-content">
                        <div class="sale-review">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        
                        <h3><?php echo $row['name'];?></h3>
                        <?php echo	"<a class='btn-blue btn-red' href='details.php?id=".$row['id']."'>".'View more details'."</a>";?>
                        
                        <!-- <a href="1day.php" class="btn-blue btn-red">View More</a> -->
                    </div>
                    <div class="sale-tag">
                        <!-- <span class="old-price">$1449</span> -->
                        <span class="new-price"> $<?php echo $row['price'];?></span>
                    </div>
                    <div class="sale-overlay"></div>
                </div>
            </div>
<?php
        }
        ?>           
           
        </div>
    </div>
</section>
<div class="container">
    <h1>Price 100K TO 150K </h1>
</div>
<?php
$query = "select * from packages WHERE status=1 AND price>=100000 AND price<=150000";
$result = mysqli_query($conn, $query);
?>

<section class="deals-on-sale">
    <div class="container">
       
        <div class="row sale-slider slider-button">
        <?php while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="col-md-12">
                <div class="sale-item">
                    <div class="sale-image" style="height:300px">
                    <img alt="Image" style="height:300px" src="../alghaf/img/<?php echo $row['image']?>">
                    </div>
                    <div class="sale-content">
                        <div class="sale-review">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        
                        <h3><?php echo $row['name'];?></h3>
                        <?php echo	"<a class='btn-blue btn-red' href='details.php?id=".$row['id']."'>".'View more details'."</a>";?>
                        
                        <!-- <a href="1day.php" class="btn-blue btn-red">View More</a> -->
                    </div>
                    <div class="sale-tag">
                        <!-- <span class="old-price">$1449</span> -->
                        <span class="new-price"> $<?php echo $row['price'];?></span>
                    </div>
                    <div class="sale-overlay"></div>
                </div>
            </div>
<?php
        }
        ?>           
           
        </div>
    </div>
</section>
<div class="container">
    <h1>Price 150K AND SO ON </h1>
</div>
<?php
$query = "select * from packages WHERE status=1 AND price>=150000";
$result = mysqli_query($conn, $query);
?>

<section class="deals-on-sale">
    <div class="container">
       
        <div class="row sale-slider slider-button">
        <?php while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="col-md-12">
                <div class="sale-item">
                    <div class="sale-image" style="height:300px">
                    <img alt="Image" style="height:300px" src="../alghaf/img/<?php echo $row['image']?>">
                    </div>
                    <div class="sale-content">
                        <div class="sale-review">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        
                        <h3><?php echo $row['name'];?></h3>
                        <?php echo	"<a class='btn-blue btn-red' href='details.php?id=".$row['id']."'>".'View more details'."</a>";?>
                        
                        <!-- <a href="1day.php" class="btn-blue btn-red">View More</a> -->
                    </div>
                    <div class="sale-tag">
                        <!-- <span class="old-price">$1449</span> -->
                        <span class="new-price"> $<?php echo $row['price'];?></span>
                    </div>
                    <div class="sale-overlay"></div>
                </div>
            </div>
<?php
        }
        ?>           
           
        </div>
    </div>
</section>

<?php include 'footer.php'?>