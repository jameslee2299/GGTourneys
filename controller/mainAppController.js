var mainApp = angular.module('mainApp', []);

mainApp.controller('users', function($scope, $http) {
	$scope.registerUser = function() {
		$http.post("../models/registerModel.php", {'username':$scope.username, 'email':$scope.email, 'password':$scope.password})
		.success(function() {
			$scope.msg="User added";
		})
	}
});