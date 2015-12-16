
    <section id="works">
      <!-- BEGAIN MILESTONE WORSK SECTION -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="counter_section">
            <!-- SKILLS COUNTER OVERLAY -->
            <div class="slider_overlay"></div>
            <div class="container">               
              <div class="counter_area">
               <div class="heading">
                  <h3 class="wow fadeInLeft">Best Strategy</h3>             
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="counter wow fadeInUp">
                     <p class="count-text ">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                </div>
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MILESTONE WORSK SECTION -->

      <div class="row">
        <div class="portfolio_area" style="color:#313338;background-color:#fff;">
          <div class="row">
            <div class="col-lg-12 col-md-12">
             <div class="container">
                <div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="col-lg-5 col-md-5 col-sm-5">
					<div class="heading">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7">
					<div class="well bs-component">
						<form class="form-horizontal" name="challengeForm" ng-submit="submitChallengeDetails(challengeForm.$valid)" enctype="application/x-www-form-urlencoded" novalidate>
							<fieldset>
								<div class="form-group" ng-class="{ 'has-error' : challengeForm.email.$invalid && !challengeForm.email.$pristine}">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<input type="email" class="form-control" name="email" data-ng-model="details.email" placeholder="Email" ng-required="true" ng-minlength="10" ng-maxlength="70">
										<p ng-show="challengeForm.email.$invalid && !challengeForm.email.$pristine" class="help-block">Enter a valid email.</p>
									</div>
								</div>
								<div class="form-group" ng-class="{ 'has-error' : challengeForm.home_location.$invalid && !challengeForm.home_location.$pristine }">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<input type="text" class="form-control" name="home_location" data-ng-model="details.home_location" placeholder="Where you are planning" ng-required="true" ng-minlength="3" ng-maxlength="100">
										<p ng-show="challengeForm.home_location.$error.required && !challengeForm.home_location.$pristine" class="help-block">This field is required.</p>
										<p ng-show="challengeForm.home_location.$error.minlength" class="help-block">Too short.</p>
										<p ng-show="challengeForm.home_location.$error.maxlength" class="help-block">Too long.</p>
									</div>
								</div>
								
								
								
								<div class="form-group" ng-class="{ 'has-error' : challengeForm.pincode.$invalid && !challengeForm.pincode.$pristine }">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<input type="text" class="form-control" name="pincode" data-ng-model="details.pincode" min="0" ng-required="!(details.pincode || (details.locality && details.city))" placeholder="Pincode" ng-minlength="6" ng-maxlength="6">
										<p ng-show="challengeForm.pincode.$error.required && !challengeForm.pincode.$pristine" class="help-block">This field is required.</p>
										<p ng-show="challengeForm.pincode.$error.minlength" class="help-block">Too short.</p>
										<p ng-show="challengeForm.pincode.$error.maxlength" class="help-block">Too long.</p>
									</div>
								</div>
								
								<div class="form-group" >
									<label for="OR" class="col-lg-4 col-md-4 col-sm-4 control-label">OR</label>
								</div>
								
								<div class="form-group" ng-class="{ 'has-error': challengeForm.city.$invalid && !challengeForm.city.$pristine}">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<select class="form-control" name="city" id="sel1" data-ng-model="details.city" >
										    <option value="0">Select City</option>
										    <option value="1">Bangalore</option>
										    <option value="2">Mumbai</option>
										    <option value="3">Chennai</option>
										    <option value="4">Lucknow</option>
										  </select>
										<p ng-show="challengeForm.city.$error.required && !challengeForm.city.$pristine" class="help-block">This field is required.</p>
									</div>
								</div>
								<div class="form-group" ng-class="{ 'has-error': challengeForm.locality.$invalid && !challengeForm.locality.$pristine}">
									<div class="col-lg-12 col-md-12 col-sm-12">
										<select class="form-control" name="locality" data-ng-model="details.locality"  >
										    <option value="0" >Select Location</option>
										    <option value="1" >Location1</option>
										    <option value="1">Location2</option>
										    <option value="1">Location3</option>
										  </select>										
										<p ng-show="challengeForm.locality.$error.required && !challengeForm.locality.$pristine" class="help-block">This field is required.</p>
									</div>
								</div>
								
								
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="submit" class="btn btn-primary">Go</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
              </div>
            </div>
          </div>
        </div>         
      </div>      
    </section>
 <?php $this->load->view('onBoard/templates/footer');?>