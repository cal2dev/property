  <section id="about">
      <div class="container">
        <div class="row">
<div class="col-md-12">
	<div class="page-header" id="banner">
		<div class="row">
			
			<div class="col-lg-12 col-md-7 col-sm-6">
				<div class="">
					<h1 class="text-center">Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 cardWrap">
		<div class="col-lg-7 col-md-7 col-sm-7 ">
			<div class="mailWrap">
				<form id="contactForm" action="" method="post"> 
					<textarea id="message" name="message" rows="11" placeholder="write us" required="" autocomplete="off"></textarea>
					<input id="email" name="email" type="email" placeholder="emailadres" required="">
					<button class="btn submit submitHover" type="submit">Send</button>
				</form>
			</div>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 ">
			<div class="col-lg-5 col-md-5 col-sm-5 col-md-offset-7"><img id="stamp_pic" class="img-responsive" src="<?php echo base_url()?>assets/images/stamp.jpg" width="100px" ></div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<h3>AAAA</h3>
				<p><span class="icon adresIco"></span>SS FF SS <br>
				dd 23 <br>
					Bangalore</p>
	
				<p><a href="mailto:mail@mail.com" class="icon emailIco sprite"><span style="display: none;"></span>mail@gmail.com</a></p>
				<p><a href="tel:123456789" class="icon telIco sprite" style="margin-top:3em"><span style="display: none;"></span>+91 1234567890</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
  </div>       
      </div>
    </section>
    
    
    
    
    <!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      <!-- SKILLS COUNTER OVERLAY -->
      <div class="slider_overlay"></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Call Us</h4>
                <p>1-265-596-580</p>                
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Email Address</h4>
                <p>singlepro@gmail.com</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Office Location</h4>
                <p>Your Company Office Location</p>
              </div>
            </div>
            <!-- BEGAIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Working Hours</h4>
                <p>Monday-Friday 9.00-21.00</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->

    <!--=========== BEGAIN SUBSCRIBE SECTION ================-->
    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START SUBSCRIBE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Subscribe Us</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
            </div>
            <!-- BEGAIN SUBSCRIVE FORM -->
            <form class="subscribe_form">
              <div class="subscrive_group wow fadeInUp">
                <input class="form-control subscribe_mail" type="email" placeholder="Enter your email address">
                <input class="subscr_btn" type="submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SUBSCRIBE SECTION ================-->
 <?php $this->load->view('footer');?>