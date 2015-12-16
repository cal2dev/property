 <section id="contact" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Connect With Us</h2>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGAIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGAIN CONTACT FORM -->
            <div class="col-lg-7 col-md-7 col-sm-7">
              <div class="contact_form well">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>
					<form class="form-horizontal" name="connectForm" ng-submit="submitConnectDetails(connectForm.$valid)" enctype="application/x-www-form-urlencoded" novalidate>
								<fieldset>
									<div class="form-group" ng-class="{ 'has-error' : connectForm.email.$invalid && !connectForm.email.$pristine}">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="email" class="form-control" name="email" data-ng-model="details.email" placeholder="Email" ng-required="true" ng-minlength="10" ng-maxlength="70">
											<p ng-show="connectForm.email.$invalid && !connectForm.email.$pristine" class="help-block">Enter a valid email.</p>
										</div>
									</div>
									<div class="form-group" ng-class="{ 'has-error' : connectForm.home_location.$invalid && !connectForm.home_location.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="home_location" data-ng-model="details.home_location" placeholder="Where you are planning" ng-required="true" ng-minlength="3" ng-maxlength="10">
											<p ng-show="connectForm.home_location.$error.required && !connectForm.home_location.$pristine" class="help-block">This field is required.</p>
											<p ng-show="connectForm.home_location.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.home_location.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>



									<div class="form-group" ng-class="{ 'has-error' : connectForm.pincode.$invalid && !connectForm.pincode.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="pincode" data-ng-model="details.pincode" min="0" ng-required="!(details.pincode || (details.locality && details.city))" placeholder="Pincode" ng-minlength="6" ng-maxlength="6">
											<p ng-show="connectForm.pincode.$error.required && !connectForm.pincode.$pristine" class="help-block">This field is required.</p>
											<p ng-show="connectForm.pincode.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.pincode.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>

									<div class="form-group">
										<label for="OR" class="col-lg-5 col-md-5 col-sm-5 control-label">OR</label>
									</div>

									<div class="form-group" ng-class="{ 'has-error': connectForm.city.$invalid && !connectForm.city.$pristine}">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<select class="form-control" name="city" id="sel1" data-ng-model="details.city">
											  <option value="0">Select City</option>
										   	  <option value="1">Bangalore</option>
										      <option value="2">Mumbai</option>
										      <option value="3">Chennai</option>
										      <option value="4">Lucknow</option>
											</select>
											<p ng-show="connectForm.city.$error.required && !connectForm.city.$pristine" class="help-block">This field is required.</p>
										</div>
									</div>
									<div class="form-group" ng-class="{ 'has-error': connectForm.locality.$invalid && !connectForm.locality.$pristine}">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<select class="form-control" name="locality" data-ng-model="details.locality" id="sel1">
												 <option value="0" >Select Location</option>
										    <option value="1" >Location1</option>
										    <option value="1">Location2</option>
										    <option value="1">Location3</option>
											</select>
											<p ng-show="connectForm.locality.$error.required && !connectForm.locality.$pristine" class="help-block">This field is required.</p>
										</div>
									</div>

									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.age.$invalid && !connectForm.age.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="age" data-ng-model="details.age" placeholder="Age"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.age.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.age.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.property_type.$invalid && !connectForm.property_type.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="property_type" data-ng-model="details.property_type" placeholder="Property Type"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.property_type.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.property_type.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.property_approval.$invalid && !connectForm.property_approval.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="property_approval" data-ng-model="details.property_approval" placeholder="Property Approval"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.property_approval.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.property_approval.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.lead_income.$invalid && !connectForm.lead_income.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="lead_income" data-ng-model="details.lead_income" placeholder="Lead Income"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.lead_income.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.lead_income.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.lead_job_experience.$invalid && !connectForm.lead_job_experience.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="lead_job_experience" data-ng-model="details.lead_job_experience" placeholder="Job Experience"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.lead_job_experience.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.lead_job_experience.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.lead_position.$invalid && !connectForm.lead_position.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="lead_position" data-ng-model="details.lead_position" placeholder="Position / Title"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.lead_position.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.lead_position.$error.maxlength" class="help-block">Too long.</p>
										</div>
									</div>
									
									
									<div class="form-group" ng-class="{ 'has-error' : connectForm.lead_type_of_company.$invalid && !connectForm.lead_type_of_company.$pristine }">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="text" class="form-control" name="lead_type_of_company" data-ng-model="details.lead_type_of_compan" placeholder="Type of company (private large company/private SME/public listed company/public sector/MNC/)"  ng-minlength="1" ng-maxlength="100">
											<p ng-show="connectForm.lead_type_of_company.$error.minlength" class="help-block">Too short.</p>
											<p ng-show="connectForm.lead_type_of_company.$error.maxlength" class="help-block">Too long.</p>
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
            <!-- BEGAIN CONTACT MAP -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="connect_desc">
              	 <div class="heading">
             		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
              	</div>
              </div>
            </div>           
          </div>
        </div>      
      </div>             
    </section>
 <?php $this->load->view('onBoard/templates/footer');?>