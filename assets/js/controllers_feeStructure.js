app.controller('feeStructureController', function ($scope, $http, $timeout) {

    $scope.getdetails = function () {
        $scope.path = $('#path').val();
        $http({
            method: 'GET', url: $scope.path + '/add_fee_structure', headers: {'Accept': 'application/json'}
        }).success(function (response) {

        });
    }

    $scope.saverecord = function (isvalid) {

        $scope.filtered = [];
        $scope.path = $('#path').val();
        $scope.submitted = 1;
        if (!isvalid) {
            return false;
        }

        //$scope.ctrl = {"duedate": [$scope.path + '/fee_structure_save'], "amount": [], "selectedClass": [], "frequency": '', "selectedComponent": ''};
        $http({
            method: 'POST',
            url: $scope.path + '/fee_structure_save',
            headers: {'Accept': 'application/json'},
            data: $scope.ctrl}).success(function (response)
        {
            console.log(response);
            if (response.success == 1)
            {
                $("#modal-id").modal("hide");
                $scope.ctrl = {"duedate": [], "amount": [], "selectedClass": [], "frequency": '', "selectedComponent": ''};
                $timeout(function () {
                    $('#loader').removeClass('loaderimage');
                    swal("success!", response.msg, "success");
                }, 1000);
            } else {
                $('#loader').removeClass('loaderimage');
                swal("Oops...", response.msg, "error");
            }
        });
    }
    $scope.getdetails();

});

