app.controller('examination', function ($scope) {

    $scope.ctrl = {add: [{"amount": [], "termname": "", "datefrom": "", "dateto": new Date()}]};
    $scope.ctrl.add = [{"amount": [], "termname": "", "datefrom": "", "dateto": ""}];

    $scope.addplus = function () {
        $scope.ctrl.add.push({"amount": [], "termname": "", "datefrom": "", "dateto": ""});
    };
    $scope.removeplus = function (index) {
        $scope.ctrl.add.splice(index, 1);
    };

    $scope.subject_breakdown = ['Periodic Test', 'Notebook', 'Sub Enrichment', 'Activity', 'Project'];
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
    $scope.ctrl.topic = '';
    $scope.ctrl.periods = [];
    $scope.ctrl.chapter = [];
    $scope.ctrl.topics = [];
    $scope.ctrl.dates = [];
    var idIncrementor = 0;
    $scope.transform = function (chip) {
        return {
            id: ++idIncrementor,
            name: chip,
            chapter: chip,
            topics: chip
        }
    }

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
    $scope.periodrow = [];
    $scope.starttimerow = [];
    $scope.counter = 1;
    this.repeatData = $scope.periodrow.map(function (value, index) {
        return {
            period: value,
            starttime: $scope.starttimerow[index],
        }
    });

    
    $scope.ctrl.total_marks1 = '15';
    $scope.ctrl.total_marks2 = '25';
    $scope.ctrl.total_marks3 = '10';
    $scope.ctrl.total_marks4 = '20';
    $scope.ctrl.total_marks5 = '10';
    $scope.ctrl.percentage1 = '18%';
    $scope.ctrl.percentage2 = '31%';
    $scope.ctrl.percentage3 = '12%';
    $scope.ctrl.percentage4 = '25%';
    $scope.ctrl.percentage5 = '12%';
    $scope.addRow = function () {
        $scope.periodrow.push("Type " + $scope.counter);
        $scope.starttimerow.push("Marks "+$scope.counter);
        this.repeatData = $scope.periodrow.map(function (value, index) {
            return {
                period: value,
                starttime: $scope.starttimerow[index],
            }
        });
        $scope.counter++;
    };

    $scope.removeRow = function (idx) {
        this.repeatData.splice(idx, 1);
    };


    $scope.periodName = [];
});

