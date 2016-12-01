<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Platinum Repair</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php require 'promoFetch.php'; ?>
 
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Platinum Repairs</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Our Work</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Platinum Repairs</h1>
            <h3>Video Game Console
			& Computer Repair</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>
<div class="col-sm-4 col-md-6 col-lg-10" id="promo">
	<p id="promostuff"><?php echo $name; ?></p>

</div>
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Thank you for choosing Platinum Repairs: Video Game Console and Computer Repair!</h2>
                    <p class="lead">We specialize in computer repair, ranging from laptops to game consoles.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div id="favs" class="row service-item">
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wrench fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>Repairs</strong>
                                </h4>
                                <p>Computer or game console not working?</p>
                                <a href="#slidethis" class="btn btn-light" id="button">Learn More</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">

                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-gamepad fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>Video Games</strong>
                                </h4>
                                <p>Buy and sell games and game consoles!</p>
                                <a href="#slidethis" class="btn btn-light" id="button1">Learn More</a>
                        </div>						
						<div class="col-xs-6 col-sm-4 col-md-2 text-center">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-money fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>Buy & Sell</strong>
                                </h4>
                                <p>We buy broken laptops and consoles.</p>
                                <a href="#slidethis" class="btn btn-light" id="button2">Learn More</a>
                        </div>						
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-car fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>House Calls</strong>
                                </h4>
                                <p>Don't want to leave the house?</p>
                                <a href="#slidethis" class="btn btn-light" id="button3">Learn More</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">

                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-truck fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>Direct Shipping</strong>
                                </h4>
                                <p>Ship your broken electronics.</p>
                                <a href="#shipping" class="btn btn-light" id="button4">Learn More</a>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 text-center">

                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shopping-cart fa-stack-1x text-primary" style="color: #0059b3;"></i>
                            </span>
                                <h4>
                                    <strong>More Games</strong>
                                </h4>
                                <p>Check out our inventory!</p>
                                <a href="http://www.ebay.com/usr/biggboss2016" class="btn btn-light" id="button3" >Learn More</a>
                        </div>

                        </div>
						
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout text-center" id="slidethis">
        <div class="text-center"><br>
            <h1 id="message" style="text-align: center; margin-top: auto; margin-bottom: auto;"></h1>
				<h3 id="message1"></h3><br><br>
        </div>
    </aside>
		
		<div class="container centered" id="shipping">
			<div class="row text-centered">
			<hr class="lg">
			<h3 class="text-center">Shipping <strong>Form</strong></h3>
			<hr class="lg">
				<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 text-center">
                    <form role="form" name="form1" action="js/shipMail.php" method="POST" id="shippingForm" enctype="multipart/form-data">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phoneNumber" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Message (concerning repair)</label>
                                <textarea class="form-control" rows="6" name="message" required></textarea>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10" id="posted"><br>
								<p id="message" style="font-size: 100%;">Thank you! We have emailed you shipping instructions.</p>
							</div>
                    </form>	
				</div>
			</div>	
		</div><br>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/831.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/833.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/837.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/840.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>For questions or concerns...</h3>
                    <button class="btn btn-lg btn-light" id="qc">Click Here!</button>
                </div>
            </div>
        </div>
    </aside>
	
			<div class="container centered" id="questions">
			<div class="row text-centered">
			<hr class="lg">
			<h3 class="text-center">Contact <strong>Us</strong></h3>
			<hr class="lg">
				<div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 text-center">
                    <form role="form" name="form1" action="js/shipMail.php" method="POST" id="contactForm" enctype="multipart/form-data">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name1" id="name1" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email1" id="email1" required>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phoneNumber1" id="phoneNumber1" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message1" id="message1" required></textarea>
                            </div>
                            <div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" id="submit1" name="submit1" class="btn btn-default">Submit</button>
                            </div>
							<div class="form-group col-xs-10 col-sm-10 col-md-10 col-lg-10" id="posted1">
								<p id="message1" style="font-size: 100%;">Submission Successful.</p>
							</div>
                    </form>	
				</div>
			</div>	
		</div>
	
    <!-- Map -->
    <section id="contact" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.115070097844!2d-94.44890288481204!3d39.05829174504944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0e32574ffdb61%3A0xc4111c57229ba07f!2s3501+S+Sterling+Ave%2C+Independence%2C+MO+64052!5e0!3m2!1sen!2sus!4v1477838324598" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br />
        <small>
            <a href="https://www.google.com/maps/place/3501+S+Sterling+Ave,+Independence,+MO+64052/@39.0582917,-94.4489029,17z/data=!3m1!4b1!4m5!3m4!1s0x87c0e32574ffdb61:0xc4111c57229ba07f!8m2!3d39.0582876!4d-94.4467142"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Platinum Repair</strong>
                    </h4>
                    <p>3501 S Sterling Ave.
                        <br>Independence, MO 64052</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (816) 210-1357</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:Pguthrie2@hotmail.com">Pguthrie2@hotmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/PlatinumRepairsbyPhillip/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Platinum Repairs 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/scriptthis.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
