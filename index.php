<?php 
    /* Specify the form field names your form will accept
    $whitelist = array( 'name', 'email', 'message');*/

// Set the email address submissions will be sent to
    $email_address = 'dispatch@ehtlogistics.com';

// Set the subject line for email messages
    $subject = 'New Contact Form Submission';


    if ($_POST["submit"]) {
        /*$result='<div class="alert alert-success">Form submitted</div>';*/

        if (intval($_POST['human']) !== 7) {
            $error="<br />Your math is suspect.";
        }

        if (!$_POST['name']) {
            $error.="<br />Please enter your name";
        }

        if (!$_POST['email']) {
            $error.="<br />Please enter your email address";
        }

        if (!$_POST['phone']) {
            $error.="<br />Please enter your phone number";
        }

        if (!$_POST['comment']) {
            $error.="<br />Please enter a comment";
        }


        if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
            $error.="<br />Please enter a valid email address";
        } 

        if ($error) {

            $result='<div class="alert alert-danger"><strong>There were error(s) in form:</strong>'.$error.'</div>';


        } else {

        if (mail( $email_address, $subject, "Name: ".$_POST['name']."


            Email: ".$_POST['email']."

            Phone: ".$_POST['phone']."

            Comment: ".$_POST['comment'])) {

                $result='<div class="alert alert-success"><strong>Thank you!</strong> We\'ll be in touch.</div>';

                $_POST = array();

            } else {
            
                $result='<div class="alert alert-danger">Sorry there was an error in sending your message.  Please try again later.</div>';                
            
            }
        }

    }

    /*if ($result='<div class="alert alert-danger">Sorry there was an error in sending your message.  Please try again later.</div>';) {

            /*sleep(5);
            
            /*exit;
        }*/
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--1.0 HEADER -->
        <!--<div class="header-background-tablet-img" id="background-header-tablet">-->
            <header>
            	<!--1.1 LOGO -->
            	<div id="logo">
                    <a href="http://ehtlogistics.com/">
                        <figure class="logo-img">
                		  <h2 class="h2-logo">
                            <img src="img/logo.png" alt="EHT Logistics logo" />
                            </h2>
                        </figure>
                    </a>
        		</div>
                <div class="result">
                        <?php echo $result; ?>
                </div>
            	<!--1.2 NAVIGATION -->
                <nav>
            		<ul>
            			<li>
            				<a href="#services">Services</a>
            			</li>
            			<li>
            				<a href="#about">About</a>
        				</li>
        				<li>
            				<a href="#contact">Contact</a>
        				</li>
            		</ul>
            	</nav>
            </header>
        
        <!-- 2.0 MAIN CONTENT -->
            <div id="main-content">        	
            	<!--2.1 WELCOME -->
            	<div class="welcome" id="welcome-background-mobile">
            		<div class="welcome-header">
            			<h2>
            				801-462-1559
                        </h2>
                        <h2>
                            <a href="mailto:dispatch@ehtlogistics.com">
                            dispatch
                            <br />
                            @
                            <br />ehtlogistics.com
                            </a>
            			</h2>
        			</div>
			     </div>

            	<!--2.2 Our Services -->
            	<a name="services"></a>
                <div class="work">
            		<div class="work-header">
            			<h1 class="our-services">
            				Our Services
            			</h1>
            		</div>
                    <div class="work-copy" id="industries-background-mobile">
                		<div class="expedited">
                            <h2 id="service-header"><i class="fa fa-clock-o" aria-hidden="true"></i> Expedited
                            </h2>
                            <p id="service-copy">Same day delivery services from personal vehicles to cargo vans and up to box trucks.  With 24 hour customer service get your materials where they need to be when you need them.</p>
                        </div>
                        <div class="cargo">
                            <h2 id="service-header"><i class="fa fa-truck" aria-hidden="true"></i> Large Cargo</h2>
                            <p id="service-copy">Our freight services include cargo vans and box trucks to accommodate your larger cargo, with on demand and scheduled delivery services.</p>
                        </div>
                        <div class="delivery">
                            <h2 id="service-header"><i class="fa fa-archive" aria-hidden="true"></i> Next Day Delivery</h2>
                            <p id="service-copy">Let us do all the shipping for you.  Our courier services will pick up your cargo from your facility or any other designated facility, bring it to our warehouse and sort it for next day delivery.</p>
                        </div>
                        <div class="routes">
                            <h2 id="service-header"><i class="fa fa-check-square-o" aria-hidden="true"></i> Scheduled Routes</h2>
                            <p id="service-copy">We provide reliable transportation services for your company; we can establish routes for your scheduled deliveries or run off of your preferred schedules.</p>
                        </div>
                        <div class="industries">
                             <h2 class="industries-title">Industries We Serve</h2>
                             <p class="industries-list">
                                 <br>Banking​​</br>
                                 <br>Payroll</br>
                                 <br>Gift packages</br>
                                 <br>Restaurant supplies</br>
                                 <br>Medical Equipment</br>
                                 <br>Laboratory Samples</br>
                                 <br>Office Supplies</br>
                                 <br>Automotive and part delivery</br>
                                 <br>Legal Firms</br>
                             </p>
                        </div>
                    </div>
            	</div><!--work closing tag-->

            	<!--2.3 ABOUT -->            
                <!--<div class="about-background-img" id="background-mobile">-->
                <a name="about"></a>
                <div class="about">            
                    <div class="about-header">
            			<h1 class="choose">
            				Why Choose Us
            			</h1>
            		</div>            
        			<div class="service"  id="service-background-mobile">	    		
                        <h2 class="service-header">            
    	    				Service ... Service ... Service ...
    	    			</h2>
    	    			<p class="service-copy">
    	    				At EHT we take pride in our unbeatable service.  We have a team of experienced drivers and dispatchers that provide hot shot delivery and build one on one relationships with our customers. Our drivers are dedicated to their routes and deliveries, most of which they have been on for years.  
    	    			</p>
        			</div>
                    <figure class="service-photo-img">
                        <img src="img/service-side-photo.jpg" alt="service-side-photo" />
                    </figure>
                    <figure class="availability-photo-img">
                        <img src="img/availability-side-photo.jpg" alt="availability-side-photo" />
                    </figure>
                    <div class="availability" id="availability-background-mobile">
                        <h2 class="availability-header">
                            Availability
                        </h2>
                        <p class="availability-copy">
                            With dispatchers and drivers available 24 hours, 7 days a week we are always prepared for your business needs.   
                        </p>
                    </div>
                    
            	</div> <!--About Section div-->
                <!--</div>-->
        <!--</div>-->
            
                <!--2.4 CONTACT-->                
                <div class="contact-us-section">
                    <div class="contact">
                        <h1 class="contact-us">
                            Contact Us
                        </h1>
                    </div>
                    <a name="contact"></a>
                    <div class="contact-body">
                        <h2 class="phone">
                            Phone
                        </h2>
                        <h2 class="number">
                            801-462-1559
                        </h2>
                        <h2 class="email">
                            Email
                        </h2>
                        <h2 class="email-actual">
                            <a href="mailto:dispatch@ehtlogistics.com">dispatch
                        <br />
                        @
                        <br />ehtlogistics.com</a>
                        </h2>
                    </div>
                    <div class="contact-form-below">
                        <h2 class="form-option">
                            Or Use the Contact Form Below
                        </h2>
                        <div class="contact-form">
                            <!--<p class="lead">Please get in touch - I'll get back to you as soon as possible</p>-->

                            <form method="post">
                                <h2>
                                    <div class="form-group">
                                    <label for="name">Name</label>       
                                        <input type="text" name="name" class="form-control" value="<?php echo $_POST['name']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $_POST['email']; ?>" />
                                </div>


                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control"value="<?php echo $_POST['phone']; ?>" />
                                </div>

                                <div class="form-group">
                                    <label for="comment">Message</label>
                                    <textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="human" class="control-label">5 + 2 ?</label>
                                    <input type="text" class="form-control" name="human" placeholder="Your Answer">
                                </div>
                                </h2>
                                <h2><input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" /></h2>
                            </form>
                        </div><!-- Contact Form-->
                    </div> <!-- Contact Form Below div-->
                </div><!-- Contact Us Section -->
            </div> <!--Main Content div-->
        <!--3.0 Footer -->
        <footer>
            <!--3.1 Follow Us-->            
            <h2 class="follow">
                <a target="_blank" href="https://www.facebook.com/ehtlogistics"><i class="fa fa-facebook" aria-hidden="true"></i>  Follow Us </a>
            </h2> 
            <p class="follow-copy">           
                  Check us out on Facebook for updates, pictures and more!
            </p>

            <!--3.2 Logo-->
            <div id="logo">
                <a href="http://ehtlogistics.com/"> 
                    <figure class="logo-img">
                        <h2>
                            <img src="img/logo.png" alt="EHT Logistics logo" />
                        </h2>
                    </figure>
                </a>
            </div>
            <div class="credit">
                <a target="_blank" href="http://alexflores.design/">
                    <p>Site Designed by AlexFlores.design</p>
                </a>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
