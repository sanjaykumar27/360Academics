app.controller('collectionController', function($scope, $http, $timeout){
	$scope.filtered = [];
	$scope.path = $('#path').val();
	$scope.getdetails=function(){
           
		$http({
            method: 'GET', url: $scope.path + '/get_all_collection_list?id='+atob(getParameterByName('id')), headers: { 'Accept': 'application/json' }
        }).success(function (response) { 
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
		if($scope.search != "" && typeof $scope.search != "undefined") {
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
		$scope.submitted = 0;
		$scope.collection_form = 'Edit';
		$scope.singledata={"id":row.id,"collection":row.name,"status":row.entity_status,"collection_type_id":getParameterByName('id')};
		$scope.frmcollection.$setPristine();
		$("#modal-id").modal();
	}
	$scope.addrecords = function (){
		$scope.submitted = 0;
		$scope.collection_form = 'Add';
		$scope.singledata={"id":0,"collection":"","status":'Active',"collection_type_id":getParameterByName('id')};
		$scope.frmcollection.$setPristine();
		$("#modal-id").modal();
	}
	$scope.saverecord = function (isvalid) {
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		$('#loader').addClass('loaderimage');
		$http({method: 'POST', url: $scope.path + '/collection_save', headers: { 'Accept': 'application/json' },data:$scope.singledata}) .success(function (response) 
		{
			if(response.success == 1)
			{   $scope.submitted = 0;
				$("#modal-id").modal("hide");
				$scope.getdetails();
				$scope.submitted = 0;
				$scope.singledata={"id":0,"collection":"","status":'Active',"collection_type_id":getParameterByName('id')};
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
	
	 function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	
	
	$scope.getdetails(); 
	
});