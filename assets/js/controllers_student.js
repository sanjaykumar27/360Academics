app.controller('appointment' ,function ($scope){
    
});

app.controller('phoneLog', function ($scope) {
    $scope.showInput = function () {
        if ($scope.ctrl.parent == 3) {
            document.getElementById('inputother').style.display = "block";
        } else {
            document.getElementById('inputother').style.display = "none";
        }
    }

    
    
    $scope.users = ['Everyone', 'All Student', 'Selected Class', 'Staff', 'Directors'];
    $scope.searchTerm;
    $scope.clearSearchTerm = function () {
        $scope.searchTerm = '';
    };
    $scope.data = {
        group1: 'Caller',
        group2: '2'
    };
    $scope.showModal = function () {
        $("#modal-id").modal();
    }

});


app.controller('otherLog', function ($scope) {
    $scope.users = ['Everyone', 'All Student', 'Selected Class', 'Staff', 'Directors'];
    $scope.searchTerm;
    $scope.clearSearchTerm = function () {
        $scope.searchTerm = '';
    };
    // The md-select directive eats keydown events for some quick select
    // logic. Since we have a search input here, we don't need that logic.

});

app.controller('control', function DemoCtrl($scope) {
    $scope.showModal = function () {
        $("#modal-id").modal();
    }

    $scope.data = {
        cb1: true,
        cb4: true,
        cb5: false
    };

    $scope.message = 'false';

    $scope.onChange = function (cbState) {
        $scope.message = cbState;
    };

});

app.controller("OtherFeePieCtrl", function ($scope) {
    $scope.labels = ["Late Fees", "Conveynace Fees", "Cheque Bounce Fees", "Library Fees", "Stationary Fees"];
    $scope.data = [250, 2000, 50, 200, 500];
});

app.controller('FeeLineCtrl', function ($scope) {
    $scope.labels = ["April", "July", "August", "September"];
    $scope.series = ['Fee Collection Date', 'Due Date Each Installmenty '];
    $scope.data = [
        [04, 10, 15, 25],
        [10, 10, 10, 10]

    ];

    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});


app.controller('ScholasticLineCtrl', function ($scope) {
    $scope.labels = ["Olympiads", "Quiz Competitions", "Debate", "Recitation"];
    $scope.series = ['Fee Collection Date'];
    $scope.data = [
        [04, 10, 15, 25]

    ];

    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});


app.controller('attendanceCtrl', function ($scope) {
    $scope.labels = ["April", "July", "August", "September", "October"];
    $scope.series = ['Attendance', 'Minimum'];
    $scope.data = [
        [23, 21, 24, 19, 22, 9],
        [12, 12, 11, 12, 13, 9],
    ];

    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});

app.controller("NonSchoalsticBarCtrl", function ($scope) {
    $scope.labels = ['Music', 'Dance', 'Skit', 'Cricket',
        'Debate', 'Art & Craft'];
    $scope.series = ['Series AB'];

    $scope.data = [
        [9, 8, 10, 8, 5, 9]
    ];
    $scope.colors = '#FDB45C';
});

app.controller("timeline", function ($scope) {
    $scope.events = [{
            alert: 'info',
            user: 'Amit Singh',
            profile: 'Class Teacher',
            date: '10-01-2017 10:15 AM',
            tag: '#Notice',
            content: 'Student Attendance is getting short.'
        }, {
            alert: 'danger',
            user: 'Vikash Tiwari',
            profile: 'Principle',
            date: '15-01-2017 12:25 PM',
            tag: '#Bad Behavior',
            content: 'Student caught fighting with other student in playground.'
        }];

});

app.controller("DoughnutCtrl", function ($scope) {
    $scope.labels = ["English", "Hindi", "Maths", "Social Studies", "Sanskrit"];
    $scope.data = [85, 80, 87, 65, 91];
});

app.controller('LineCtrl', function ($scope) {
    $scope.labels = ["April", "July", "August", "September"];
    $scope.series = ['Class Average', 'Sanjay'];
    $scope.data = [
        [65, 74, 80, 81],
        [74, 76, 75, 85]
    ];

    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});


app.controller('attendanceCtrl', function ($scope) {
    $scope.labels = ["April", "July", "August", "September", "October"];
    $scope.series = ['Attendance', 'Minimum'];
    $scope.data = [
        [23, 21, 24, 19, 22, 9],
        [12, 12, 11, 12, 13, 9],
    ];

    $scope.onClick = function (points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.options = {
        scales: {
            yAxes: [
                {
                    id: 'y-axis-1',
                    type: 'linear',
                    display: true,
                    position: 'left'
                },
                {
                    id: 'y-axis-2',
                    type: 'linear',
                    display: true,
                    position: 'right'
                }
            ]
        }
    };
});

app.controller("BarCtrl", function ($scope) {
    $scope.labels = ['Self Awarness', 'Problem Solving', 'Decision Making', 'Critical Thinking',
        'Creative Thinking', 'Empathy', 'Dealing With Stress', 'Managing Emotions', 'Interpersonal Relationships'];
    $scope.series = ['Series A'];

    $scope.data = [
        [9, 8, 10, 8, 7, 9, 8, 8, 9, 1]
    ];
    $scope.colors = '#FDB45C';
});



app.controller('StudentController', function ($scope, $http, $timeout) {



    /*   $scope.show = false;
     $scope.path = $('#path').val();
     
     $scope.onlycharacter = /^[a-zA-Z]+$/;
     $scope.onlynumber = /^[0-9]*$/;
     
     $scope.getDetails = function () {
     $http({
     method: 'GET', url: $scope.path + '/get_class', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.classes = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_section', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.sections = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_gender', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.genders = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_category', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.categories = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_studenttype', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.studenttypes = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_suburb', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.suburbs = response;
     });
     
     $http({
     method: 'GET', url: $scope.path + '/get_country_list', headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.countries = response;
     });
     
     
     }
     
     $scope.getState = function (ischange) {
     if (ischange) {
     $scope.ctrl.state = "";
     }
     var countryid = $scope.ctrl.currentcountryid;
     $http({
     method: 'GET', url: $scope.path + '/get_state_list/' + countryid, headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.states = response;
     });
     }
     
     $scope.getCity = function (ischange) {
     if (ischange) {
     $scope.ctrl.city = "";
     }
     var stateid = $scope.ctrl.currentstateid;
     $http({
     method: 'GET', url: $scope.path + '/get_city_list/' + stateid, headers: {'Accept': 'application/json'}
     }).success(function (response) {
     $scope.cities = response;
     });
     }
     
     $scope.saverecord = function (isvalid) {
     
     $scope.filtered = [];
     $scope.path = $('#path').val();
     $scope.submitted = 1;
     if (!isvalid) {
     return false;
     }
     
     $http({
     method: 'POST',
     url: $scope.path + '/add_student',
     headers: {'Accept': 'application/json'},
     data: $scope.ctrl}).success(function (response)
     {
     console.log(response);
     alert(response);
     
     if (response.success == 1)
     {
     $scope.ctrl = {"firstname": '', "middlename": '', "lastname": '',
     "isperiodic": '', "chargemode": '',
     "status": '', "description": ''};
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
     
     $scope.getDetails();*/
});