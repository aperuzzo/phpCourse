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
  </body>
</html>