App.controller('onBoardController', ['$scope','$rootScope','$window','dataFactory','$location','$cookieStore','ipCookie','Notification', function($scope,$rootScope,$window,dataFactory,$location,$cookieStore,ipCookie,Notification){ // ,'cfpLoadingBar' ,cfpLoadingBar - for loading bar
	if(ipCookie('cookie_login')){
		$location.path("dashboard");
	}
	$scope.pageClass = 'page-home';
	//Notification.success({message: 'Succdddd.', title: '<i class="icon fa fa-check"></i>  Great!!  ', delay: 200000});
	/** Logout */
	$scope.logout = function() {
		//console.log(loginCredentials);
        dataFactory.logout()
            .success(function (response,status) {
            	
            	var msg=getHtmlMessage(response.message);
            	Notification.success({message: msg, title: '<i>Great!!  </i>', delay: 20000});
            	//$location.path("onBoard");
            	$window.location.reload();
            	$location.path("login");
            })
            .error(function(response,status) {
            	//console.log(response);
            	var msg=getHtmlMessage(response.message);
            	//Notification.error({message: 'Error notification 1s', delay: 5000});
            	Notification.error({message: msg, title: '<i>OOps!! Somethng Went Wrong </i>', delay: 10000});
            	//console.log();
				//console.log(status);
            //	showMessage("msg","danger",response.error+" Error Code "+status+".");
            });
	}
	$scope.getClass = function(path) {
		 var current = $location.path().substring(1);
		    return path === current ? "active" : "";
	}


	/* ----------------------------------------------------------- */
	/*  Custom Jquery Code -  START
	/* ----------------------------------------------------------- */	
	setTimeout(function(){
			
		jQuery(function($){
			/* ----------------------------------------------------------- */
			/*  1. Superslides Slider
			/* ----------------------------------------------------------- */
			jQuery('#slides').superslides({
		      animation: 'slide',
		      play: '5000'
		    });
			
			/* ----------------------------------------------------------- */
			/*  3. Featured Slider
			/* ----------------------------------------------------------- */
		    $('.featured_slider').slick({
		      dots: true,
		      infinite: true,      
		      speed: 800,
		      arrows:false,      
		      slidesToShow: 1,
		      slide: 'div',
		      autoplay: true,
		      fade: true,
		      autoplaySpeed: 5000,
		      cssEase: 'linear'
		    });
		


			/* ----------------------------------------------------------- */
			/*  7. TEAM SLIDER
			/* ----------------------------------------------------------- */

				$('.team_slider').slick({
				  dots: false,
				  infinite: true,
				  speed: 300,
				  slidesToShow: 4,
				  slidesToScroll: 4,
				  responsive: [
				    {
				      breakpoint: 1024,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 3,
				        infinite: true,
				        dots: true
				      }
				    },
				    {
				      breakpoint: 600,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 2
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
				      }
				    }
				  ]
				});
				
				/* ----------------------------------------------------------- */
				/*  5. Wow smooth animation
				/* ----------------------------------------------------------- */

				wow = new WOW(
			      {
			        animateClass: 'animated',
			        offset:       100
			      }
			    );
			    wow.init();
		
			    /* ----------------------------------------------------------- */
				/*  4. Skill Circle
				/* ----------------------------------------------------------- */

				$('#myStathalf').circliful();
				$('#myStat').circliful();
				$('#myStathalf2').circliful();
				$('#myStat2').circliful();
				$('#myStat3').circliful();
				$('#myStat4').circliful();
				$('#myStathalf3').circliful();
			    
			    
			    
			
		});


	}, 0);	
	/* ----------------------------------------------------------- */
	/*  Custom Jquery Code -  END
	/* ----------------------------------------------------------- */		
		
	
	
	
	
}])

