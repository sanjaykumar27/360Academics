app.controller('feecollectionstats', function($scope) {
    
    $scope.labels = ["Week 1", "Week 2", "Week 3", "Week 5", "Week 6", "Week 7", "Week 8"];
    $scope.series = ['Collection', 'Minimum'];
    $scope.data = [
        [520250, 512000, 615201, 550012, 523013, 652309, 526352]
    ];

    $scope.onClick = function(points, evt) {
        console.log(points, evt);
    };
    $scope.datasetOverride = [{yAxisID: 'y-axis-1'}, {yAxisID: 'y-axis-2'}];
    $scope.maintainAspectRatio = [false];
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
