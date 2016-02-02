<?php get_header();  ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                </ul> -->
            </div> 
            
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
        
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
   
<?php get_footer();  ?>