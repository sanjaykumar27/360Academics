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
        $scope.starttimerow.push("Marks " + $scope.counter);
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

    $scope.path = $('#path').val();
    $scope.paynow = function (detail) {
        var left = (screen.width / 2) - (1800 / 2);
        var top = (screen.height / 2) - (500 / 2);
        var sw = (screen.width * .80);
        var sh = (screen.height * .65);
        var url = $scope.path + '/display_marks';
        window.open(url, 'pop-up', 'width=' + sw + ', height=' + sh + ', top=' + top + ', left=' + left);
    };

    
    $scope.display = [1, 2, 3];
   
    $scope.selected = [1];
    $scope.toggle = function (items, list) {
        var idx = list.indexOf(item);
        if (idx > -1) {
            list.splice(idx, 1);
        } else {
            list.push(items);
        }
    };

    $scope.exists = function (items, list) {
        return list.indexOf(items) > -1;
    };

    $scope.isIndeterminate = function () {
        return ($scope.selected.length !== 0 &&
                $scope.selected.length !== $scope.display.length);
    };

    $scope.isChecked = function () {
        return $scope.selected.length === $scope.display.length;
    };

    $scope.toggleAll = function () {
        if ($scope.selected.length === $scope.display.length) {
            $scope.selected = [];
        } else if ($scope.selected.length === 0 || $scope.selected.length > 0) {
            $scope.selected = $scope.display.slice(0);
        }
    };
    
    $scope.displayy = [1, 2, 3];
   
    $scope.selected = [1];
    $scope.toggle = function (item, list) {
        var idx = list.indexOf(item);
        if (idx > -1) {
            list.splice(idx, 1);
        } else {
            list.push(item);
        }
    };

    $scope.exists = function (item, list) {
        return list.indexOf(item) > -1;
    };

    $scope.isIndeterminate = function () {
        return ($scope.selected.length !== 0 &&
                $scope.selected.length !== $scope.displayy.length);
    };

    $scope.isChecked = function () {
        return $scope.selected.length === $scope.displayy.length;
    };

    $scope.toggleAll = function () {
        if ($scope.selected.length === $scope.displayy.length) {
            $scope.selected = [];
        } else if ($scope.selected.length === 0 || $scope.selected.length > 0) {
            $scope.selected = $scope.displayy.slice(0);
        }
    };
});

