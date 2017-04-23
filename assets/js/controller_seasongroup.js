app.controller('timetablemaster', function ($scope, $http, $mdpTimePicker) {

    

    $scope.weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $scope.selection = [];
    $scope.toggleSelection = function toggleSelection(item) {
        var idx = $scope.selection.indexOf(item);

        // Is currently selected
        if (idx > -1) {
            $scope.selection.splice(idx, 1);
        }
        // Is newly selected
        else {
            $scope.selection.push(item);
        }
    };


});

app.controller('seasongroup', function ($scope, $http, $timeout, $compile, $window) {
    $scope.path = $('#path').val();
    $scope.formtype = 'Add';
    $scope.singledata = {add: [{"season": "", "datefrom": "", "dateto": new Date()}]};

    $scope.singledata.add = [{"season": "", "datefrom": "", "dateto": ""}];
    $scope.addplus = function () {
        $scope.singledata.add.push({"season": "", "datefrom": "", "dateto": ""});
    };

    $scope.removeplus = function (index) {
        $scope.singledata.add.splice(index, 1);
    };

    $scope.getDetails = function () {
        $http({
            method: 'GET', url: $scope.path + '/season_collection', headers: {'Accept': 'application/json'}
        }).success(function (response) {
            $scope.seasons = response;

            for (i = 0; i < $scope.seasons.length; i++) {
                $scope.seasons['cid'] = btoa($scope.seasons[i].collection_type_id);
            }
        });
    };

    $scope.openWindow = function () {
        $window.open($scope.path + '/collection?id=' + $scope.seasons['cid'], '', 'width=1000,height=600');
    };

    $scope.getDetails();

});



app.controller('viewtimetable', function ($scope) {
    $scope.showInput = function () {
        if ($scope.singledata.timetableuser == 'Student') {
            document.getElementById('studentclass').style.display = "block";
            document.getElementById('studentsection').style.display = "block";
            document.getElementById('teacher').style.display = "none";
        }
        if ($scope.singledata.timetableuser == 'Teacher') {
            document.getElementById('teacher').style.display = "block";
            document.getElementById('studentclass').style.display = "none";
            document.getElementById('studentsection').style.display = "none";
        }
    }
});
