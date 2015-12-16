App.controller('contactController', ['$scope','$rootScope','dataFactory','Notification','$uibModal', function($scope,$rootScope,dataFactory,Notification,$uibModal){
	$scope.pageClass = 'page-home';
	//$rootScope.rightmenu = [];
	
	$scope.details={};
	$scope.details.locality='0';
	$scope.details.city='0';
alert($scope.routeName);
	/*****************************
	 * Getting Location data
	 *****************************/
/*	dataFactory.getLocation()
	.success(function (response,status) {
		
		var msg=getHtmlMessage(response.message);
		Notification.success({message: msg, title: '<i>Great!!  </i>', delay: 20000});
	})
	.error(function(response,status) {
		var msg=getHtmlMessage(response.message);
		Notification.error({message: msg, title: '<i>OOps!! Somethng Went Wrong </i>', delay: 10000});
	});*/
	
	Notification.info({message: 'We will get back with someting special.', title: 'Challenge Us !!  ', delay: 200000});
	
	/*****************************
	 * Submitting challenge form
	 *****************************/
	$scope.submitChallengeDetails = function(isValid) {
		if(isValid) {
			var challengeForm = {
					"email" : $scope.details.email,
					"pincode" : $scope.details.pincode,
					"home_location" : $scope.details.home_location,
					"city" : $scope.details.city,
					"locality" : $scope.details.locality
			};
			//console.log(challengeForm);
			dataFactory.challengeSubmit(challengeForm)
			.success(function (response,status) {
				
				var msg=getHtmlMessage(response.message);
				Notification.success({message: msg, title: '<i>Great!!  </i>', delay: 20000});
				//$location.path("onBoard");
				//  	$window.location.reload();
				//  	$location.path("onBoard");
			})
			.error(function(response,status) {
				//console.log(response);
				var msg=getHtmlMessage(response.message);
				//Notification.error({message: 'Error notification 1s', delay: 5000});
				Notification.error({message: msg, title: '<i>OOps!! Somethng Went Wrong </i>', delay: 10000});
				console.log();
				//console.log(status);
				//	showMessage("msg","danger",response.error+" Error Code "+status+".");
			});
		}else{
			alert('Bad');
		}
	}
	
	
	/*****************************
	 * Submitting connect form
	 *****************************/
	
	$scope.submitConnectDetails= function(isValid) {
		if(isValid) {
			var connectForm = {
				"email" : $scope.details.email,
                "pincode" : $scope.details.pincode,
                "home_location" : $scope.details.home_location,
                "city" : $scope.details.city,
                "locality" : $scope.details.locality,
                "age" : $scope.details.age,
                "property_type" : $scope.details.property_type,
                "property_approval" : $scope.details.property_approval,
                "lead_income" : $scope.details.lead_income,
                "lead_job_experience" : $scope.details.lead_job_experience,
                "lead_position" : $scope.details.lead_position,
                "lead_type_of_company" : $scope.details.lead_type_of_company
            };
			//console.log(connectForm);
            dataFactory.connectSubmit(connectForm)
                .success(function (response,status) {
                	
                	var msg=getHtmlMessage(response.message);
                	Notification.success({message: msg, title: '<i>Great!!  </i>', delay: 20000});
                	//$location.path("onBoard");
              //  	$window.location.reload();
              //  	$location.path("onBoard");
                })
                .error(function(response,status) {
                	//console.log(response);
                	var msg=getHtmlMessage(response.message);
                	//Notification.error({message: 'Error notification 1s', delay: 5000});
                	Notification.error({message: msg, title: '<i>OOps!! Somethng Went Wrong </i>', delay: 10000});
                	console.log();
					//console.log(status);
                //	showMessage("msg","danger",response.error+" Error Code "+status+".");
                });
		}else{
			alert('Bad');
		}
	}
	
}])



