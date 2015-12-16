App.factory('dataFactory', ['$http', function($http) {

    var urlBase = 'api/';
    
    var dataFactory = {};
    var config_post = {headers:  {
        'App-key': APPKEY,
    //    'Content-Type': 'application/json'
        'Content-Type': 'application/x-www-form-urlencoded'
    }};
    /*-------------------------------*
    | Login / Challenge Module
    *--------------------------------*/

    dataFactory.challengeSubmit = function (challengeForm) {
    	//console.log(signUpdata);
    	//   return $http.post('start/signup/', signUpdata,config_post);
    	//If required to send data as post use below code
    	return $http({
    		method: 'POST',
    		url: 'contact/challengeSubmit/',
    		data: $.param({data: challengeForm}),
    		headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8','App-key': APPKEY}
    	});
    };
    
    /*-------------------------------*
    | Login / Connect Module
    *--------------------------------*/
    
    dataFactory.connectSubmit= function (connectForm) {
    	//console.log(signUpdata);
       return $http({
            method: 'POST',
            url: 'contact/connectSubmit/',
            data: $.param({data: connectForm}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8','App-key': APPKEY}
        });
    };

    dataFactory.logout = function () {
        //alert('here');
    	  return $http({
              method: 'GET',
              url: 'start/logout/',
              headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8','App-key': APPKEY}
          });
    };

    /*-------------------------------*
    | Categories Module
    *--------------------------------*/
    dataFactory.getCategories = function () {
        return $http.get(urlBase+'getCategories');
    };

    /*-------------------------------*
    | Dashboard Module
    *--------------------------------*/

    dataFactory.getUserData = function(token) {
        return $http.get(urlBase+'getUserData');
    }

    return dataFactory;
}]);