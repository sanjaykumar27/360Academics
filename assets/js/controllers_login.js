app.controller('loginController', function($scope,$timeout){
	$scope.loginErrorMessage = true;
	$timeout(function () { $scope.loginErrorMessage = false; }, 3000);
	$scope.checklogin = function (isvalid) {
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		document.getElementById("frmlogin").submit();
	}
	
	
});