app.controller("AdminController", function ($scope, $http){
	console.log("Inside Admin Controller");	
	$scope.data = {};


	$scope.data.flag = false;
	$scope.data.switches = [true, true, false, true, true, false];


	$scope.submit = function(){
		alert();
		$scope.data.flag = true;
		// $http.post("/admin/user", $scope.data)
		// .success(function (data, status, headers){
		// 	$scope.data.flag = true;
		// })
		// .error(function (data, status, header){

		// });


	}

});


