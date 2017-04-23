app.controller('roleController', function($scope, $http, $timeout){
	$scope.path = $('#path').val();
	$scope.getdetails=function(){
		$http({
            method: 'GET', url: $scope.path + '/get_role_list', headers: { 'Accept': 'application/json' }
        }).success(function (response) {
            $scope.list = response;
			for(i=0;i<$scope.list.length;i++){
				$scope.list[i].encoded_id=btoa($scope.list[i].id);
			} 
            $scope.currentPage = 1; //current page
            $scope.entryLimit = 10; //max no of items to display in a page
            $scope.filteredItems = $scope.list.length; //Initially for no filter  
            $scope.totalItems = $scope.list.length; 
            //$(".newpaging ul").removeClass("pagination");
        });
	} 
	$scope.setPage = function (pageNo) {
		$scope.currentPage = pageNo;
	};
	$scope.filter = function () {
		$timeout(function () {
			$scope.filteredItems = $scope.filtered.length;
		}, 10);
	};
	 

	$scope.editrecords = function (row) { 
	$scope.role_form = 'Edit';
		$scope.singledata={"id":row.id,"role_name":row.name,"status":row.entity_status};
		$scope.frmrole.$setPristine();
		$("#modal-id").modal();
	}
	$scope.addrecords = function (){ 
		$scope.role_form = 'Add';
		$scope.singledata={"id":0,"role_name":"","status":'Active'};
		$scope.frmrole.$setPristine();
		$("#modal-id").modal();
	}
	$scope.saverecord = function (isvalid) {
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		$('#loader').addClass('loaderimage');
		$http({method: 'POST', url: $scope.path + '/role_save', headers: { 'Accept': 'application/json' },data:$scope.singledata}) .success(function (response) 
		{
			if(response.success == 1)
			{
				$("#modal-id").modal("hide");
				$scope.getdetails();
				$scope.singledata={"id":0,"role_name":"","status":'Active'};
				$timeout(function () {
				$('#loader').removeClass('loaderimage');
				swal("success!", response.msg, "success"); 
				},1000);
			}
			else{
				$('#loader').removeClass('loaderimage');
				swal("Oops...", response.msg, "error");
			}
		});
	}
	$scope.getdetails(); 
	
});