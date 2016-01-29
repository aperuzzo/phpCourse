<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <header class="blue">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/AAA_logo.png">
                    </div>
                    <div class="col-sm-6">
                        <h1><?php bloginfo('name'); ?></h1>
                        <h2>schedule an appointment today (952)888-3805</h2>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/BoschServiceLogo.jpg">
                    </div>
               </div>
               <nav id="mainNav" class="navbar navbar-default">
                  <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#maintenance">Maintenance</a></li>
                            <li><a href="#repair">Repairs</a></li>
                            <li><a href="#import">Imports</a></li>
                            <li><a href="#contact">Contact</a></li>
                          </ul>
                         
                        </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </header>
            <section id="home" class="row">
                <div class="col-md-3">
                    <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/South-Import-Auto-Repair-Front.png">
                </div>
                

                <div class="col-md-9 text-info">
                    <?php the_content(); ?>
                    <!-- <h2>Welcome to South Import Motors</h2>
                    <p>Welcome to South Import Motors, proudly serving the Twin Cities for over 50 years. We are a friendly, clean reliable shop providing you with the highest quality of service.</p>
        
                    <p>At South Import Motors, we guide you through the repair process in a friendly, informed manner. As a full service shop specializing in both import and domestic vehicles, we will keep you up to date on both maintenance and repair needs.</p>
        
                    <p>We have built our reputation on honesty, with a commitment to service. We invite you to visit South Import Motors. We'll be happy to answer any questions you may have about us, your vehicle or the services we provide.</p>
        
                    <p>We are an AAA approved repair center and also a Bosch authorized service center.</p>
        
                    <p>Call us today at (952) 888-3805 to schedule an appointment. We promise 100 percent satisfaction or we’ll reevaluate your vehicle.</p>
        
                    <h3>Our Specialties Include:</h3>
                    <ul>
                        <li>Scheduled Maintenance</li>
                        <li>Brakes</li>
                        <li>Suspension</li>
                        <li>Tune-ups</li>
                        <li>Electrical Troubleshooting</li>
                        <li>Alignments</li>
                        <li>Pre-Purchase Inspection</li>
                        <li>Clutches</li>
                        <li>Exhaust</li>
                        <li>Fuel Injection</li>
                        <li>Axle/ CV joints</li>
                        <li>Oil Change</li>
                    </ul>
                </div> -->
                
            </section>
            <section id="maintenance" class="blue">
                <h2>Auto Maintenance</h2>
                <p>Keeping your vehicle in top condition requires routine maintenance. South Import Motors offers complete mileage based service as well as periodic basic maintenance.</p>

                <p>The following should be periodically checked on your vehicle:</p>
                <ul>
                    <li>Transmission Fluid</li>
                    <li>Coolant</li>
                    <li>Battery</li>
                    <li>Tires</li>
                    <li>Suspension</li>
                    <li>Change Oil and Filter Every 3,000 Miles</li>
                </ul>
                <p>To obtain our full list of repair and maintenance services and products, to set up an appointment or to ask us any questions about services, call South Import Motors at (952) 888-3805.</p>
            </section>
            <section id="repair">
                <h2>Auto Repair</h2>
                <p>In addition to maintenance, your vehicle will need occasional repairs. From brakes to major engine repair, our certified technicians will keep your vehicle on the road. We provide competitive pricing on our repairs. Our repairs come with a 12 month / 12,000 mile warranty.</p>

                <p>With our exceptional service and top-of-the-line products, we're sure to meet all your auto repair needs. We fix all parts of your vehicle, from custom headlights to radiators.</p>

                <p>If you're looking for the best vehicle repair service in the Bloomington, Minnesota area, look no further! The following is a list of some of South Import Motors' most popular specialties:</p>

                <ul>
                    <li>Brakes</li>
                    <li>Clutches</li>
                    <li>Exhausts</li>
                    <li>Fuel injection</li>
                    <li>A/C</li>
                    <li>Axle</li>
                </ul>
            </section>
            <section id="import" class="row blue">
                <h2>Import Repair and Maintenance</h2>
                <p>Are you looking for an alternative repair facility for your vehicle? Look no further. South Import Motors has been specializing in European cars since 1964. We have customers who have had their vehicles serviced with South Import Motors for over 300,000 miles. We are confident that when you compare our prices and experience our service, we will be able to add you to our list of satisfied customers.</p>

                <div class="col-md-6">
                    <h4>European makes serviced by South Import Motors:</h4>
                    <ul>
                        <li>Volkswagen</li>
                        <li>Audi</li>
                        <li>BMW</li>
                        <li>Mercedes</li>
                        <li>Volvo</li>
                        <li>Saab</li>
                        <li>Land Rover</li>
                        <li>Jaguar</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Asian makes serviced by South Import Motors:</h4>
                    <ul>
                        <li>Honda</li>
                        <li>Toyota</li>
                        <li>Nissan</li>
                        <li>Mazda</li>
                        <li>Kia</li>
                        <li>Acura</li>
                        <li>Lexus</li>
                        <li>Infiniti</li>
                        <li>Hyundai</li>
                        <li>Subaru</li>
                    </ul>
                </div>

            </section>
            <footer>
                <section id="contact">
                    <h3>Contact Us</h3>
                    <form class="form-horizontal" method="post" id="contact_form" action="contact-form-handler.php">
                        <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phone"id="phone" placeholder="Phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="question" class="col-sm-2 control-label">Questions</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="4" name="question" id="question" placeholder="Questions"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
                        </div>
                      </div>
                    </form>
                </section>
                <section id="address" class="blue row">
                    <div class="col-md-6">
                        <h3>South Import Motors</h3>
                        <p>8330 Pillsbury Ave.
                        <br>
                        Minneapolis, MN 55420</p>
                        <h3>Phone: (952) 888-3805</h3>
                        <h3>Email</h3>
                        <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/bbb_logo.png">
                    </div>
               
                    <div class="col-md-6">
                        <h3>Hours of Operation</h3>
                        <p>Monday to Friday
                        <br>
                        7:30 AM – 5:30 PM</p>
                        <p>Saturday to Sunday: Closed</p>
                    </div>
                </section>
            </footer>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </body>
</html>
