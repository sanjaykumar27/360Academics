app.controller('countryController', function($scope, $http, $timeout){
    
	$scope.filtered = [];
	$scope.path = $('#path').val();
	$scope.getdetails=function(){
		$http({
            method: 'GET', url: $scope.path + '/get_country_list', headers: { 'Accept': 'application/json' }
        }).success(function (response) { console.log('jjj');
            $scope.list = response;
            //$scope.filtered = response;
			for(i=0;i<$scope.list.length;i++){
				$scope.list[i].encoded_id=btoa($scope.list[i].id);
			} 
            $scope.currentPage = 1; //current page
            $scope.entryLimit = 10; //max no of items to display in a page
            $scope.filteredItems = $scope.list.length; //Initially for no filter  
            $scope.totalItems = $scope.list.length; 
            //$(".newpaging ul").removeClass("pagination");
			$scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
        });
	} 
	$scope.setPage = function (pageNo) {
		$scope.currentPage = pageNo;
	};
	

	// $watch search to update pagination
	$scope.$watch('search', function () {
		$scope.updatePagination();
	}, true);

	$scope.updatePagination = function() {
		if($scope.search != "") {
			$timeout(function () {
				$scope.totalItems = $scope.filtered.length;
				$scope.filteredItems = $scope.filtered.length;
				$scope.noOfPages = Math.ceil($scope.totalItems / $scope.entryLimit);
				if($scope.noOfPages < $scope.currentPage) {
					$scope.currentPage = $scope.noOfPages;
				}
			},300);
		}
	}

	$scope.editrecords = function (row) { 
	$scope.country_form = 'Edit';
		$scope.singledata={"id":row.id,"country_name":row.name,"status":row.entity_status};
		$scope.frmcountry.$setPristine();
		$("#modal-id").modal();
	}
	$scope.addrecords = function (){ 
		$scope.country_form = 'Add';
		$scope.singledata={"id":0,"country_name":"","status":'Active'};
		$scope.frmcountry.$setPristine();
		$("#modal-id").modal();
	}
	$scope.saverecord = function (isvalid) {
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		$('#loader').addClass('loaderimage');
		$http({method: 'POST', url: $scope.path + '/country_save', headers: { 'Accept': 'application/json' },data:$scope.singledata}) .success(function (response) 
		{
			if(response.success == 1)
			{
				$("#modal-id").modal("hide");
				$scope.getdetails();
				$scope.singledata={"id":0,"country_name":"","status":'Active'};
				$timeout(function () {
				$('#loader').removeClass('loaderimage');
				$scope.updatePagination();
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