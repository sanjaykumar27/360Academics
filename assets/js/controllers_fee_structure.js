app.controller('addFeeStructureController', function($scope, $http, $timeout, $compile, $window,$filter){
	$scope.path = $('#path').val();
	$scope.components = [];
	$scope.getcomponent=function(){
	$http({
            method: 'GET', url: $scope.path + '/get_fee_component_list', headers: { 'Accept': 'application/json' }
        }).success(function (response) {
            $scope.components = response;
			$scope.status = 'Active';
        });
	}
	
	$scope.getclass=function(){
	$http({
            method: 'GET', url: $scope.path + '/get_class_by_session', headers: { 'Accept': 'application/json' }
        }).success(function (response) {
            $scope.classes = response;
			$scope.status = 'Active';
        });
	}
	$scope.singledata={id:0,"component":"","frequency":"","status":'Active',"refundable":"",pluses:[{"class":"","amount": [],"due_date":[]}]};

	$scope.formtype ='Add';
	$scope.singledata={id:0,"component":"","frequency":"","status":'Active',"refundable":"",pluses:[{"class":"","amount": [],"due_date":[]}]};

	$scope.saverecord = function (isvalid) {
		console.log($scope.singledata);
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		for(var ij=0;ij<$scope.singledata.pluses.length;ij++) {
			if($scope.singledata.pluses[ij].amount.length == 0) {
				swal("", "Please enter at least one value in Amount.", "error");
				return false;
			}
			if($scope.singledata.pluses[ij].due_date.length == 0) {
				swal("", "Please enter at least one value in due date.", "error");
				return false;
			}
			if($scope.singledata.pluses[ij].due_date.length != $scope.singledata.pluses[ij].amount.length) {
				swal("", "Elements of amount and due date must be same.", "error");
				return false;
			}
			
			if($("#frequency option:selected").text() != 'Periodic' && $scope.singledata.pluses[ij].due_date.length > 1) {
				swal("", "You can not select more than one element of amount/due date for this frequency", "error");
				return false;
			}
		}
		$('#loader').addClass('loaderimage');
		$http({method: 'POST', url: $scope.path + '/fee_structure_save', headers: { 'Accept': 'application/json' },data:$scope.singledata}) .success(function (response) 
		{
			if(response.success == 1)
			{   
				$timeout(function () { 
				$('#loader').removeClass('loaderimage');
						swal({
						  title: "",
						  text: response.msg,
						  type: "success",
						  confirmButtonText: "OK"
						},
						function(isConfirm){
						  if (isConfirm) {
							$window.location.href = $scope.path+"/fee_structure";
						  }
						}); }, 500);
				
			}
			else{
				$('#loader').removeClass('loaderimage');
				swal("", response.msg, "error");
			}
			
		});
	}
	     
		 $scope.singledata.pluses = [{"class":"","amount": [],"due_date":[]}];
		 $scope.addplus = function () {
	     $scope.singledata.pluses.push({"class":"","amount": [],"due_date":[]});
		 };
	var idIncrementor = 0;
    $scope.transform = function(chip) {
      return {
        id: ++idIncrementor,
        name: chip
      }
    }
	$scope.transformdate = function(chip) {
      return {
        name: chip
      }
    }
		$scope.updateduedate = function(dataa,index) {
			var date = $filter('date')(new Date(dataa), 'dd-MM-yyyy');
			$scope.singledata.pluses[index].due_date.push({name:date});
		}
		 $scope.removeplus = function(index) {
		 $scope.singledata.pluses.splice(index, 1);
		 };
		 
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

	$scope.getcomponent();
	$scope.getclass();
});

app.controller('updateFeeStructureController', function($scope, $http, $timeout, $compile, $window,$filter){
	$scope.path = $('#path').val();
	$scope.components = [];
	$scope.getcomponent=function(){
	$http({
            method: 'GET', url: $scope.path + '/get_fee_component_list', headers: { 'Accept': 'application/json' }
        }).success(function (response) {
            $scope.components = response;
			$scope.status = 'Active';
        });
	}

	$scope.singledata={id:0,"component":"","frequency":"","status":'Active',"refundable":"",pluses:[{"class":"","amount": [],"due_date":[]}]};
	if(atob(getParameterByName('id')) > 0) {
		$http({
            method: 'GET', url: $scope.path+'/get_single_fee_structure?id='+getParameterByName('id')+'&compid='+getParameterByName('compid')+'&classid='+getParameterByName('classid') , headers: { 'Accept': 'application/json' }
        }).success(function (response) {
           if(response.success == 1) {
				$scope.formtype ='Edit';
				var classid= atob(getParameterByName('classid'));
				$scope.singledata={id:0,"component":atob(getParameterByName('compid')),"frequency":response.data[0].frequency_id,"status":response.data[0].entity_status,"refundable":response.data[0].is_refundable,pluses:[]};
				$("#frequency").select2("val", response.data[0].frequency_id);
				if(response.data.length > 0) {
					var i=0;
					for(i=0;i<response.data.length;i++) {
						var endparse = Date.parse(response.data[i].due_date);
						$scope.singledata.pluses[i]={"class":response.classname,"amount":response.data[i].amount,"due_date":new Date(endparse),"fs_id":response.data[i].fee_structure_id,"fsd_id":response.data[i].id};
					}
				}
			$timeout(function () {
					 $("#component").select2("val", $scope.singledata.component);
					 $(".selectallclass").select2("val", classid);
				},2000);				
			} else {
				swal("", response.msg, "error");
				$timeout(function () {
			    $window.location.href = $scope.path+'/fee_structure';
				},2000);
			}
        });		
	} else {
		swal("", "There is some error. Please try again.", "error");
		$timeout(function () {
			$window.location.href = $scope.path+'/fee_structure';
		},2000);
	}

	$scope.saverecord = function (isvalid) {
		$scope.submitted = 1;
		if(!isvalid){
			return false;
		}
		$('#loader').addClass('loaderimage');
		$http({method: 'POST', url: $scope.path + '/fee_structure_update_save', headers: { 'Accept': 'application/json' },data:$scope.singledata}) .success(function (response) 
		{
			if(response.success == 1)
			{   
				$timeout(function () { 
				$('#loader').removeClass('loaderimage');
						swal({
						  title: "",
						  text: response.msg,
						  type: "success",
						  confirmButtonText: "OK"
						},
						function(isConfirm){
						  if (isConfirm) {
							$window.location.href = $scope.path+"/fee_structure";
						  }
						}); }, 500);
				
			}
			else{
				$('#loader').removeClass('loaderimage');
				swal("", response.msg, "error");
			}
			
		});
	}
	     
		 $scope.singledata.pluses = [{"class":"","amount": '',"due_date":''}];

		/*  $scope.removeplus = function(index,datas) {
			$('#loader').addClass('loaderimage');
			var senddata = {'fee_structure_id':btoa(datas.fs_id),'fee_structure_detail_id':btoa(datas.fsd_id),"class_id":btoa(datas.class),"component":btoa($scope.singledata.component)};
		 };
		  */
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	$scope.deleterow = function(fs_id,fsd_id) {
		swal({
			  title: "",
			  text: "Do you want to delete this fee structure",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Yes, delete it!",
			  closeOnConfirm: false
			},
			function(){
				$('#loader').addClass('loaderimage');
				$http({method: 'POST', url: $scope.path + '/fee_structure_delete/' + fs_id +'/'+ fsd_id, headers: { 'Accept': 'application/json' }}) .success(function (response)  
				{
					if(response.success == 1) {			
						$timeout(function () { 
						$('#loader').removeClass('loaderimage');
						swal({
						  title: "",
						  text: response.msg,
						  type: "success",
						  confirmButtonText: "OK"
						},
						function(isConfirm){
						  if (isConfirm) {
							if(response.data == 1){
								$window.location.href = $scope.path + '/fee_structure';
							}else{
								$window.location.href = $scope.path + '/fee_structure_update?id='+getParameterByName('id')+'&compid='+getParameterByName('compid')+ '&classid=' + getParameterByName('classid');
							}
						  }
						}); }, 500);
					}
					else{
						$('#loader').removeClass('loaderimage');
						swal("", response.msg, "error");
					}
				});
		});
	}
	$scope.getcomponent();
});