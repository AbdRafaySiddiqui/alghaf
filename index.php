<?php include 'header.php';
include 'conn.php' ?>
<?php
$query = "select * from packages";
$result = mysqli_query($conn, $query);

$query2 = "select * from packages";
$result3 = mysqli_query($conn, $query2);
?>
<section class="swiper-banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(images/slider/6.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInDown">
                        <h2>Book a ticket & Just Leave</h2>
                        <h1>Search your next destination</h1>
                        <a href="tour.php" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/4.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInRight">
                        <h2>Cost friendly packages on your way</h2>
                        <h1>We offer you better deals</h1>
                        <a href="tour.php" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/1.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInUp">
                        <h2>exciting schemes just a click away</h2>
                        <h1>Amazing Dubai 5 days tour</h1>
                        <a href="tour.php" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="overlay"></div>
    </div>
</section>


<div class="search-box clearfix">
    <div class="container">
        <div class="search-outer">
            <div class="search-content">
                <form action="search.php" method="POST">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="search-title d-flex align-items-center justify-content-between">
                                <p>Find Your <span>Holiday</span></p>
                                <i class="flaticon-sun-umbrella "></i>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example" name="destination_inp">

                                        <option value="0">Destination</option>
                                        <?php while ($row1 = mysqli_fetch_array($result)) {
            ?>
                                        <option value="<?php echo $row1['id']?>"><?php echo $row1['name'];?></option><?php
            }
            ?>>
                                    </select>
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="table_item table-item-slider">
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price"
                                        data-max-name="max_price"
                                        class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"
                                            style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="search">
                                    <input type="submit" href="#" class="btn-blue btn-red" value="Search" name="btn_search">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="popular-packages">
    <div class="container">
        <div class="section-title text-center">
            <h2>Popular Packages</h2>
            <div class="section-icon">
                <i class="flaticon-diamond"></i>
            </div>
            <p>CHECK OUT OUR MOST POPULAR TOURS IN UAE</p>
        </div>
        <div class="row package-slider slider-button">

            <?php while ($row3 = mysqli_fetch_array($result3)) {
            ?>
            <div class=" col-sm-12">
                <div class="package-item">
                    <div class="package-image">
                        <img alt="Image" style="height:300px" src="../alghaf/img/<?php echo $row3['image']?>" />
                        <div class="package-price">
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <p><span>$<?php echo $row3['price'];?></span> / PER </p>
                        </div>
                    </div>
                    <div class="package-content">
                        <h3><?php echo $row3['name'];?></h3>
                        <p class="package-days"><i class="flaticon-time"></i><?php echo $row3['days'];?>days</p>
                        <div class="package-info">
                            <?php echo	"<a class='btn-blue btn-red' href='details.php?id=".$row3['id']."'>".'View more details'."</a>";?>
                            <!-- <a href="5day.php" class="btn-blue btn-red">View more details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>



        </div>
    </div>
</section>




<section id="bucket-list" class="bucket-list">
    <div class="bucket-icons">


        <section class="top-destinations">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Top Destinations</h2>
                    <div class="section-icon">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Check Out Our most Popular Places</p>
                </div>

                <div class="row">
                    <?php 
                            $tourquery2 = "SELECT * FROM packages WHERE status=1 limit 1,1";
                            $tourresult2=mysqli_query($conn,$tourquery2);
                            ?>
                    <?php
                                while($tourrow2 = mysqli_fetch_array($tourresult2)){
                            ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item">
                            <img class="img-responsive" src="../alghaf/img/<?php echo $tourrow2['image']; ?>"
                                alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><?php echo "<a href='details.php?id=".$tourrow2['id']."'>"; echo $tourrow2['name'];"</a>"?>
                                </h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                        <?php 
                            $tourquery3 = "SELECT * FROM packages WHERE status=1 limit 2,1";
                            $tourresult3=mysqli_query($conn,$tourquery3);
                            ?>
                        <?php
                                while($tourrow3 = mysqli_fetch_array($tourresult3)){
                            ?>
                        <div class="top-destination-item">
                            <img class="img-responsive" src="../alghaf/img/<?php echo $tourrow3['image']; ?>"
                                alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><?php echo "<a href='details.php?id=".$tourrow3['id']."'>"; echo $tourrow3['name'];"</a>"?>
                                </h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                                ?>
                    <?php 
                            $tourquery = "SELECT * FROM packages WHERE status=1 limit 3,1";
                            $tourresult=mysqli_query($conn,$tourquery);
                            ?>
                    <?php
                                while($tourrow = mysqli_fetch_array($tourresult)){
                            ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item destination-margin">
                            <img class="img-responsive" src="../alghaf/img/<?php echo $tourrow['image']; ?>" alt="Image"
                                style="height:570px">
                            <div class="overlay overlay-full">
                                <h2><?php echo "<a href='details.php?id=".$tourrow['id']."'>"; echo $tourrow['name'];"</a>"?>
                                </h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                    </div><?php
                                }
                                ?>
                    <?php 
                            $tourquery4 = "SELECT * FROM packages WHERE status=1 limit 0,1";
                            $tourresult4=mysqli_query($conn,$tourquery4);
                            ?>
                    <?php
                                while($tourrow4 = mysqli_fetch_array($tourresult4)){
                            ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item">
                            <img class="img-responsive" src="../alghaf/img/<?php echo $tourrow4['image']; ?>"
                                alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><?php echo "<a href='details.php?id=".$tourrow4['id']."'>"; echo $tourrow4['name'];"</a>"?>
                                </h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                        <?php 
                            $tourquery5 = "SELECT * FROM packages WHERE status=1 limit 4,1";
                            $tourresult5=mysqli_query($conn,$tourquery5);
                            ?>
                        <?php
                                while($tourrow5 = mysqli_fetch_array($tourresult5)){
                            ?>
                        <div class="top-destination-item">
                            <img class="img-responsive" src="../alghaf/img/<?php echo $tourrow5['image']; ?>"
                                alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><?php echo "<a href='details.php?id=".$tourrow5['id']."'>"; echo $tourrow5['name'];"</a>"?>
                                </h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="trip-ad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="trip-ad-content">
                            <div class="ad-title">
                                <h2>Explore The <span>Dubai Trip</span></h2>
                            </div>
                            <p>An unforgettable once-in-a-lifetime opportunity is set for you to experience exotic
                                locations that immerse you in the beautiful culture by allowing you to savor everything
                                from the cuisine, customs to the entertainment and landmarks.</p>

                            <div class="trip-ad-btn">
                                <a href="tour.php" class="btn-blue btn-red">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ad-price">
                            <div class="ad-price-inner">
                                <span>Starting at <span class="rate">$300</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="testimonials">
            <div class="section-title text-center">
                <h2>Best Rated Travel Agency</h2>
                <div class="section-icon section-icon-white">
                    <i class="flaticon-diamond"></i>
                </div>
            </div>

            <div id="testimonial_094"
                class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine"
                data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000">

                <ol class="carousel-indicators">
                    <li data-target="#testimonial_094" data-slide-to="0" class="active">
                        <img src="images/testemonial1.jpg" alt="testimonial_094_01">
                    </li>
                    <li data-target="#testimonial_094" data-slide-to="1">
                        <img src="images/testemonial2.jpg" alt="testimonial_094_02">
                    </li>
                    <li data-target="#testimonial_094" data-slide-to="2">
                        <img src="images/testemonial3.jpg" alt="testimonial_094_03">
                    </li>
                    <li data-target="#testimonial_094" data-slide-to="3">
                        <img src="images/testemonial4.jpg" alt="testimonial_094_04">
                    </li>
                    <li data-target="#testimonial_094" data-slide-to="4">
                        <img src="images/testemonial5.jpg" alt="testimonial_094_05">
                    </li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">

                        <div class="testimonial_094_slide">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros
                                ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut
                                purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <h5><a href="#">Susan Doe, Houston</a></h5>
                        </div>
                    </div>


                    <div class="carousel-item">

                        <div class="testimonial_094_slide">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros
                                ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut
                                purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <h5><a href="#">Susan Doe, Houston</a></h5>
                        </div>
                    </div>


                    <div class="carousel-item">

                        <div class="testimonial_094_slide">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros
                                ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut
                                purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <h5><a href="#">Susan Doe, Houston</a></h5>
                        </div>
                    </div>


                    <div class="carousel-item">

                        <div class="testimonial_094_slide">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros
                                ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut
                                purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <h5><a href="#">Susan Doe, Houston</a></h5>
                        </div>
                    </div>


                    <div class="carousel-item">

                        <div class="testimonial_094_slide">
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros
                                ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut
                                purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                            </div>
                            <h5><a href="#">Susan Doe, Houston</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="countdown-section">
            <div class="container">
                <div class="countdown-title">
                    <h2>Special Tour , Discover <span>Dubai</span> for 50 Customers with <span>Discount
                            30%</span></h2>
                    <p>It’s limited seating! Hurry up</p>
                </div>
                <div class="countdown countdown-container">
                    <p id="demo"></p>
                </div>
            </div>
            <div class="testimonial-overlay"></div>
        </section>



        <section class="trusted-partners">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="partners-title">
                            <h3>Our <span>Partners</span></h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <ul class="partners-logo partners-slider">
                            <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                            <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php' ?>