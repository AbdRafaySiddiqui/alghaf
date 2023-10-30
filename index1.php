<?php include 'header.php';
include 'conn.php' ?>
<?php
$query = "select * from packages ";
$result = mysqli_query($conn, $query);
?>
<section class="swiper-banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(images/slider/6.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInDown">
                        <h2>Book a ticket & Just Leave</h2>
                        <h1>Search your next destination</h1>
                        <a href="1day.php" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/4.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInRight">
                        <h2>Cost friendly packages on your way</h2>
                        <h1>We offer you better deals</h1>
                        <a href="3day.php" class="btn-blue btn-red">View Our Tour</a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(images/slider/1.jpg)">
                    <div class="swiper-content" data-animation="animated fadeInUp">
                        <h2>exciting schemes just a click away</h2>
                        <h1>Amazing Dubai 5 days tour</h1>
                        <a href="5day.php" class="btn-blue btn-red">View Our Tour</a>
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
                <form>
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="search-title d-flex align-items-center justify-content-between">
                                <p>Find Your <span>Holiday</span></p>
                                <i class="flaticon-sun-umbrella "></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <select id="custom-select-1" class="selectpicker form-control">
                                        <option value="0">Destination</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                    </select>
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                                <div class="form-group  form-icon">
                                    <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                                        <option value="0">Type</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                    </select>
                                    <i class="flaticon-box"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="table_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" value="dd-mm-yyyy" />
                                        <i class="flaticon-calendar"></i>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group form-icon">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" value="dd-mm-yyyy" />
                                        <i class="flaticon-calendar"></i>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="table_item table-item-slider">
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="search">
                                    <a href="#" class="btn-blue btn-red">SEARCH</a>
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
            
            <?php while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class=" col-sm-12">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="images/packages/5.jpg" alt="Image" style="height:300px">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>$659</span> / PER </p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Dubai Packages</h3>
                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
                            <p>We can cover all the main attractions of Dubai and Abu Dhabi trip in 5 days</p>
                            <div class="package-info">
                                <a href="5day.php" class="btn-blue btn-red">View more details</a>
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
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item">
                            <img class="img-responsive" src="images/packages/6.jpg" alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><a href="tour-detail.html">Ras Al Khaimah</a></h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                        <div class="top-destination-item">
                            <img class="img-responsive" src="images/deal2.jpg" alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><a href="tour-detail.html"> YACHT TOUR</a></h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item destination-margin">
                            <img class="img-responsive" src="images/packages/8.jpg" alt="Image" style="height:570px">
                            <div class="overlay overlay-full">
                                <h2><a href="tour-detail.html">CAMEL SAFARI</a></h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="top-destination-item">
                            <img class="img-responsive" src="images/packages/9.jpg" alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><a href="tour-detail.html"> SAFARI WITH QUAD BIKE</a></h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
                        <div class="top-destination-item">
                            <img class="img-responsive" src="images/packages/10.jpg" alt="Image" style="height:280px;">
                            <div class="overlay">
                                <h2><a href="tour-detail.html">DESERT SAFARI</a></h2>
                                <p>Plan Your Tour to Dubai With Us.</p>
                            </div>
                        </div>
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
                            <p>An unforgettable once-in-a-lifetime opportunity is set for you to experience exotic locations that immerse you in the beautiful culture by allowing you to savor everything from the cuisine, customs to the entertainment and landmarks.</p>

                            <div class="trip-ad-btn">
                                <a href="tour-detail.html" class="btn-blue btn-red">BOOK NOW</a>
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

            <div id="testimonial_094" class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000">

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