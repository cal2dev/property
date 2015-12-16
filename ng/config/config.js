/** APP MODULE INIT */
var App = angular.module('predator', ['ngRoute','ngCookies','ipCookie','ngAnimate','ui-notification','ui.router','ui.bootstrap']); // ,'angular-loading-bar'

/** APP RUNTIME CONFIG */
App.run(['$rootScope','ipCookie','$location',function($rootScope,ipCookie,$location){
	/** DEFINE GLOBAL VARIABLES HERE */
	$rootScope.title = "Master";

}]);

App.config(['$routeProvider', '$locationProvider','$httpProvider','$stateProvider','$urlRouterProvider',function($routeProvider,$locationProvider,$httpProvider,$stateProvider,$urlRouterProvider){
	$httpProvider.defaults.headers.common['App-key'] = APPKEY;
	$urlRouterProvider.otherwise("/onBoard");
	
	// Now set up the states
	  $stateProvider
	  .state('challenge', {
		  url: "/challenge",
		  controller: 'contactController',
		  templateUrl: BASE_URL+'contact/challengeDetails'
	  })
	    .state('connect_with_us', {
	      url: "/connect_with_us",
	      controller: 'contactController',
	      templateUrl: BASE_URL+'contact/connectWithUs'
	    })
	    .state('onBoard', {
	      url: "/onBoard",
    	  controller: 'onBoardController',
          templateUrl: BASE_URL+'onBoard/board'
	    })
	    .state('about', {
	    	url: "/about",
	    	controller: 'onBoardController',
	    	templateUrl: BASE_URL+'onBoard/about'
	    })
	    .state('contact', {
	    	url: "/contact",
	    	controller: 'contactController',
	        templateUrl: BASE_URL+'onBoard/contact'
	    })
   	    .state('tags', {
   	    	url: "/tags",
   	        controller: 'tagsController',
   	        templateUrl: BASE_URL+'tags/tags'
   	    })
   	    .state('tags.details', {
   	    	url: "/details",
   	        controller: 'tagsController',
   	        templateUrl: BASE_URL+'onBoard/contact'
   	    });
	
	
	
	
	
	
	
	
	
	
	
	
	//$httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    /*$routeProvider.when('/login', {
        controller: 'startController',
        templateUrl: BASE_URL+'start/login'
    })
    .when('/signup', {
        controller: 'startController',
        templateUrl: BASE_URL+'start/signup'
    })
    .when('/onBoard', {
        controller: 'onBoardController',
        templateUrl: BASE_URL+'onBoard/board'
    })
    .when('/about', {
        controller: '',
        templateUrl: BASE_URL+'onBoard/about'
    })
    .when('/contact', {
    	controller: '',
    	templateUrl: BASE_URL+'onBoard/contact'
    })
    .when('/tags', {
        controller: 'tagsController',
        templateUrl: BASE_URL+'tags/tags'
    })
    .otherwise({ controller: 'onBoardController',redirectTo: '/onBoard' });*/
    
	
    // for loading
    $httpProvider.interceptors.push('myHttpInterceptor');
}]);

App.factory('myHttpInterceptor', function ($q, $window,$rootScope) {
    $rootScope.ActiveAjaxConectionsWithouthNotifications = 0;
    var checker = function(parameters,status){
            //YOU CAN USE parameters.url TO IGNORE SOME URL
            if(status == "request"){
                $rootScope.ActiveAjaxConectionsWithouthNotifications+=1;
                $('#loading_view').show();
            }
            if(status == "response"){
                $rootScope.ActiveAjaxConectionsWithouthNotifications-=1;

            }
            if($rootScope.ActiveAjaxConectionsWithouthNotifications<=0){
                $rootScope.ActiveAjaxConectionsWithouthNotifications=0;
                $('#loading_view').hide();
            }


    };
return {
    'request': function(config) {
        checker(config,"request");
        return config;
    },
   'requestError': function(rejection) {
       checker(rejection.config,"request");
      return $q.reject(rejection);
    },
    'response': function(response) {
         checker(response.config,"response");
      return response;
    },
   'responseError': function(rejection) {
        checker(rejection.config,"response");
      return $q.reject(rejection);
    }
  };
});