@extends('layouts.app')

@section('content')

<script src="{{url('')}}/assets/js/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/chalk.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<script src="https://www.amcharts.com/lib/3/themes/black.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/patterns.js"></script>
<style>
    .state-icon {
        left: -5px;
    }
    .list-group-item-primary {
        color: rgb(255, 255, 255);
        background-color: rgb(66, 139, 202);
    }

    /* DEMO ONLY - REMOVES UNWANTED MARGIN */
    .well .list-group {
        margin-bottom: 0px;
    }
    .panel-header{
        margin-bottom: 0px;
    }
    .panel-widget{
        background-color: #fff;
        position: relative;
    }

    .widget-left{
        height: 80px;
        padding-top: 15px;
        text-align: center;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .widget-right{
        text-align: left;
        line-height: 1.6em;
        margin: 0px;
        padding: 20px;
        height: 80px;
        color: #999;
        font-weight: 300;
        background: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    .panel {
        color: #666;
        background-color: #fff;
        border: none;
        border-radius: 5px;
        position: relative;
        margin-bottom: 15px;
        box-shadow: 0 5px 5px 0 rgba(0,0,0,0.25);
    }
    .large{
        font-size: 22px;
    }
    .text-muted{
        color: #9fadbb;
    }
    .no-padding{
        padding: 0px;
    }
    .panel-blue .widget-left{
        background-color: #30a5ff;
        color: #fff;
    }
    .panel-orange .widget-left{
        background-color: #ffb53e;
        color: #fff;
    }
    .panel-green .widget-left{
        background-color: #1ebfae;
        color: #fff;
    }
    .panel-red .widget-left{
        background-color: #f9243f;
        color: #fff;
    }
    .panel-white .widget-left{
        background-color: #fff;
        color: #000;
    }
    .widget-item-container{
        position: relative;
        float: left;
        box-sizing: border-box;
    }
    .widget-right .large{
        color: #5f6468;
    }
    .row{
        margin: 0px;
    }
    .d-breadcrum_bar{
        background-color: #dadada;
    }

    .fixed-height{
        height: 185px;
    }

    .horizontal-scroll{
        overflow-x: auto;
        overflow-y: visible;
    }
    .black-muted-tag{
        background-color: rgba(0,0,0,0.1);
    }
    #piediv {
        width		: 100%;
        height		: 500px;
        font-size	: 11px;
    }	

    .color-1 {
        background:#2C3E50;
    }
    .color-2 {
        background:#3498DB;
    }
    .color-3 {
        background:#0C7096;
    }
    .color-4 {
        background:#36C7C7;
    }
    .color-5 {
        background:#0F9DA5;
    }
    .color-6 {
        background:#FB6868;
    }

    .color-picker {
        position: fixed;
        right: 0;
        top: 150px;
        width: 239px;
        background: #fff;
        z-index: 999999;
        -webkit-transition: all .3s ease;
    }


    .color-picker a.handle:hover i {
        color: #fff;
        transition: all ease-in 0.3s;
    }
    .color-picker a.handle i {
        color: #2C3E50;
        font-size: 25px;
        line-height: 50px;
    }
    .color-picker .settings-header {
        background: #2C3E50;
        height: 50px;
        padding: 15px 34px 0 34px;
    }
    .color-picker .settings-header h3 {
        color: #fff;
        font-size: 16px;
        line-height: 16px;
        margin-bottom: 0;
        padding: 0 0 5px;
        margin-top: 0;
    }
    .color-picker .section:last-child {
        border-bottom:1px solid rgb(44, 62, 80);
    }
    .color-picker .section {
        padding: 20px 14px;
        border-bottom: 1px solid rgb(44, 62, 80);
        border-left: 1px solid rgb(44, 62, 80);
        overflow: hidden;
    }
    .color-picker .section h3 {
        font-size: 16px;
        text-transform: none;
        color: #3c3c3c;
        line-height: 16px;
        padding: 0;
        margin-bottom: 20px;
        text-align: left;
    }
    .color-picker .section i {
        font-size: 16px;
        margin-right: 10px;
    }
    .color-picker span {
        font-size: 13px;
        color: #9a9a9a;
    }
    .color-picker .colors a {
        display: block;
        border-radius: 10px;
        width: 30px;
        height: 30px;
        margin-left: 0;
        margin-bottom: 10px;
        margin-right: 5px;
        float: left;
        transition: all ease-in 0.3s;
    }
    .color-picker .colors a:hover {
        box-shadow: 0 0 2px 1px rgba(247, 54, 121, 0.58);
        transition: all ease-in 0.3s;
    }
    .color-picker .skin a {
        display: block;
        width: 70px;
        height: 30px;
        margin-left: 0;
        margin-top: 0;
        margin-right: 5px;
        float: left;
        text-align: center;
        line-height: 30px;
        border: 2px transparent solid;
    }
    .color-picker .skin a.actt {
        border: 2px #FFF solid;
    }
    .color-picker a.handle:hover {
        background: #4A6076;
        transition: all ease-in 0.3s;
    }

    .color-picker a.handle {
        border: 1px solid #2C3E50;
        position: absolute;
        top: 0;
        right: 239px;
        width: 50px;
        height: 50px;
        text-align: center;
        background: #fff;
        z-index: 9999;
        transition: all ease-in 0.3s;
    }
    .btn{
        border-radius: 4px;
        transition: all ease-in 0.3s;
        border-color: #fff;
        color: #fff;
        width: 140px;
    }

    #external-events {
        float: left;
        width: 150px;
        padding: 0 10px;
        text-align: left;
    }

    #external-events h4 {
        font-size: 10px;
        margin-top: 0;
        padding-top: 1em;
    }

    .external-event { /* try to mimick the look of a real event */
        margin: 10px 0;
        padding: 2px 4px;
        background: #ccc;
        color: #fff;
        font-size: .85em;
        cursor: pointer;
    }

    #external-events p {
        margin: 1.5em 0;
        font-size: 11px;
        color: #666;
    }

    #external-events p input {
        margin: 0;
        vertical-align: middle;
    }

    


</style>

<script type="text/javascript">
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "dark",
        "marginRight": 0,
        "marginLeft": 0,
        "marginTop": 10,
        "dataProvider": [{
                "date": "2012-03-01",
                "Amount": 40
            }, {
                "date": "2012-03-02",
                "Amount": 42
            }, {
                "date": "2012-03-03",
                "Amount": 37
            }, {
                "date": "2012-03-04",
                "Amount": 45
            }, {
                "date": "2012-03-05",
                "Amount": 42
            }, {
                "date": "2012-03-06",
                "Amount": 42
            }],
        "valueAxes": [{
                "dashLength": 0,
                "position": "center"
            }],
        "graphs": [{
                "bullet": "round",
                "id": "g2",
                "bulletColor": "#000",
                "bulletSize": 8,
                "lineThickness": 1,
                "type": "smoothedLine",
                "useLineColorForBulletBorder": true,
                "valueField": "Amount"
            }],
        "dataDateFormat": "DD-MM-YYYY",
        "categoryField": "date"

    });

</script>
</head>

<script>
    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        /*  className colors
         className: default(transparent), important(red), chill(pink), success(green), info(blue)
         */
        /* initialize the external events
         -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });

        /* initialize the calendar
         -----------------------------------------------------------------*/

        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'title',
                center: 'agendaDay,agendaWeek,month',
                right: 'prev,next today'
            },
            editable: true,
            firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
            selectable: true,
            defaultView: 'month',
            axisFormat: 'h:mm',
            columnFormat: {
                month: 'ddd', // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d', // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
            allDaySlot: false,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true // make the event "stick"
                            );
                }
                calendar.fullCalendar('unselect');
            },
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: 'important'
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/',
                    className: 'success'
                }
            ],
        });
    });
</script>

<script>
    $(function() {
        $('#showColor').click(function() {
            $('#colorbox').css('right', '0');
            $('#removeColor').css('display', 'block');
            $('#showColor').css('display', 'none');
        });
        $('#removeColor').click(function() {
            $('#colorbox').css('right', '-239px');
            $('#removeColor').css('display', 'none');
            $('#showColor').css('display', 'block');
        });

        $('#color1').click(function() {
            $('.style-menu-button').toggleClass('color-1');
            $('.d-header').toggleClass('color-1');
        });
        $('#color2').click(function() {
            $('.style-menu-button').toggleClass('color-2');
            $('.d-header').toggleClass('color-2');
        });
        $('#color3').click(function() {
            $('.style-menu-button').toggleClass('color-3');
            $('.d-header').toggleClass('color-3');
        });
        $('#color4').click(function() {
            $('.style-menu-button').toggleClass('color-4');
            $('.d-header').toggleClass('color-4');
        });
        $('#color5').click(function() {
            $('.style-menu-button').toggleClass('color-5');
            $('.d-header').toggleClass('color-5');
        });
        $('#color6').click(function() {
            $('.style-menu-button').toggleClass('color-6');
            $('.d-header').toggleClass('color-6');
        });
    });

    var chart = AmCharts.makeChart("chartClassPerformance", {
        "type": "serial",
        "theme": "none",
        "categoryField": "year",
        "rotate": true,
        "startDuration": 1,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left"
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "Topper:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-1",
                "lineAlpha": 0.2,
                "title": "Topper",
                "type": "column",
                "valueField": "Topper"
            },
            {
                "balloonText": "Average Marks:[[value]]",
                "fillAlphas": 0.8,
                "id": "AmGraph-2",
                "lineAlpha": 0.2,
                "title": "Average Marks",
                "type": "column",
                "valueField": "Average Marks"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "ValueAxis-1",
                "position": "top",
                "axisAlpha": 0
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [],
        "dataProvider": [
            {
                "year": 2013,
                "Topper": 96,
                "Average Marks": 67
            },
            {
                "year": 2013,
                "Topper": 95,
                "Average Marks": 74
            },
            {
                "year": 2014,
                "Topper": 97,
                "Average Marks": 72
            },
            {
                "year": 2015,
                "Topper": 94,
                "Average Marks": 69
            },
            {
                "year": 2016,
                "Topper": 98,
                "Average Marks": 76
            }
        ]
    });
    $(function() {
        $('.list-group.checked-list-box .list-group-item').each(function() {

            // Settings
            var $widget = $(this),
                    $checkbox = $('<input type="checkbox" class="hidden" />'),
                    color = ($widget.data('color') ? $widget.data('color') : "primary"),
                    style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
                    settings = {
                        on: {
                            icon: 'fa fa-check'
                        },
                        off: {
                            icon: 'fa fa-uncheck'
                        }
                    };

            $widget.css('cursor', 'pointer')
            $widget.append($checkbox);

            // Event Handlers
            $widget.on('click', function() {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function() {
                updateDisplay();
            });


            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $widget.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $widget.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$widget.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $widget.addClass(style + color + ' active');
                } else {
                    $widget.removeClass(style + color + ' active');
                }
            }

            // Initialization
            function init() {

                if ($widget.data('checked') == true) {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                }

                updateDisplay();

                // Inject the icon if applicable
                if ($widget.find('.state-icon').length == 0) {
                    $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
                }
            }
            init();
        });

        $('#get-checked-data').on('click', function(event) {
            event.preventDefault();
            var checkedItems = {}, counter = 0;
            $("#check-list-box li.active").each(function(idx, li) {
                checkedItems[counter] = $(li).text();
                counter++;
            });
            $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
        });
    });
</script>

<body style="background-color: #F0F3F4">
    <div class="d-wrapper d-master" >
        <div class="d-breadcrum_bar" >
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                        <ul class="d-breadcrum" >
                            <li style="padding-left: 15px;"><a href="{{url('')}}"><i class="fa fa-home"></i></a></li>
                            <li><span>Dashboard</span></li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div> 
        <!-- ---- Color changing palette box --------------------------->
        <div class="d-container" ng-controller="feecollectionstats">
            <div class="container-fluid" style="padding-left: 25px;">
                <div class="color-picker" id="colorbox" style="right: -239px;">
                    <a href class="handle"  id="showColor" style="display: block"><i class="fa fa-cog fa-spin fa-4x fa-fw"></i></a>
                    <a href class="handle"  id="removeColor" style="display: none"><i class="fa fa-remove fa-4x fa-fw"></i></a>
                    <div class="settings-header">
                        <h3>Setting panel</h3>
                    </div>
                    <div class="section">
                        <h3 class="color">Normal color schemes:</h3>
                        <div class="colors">
                            <a href="#" id="color1" class="color-1"></a>
                            <a href="#" id="color2" class="color-2"></a>
                            <a href="#" id="color3" class="color-3"></a>
                            <a href="#" id="color4" class="color-4"></a>
                            <a href="#" id="color5" class="color-5"></a>
                            <a href="#" id="color6" class="color-6"></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!--------------  Attendance Panel ----------------->
                    <div class="col-lg-6 col-xs-12 widget-item-container" >
                        <div class="panel panel-white panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-12 col-xs-12  widget-left" style="height: 175px; padding-top: 5px; background-color: #fff;">
                                    <div id="chartdiv" style="height: 140px;"></div>
                                    <span style="float: left;">Last Week Attendance</span>
                                    <span style="float:  right;">Short Attendance: <span style="color: #ff0000;">3 Students</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-12 widget-item-container">
                        <div class="panel panel-red panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="ion-ios-people-outline md-display-3"></i>
                                </div>
                                <div class="col-lg-7  col-xs-7 widget-right">
                                    <div class="large"><a href=""><span style="color: green">43 P/</span>
                                            <span style="color: red">2 A</span></a></div>
                                    <div class="text-muted">Today Attendance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-xs-12 widget-item-container">
                        <div class="panel panel-green panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5  col-xs-5 widget-left">
                                    <i class="fa fa-graduation-cap md-display-2"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large"><a href="">93%</a>
                                        <div class="btn-group" style="font-size:14px; padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted">Today Attendance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------  Total Student Widgets ----------------->
                    <div class="col-lg-3 col-xs-12 widget-item-container">
                        <div class="panel panel-blue panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="ion-ios-people-outline md-display-3"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large"><a href="">45</a></div>
                                    <div class="text-muted">Total Students</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 widget-item-container">
                        <div class="panel panel-orange panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="fa fa-graduation-cap md-display-2"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large"><a href="">VII - A</a></div>
                                    <div class="text-muted">Class Assigned</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-12 widget-item-container">
                    <div class="panel fixed-height">
                        <div id="chartClassPerformance" style="height: 165px;"> </div>
                        <p style="text-align: center;padding-bottom: 5px;">Class Average Performance</p>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-12 widget-item-container table-container">
                    <div class="horizontal-scroll panel fixed-height">
                        <div class="table-responsive">
                        <table class="table" style="text-align: center" >
                            <thead>
                                <tr class="black-muted-tag">
                                    <td colspan="4" align="center">QUICK LINKS</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Teacher Dashboard</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Student Dashboard</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Timetable</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Syllabus</a></td>
                                </tr>
                                <tr>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Examination</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Student Attendance</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Teacher Attedance</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Subject Management</a></td>
                                </tr>
                                <tr>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Calender Management</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Results</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Notifications</a></td>
                                    <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Phone Log</a></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <div class="row" ng-controller="dashboardlist">
                    <div class="col-lg-6  col-xs-12 widget-item-container table-container">
                        <div class="horizontal-scroll panel table-responsive" >
                            <table class="table table-hover">
                                <thead>
                                    <tr class="black-muted-tag">
                                        <td align="center" colspan="4">
                                            <span style="float: left">
                                                <div class="btn-group" style="font-size:14px;">
                                                    <i class="fa fa-chevron-down" data-toggle="dropdown"></i>
                                                    <div class="dropdown-menu">
                                                        <li><a href="">Weekly</a></li>
                                                    </div>
                                                </div>
                                            </span>TIMETABLE
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='info'>
                                        <td>Periods</td>
                                        <td>Time</td>
                                        <td>Subject</td>
                                        <td>Class</td>
                                    </tr>
                                    <tr>
                                        <td>I</td>
                                        <td>8:00 - 8:45</td>
                                        <td>English</td>
                                        <td>I - A</td>
                                    </tr>
                                    <tr>
                                        <td>II</td>
                                        <td>8:45 - 9:30</td>
                                        <td>English</td>
                                        <td>I - C</td>
                                    </tr>
                                    <tr>
                                        <td>III</td>
                                        <td>9:30 - 10:15</td>
                                        <td>English</td>
                                        <td>V - C</td>
                                    </tr>
                                    <tr>
                                        <td>IV</td>
                                        <td>10:15 - 11:00</td>
                                        <td>English</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Recess</td>
                                        <td>11:00 - 11:20</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>V</td>
                                        <td>11:20 - 12:00</td>
                                        <td>English</td>
                                        <td>V - B</td>
                                    </tr>
                                    <tr>
                                        <td>VI</td>
                                        <td>12:00 - 12:40</td>
                                        <td>Social Studies</td>
                                        <td>V - C</td>
                                    </tr>
                                    <tr>
                                        <td>VII</td>
                                        <td>12:40 - 13:20</td>
                                        <td>English</td>
                                        <td>VI - A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6  col-xs-12 widget-item-container ">
                        <div class="horizontal-scroll panel" style="height: 175px;">
                            <table class="table table-hover" >
                                <thead>
                                    <tr class="black-muted-tag">
                                        <td align="center" colspan="3"> COMPLAINT 
                                            <span style="float: right;">
                                                <a href="">
                                                    <i style="font-size: 18px;" class="fa fa-plus-circle"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sanjay didnt completed his homework again.</td>
                                        <td>-- Pankaj Bhargav</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prateek was fighting in class.</td>
                                        <td>-- Vikash</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-lg-6  col-xs-12 widget-item-container table-container">
                        <div class="horizontal-scroll panel table-responsive" style="height: 178px;" >
                            <table class="table table-hover">
                                <thead>
                                    <tr class="black-muted-tag">
                                        <td align="center" colspan="5">
                                            COMMUNICATION
                                            <span style="float: right;">
                                                <a href="">
                                                    <i style="font-size: 18px;" class="fa fa-plus-circle"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Phone Call</td>
                                        <td>08-06-2017</td>
                                        <td>Meeting Purpose</td>
                                        <td>Father</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Email</td>
                                        <td>08-06-2017</td>
                                        <td>Meeting Purpose</td>
                                        <td>Father</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Phone Call</td>
                                        <td>08-06-2017</td>
                                        <td>Meeting Purpose</td>
                                        <td>Father</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6  col-xs-12 widget-item-container">
                    <div class="panel">
                        <div class="large" style="padding: 10px;font-weight: 300;background-color: #E5E5E5;">Task List</div>
                        <div style="max-height: 300px;overflow: auto;">
                            <ul class="list-group checked-list-box">
                                <li class="list-group-item">&nbsp;Topic 1 need to be re-discussed</li>
                                <li class="list-group-item" data-checked="true">&nbsp; Check Notebooks Tomorrow</li>
                                <li class="list-group-item">&nbsp; 04-08-17 will be my half day</li>
                                <li class="list-group-item">&nbsp;This is my test task 1.</li>
                                <li class="list-group-item">&nbsp;This is my test task 2</li>
                                <li class="list-group-item">&nbsp;This is my test task 3.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6  col-xs-12 widget-item-container">
                    <div class="panel" style="height: 295px">
                        <div class="large" style="padding: 10px;font-weight: 300;background-color: #E5E5E5;">Employee Detail</div>
                        <table class="table table-hover">
                            <tr>
                                <td>Name:</td><td>Sanjay Kumar</td>
                            </tr>
                            <tr>
                                <td>Post:</td><td>Teacher</td>
                            </tr>
                            <tr>
                                <td>Leaves This Month:</td><td>0</td>
                            </tr>
                            <tr>
                                <td>Salary:</td><td><i class="fa fa-inr"></i>&nbsp;15,000</td>
                            </tr>
                            <tr>
                                <td>Joined On:</td><td>15 April 2016</td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="col-lg-12 col-xs-12 widget-item-container">
                    <div class="panel panel-white panel-widget">
                        <div class="row no-padding">
                            <div class="col-lg-6 col-xs-12">
                                <div id='calendar'></div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="row">
                                    <span class="clearfix">&nbsp;</span>
                                    <p class="md-display-1" style="font-weight: 300">Up Coming Events</p>
                                    <table class="table table-hover" style="font-size: 18px; font-weight: 300;">
                                        <tr>
                                            <td>1.</td>
                                            <td>Cultural Festival</td>
                                            <td>15 - 07 - 2017</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Book Festival</td>
                                            <td>02 - 08 - 2017</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Dance Competition</td>
                                            <td>12 - 09 - 2017</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Essay Writing Competition</td>
                                            <td>12 - 10 - 2017</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><br><br><br><br><br><br><br><br>
<style>
    td.fc-day {
        background:#FFF !important;
        font-family: 'Roboto', sans-serif;
    }

    td.fc-today {
        background:#FFF !important;
        position: relative;
    }

    .fc-first th{
        font-family: 'Roboto', sans-serif;
        background:#9675ce !important;
        color:#FFF;
        font-size:14px !important;
        font-weight:500 !important;

    }
    .fc-event-inner {
        font-family: 'Roboto', sans-serif;
        background: #03a9f3!important;
        color: #FFF!important;
        font-size: 12px!important;
        font-weight: 500!important;
        padding: 5px 0px!important;
    }

    .fc {
        direction: ltr;
        text-align: left;
    }

    .fc table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    html .fc,
    .fc table {
        font-size: 1em;
        font-family: "Helvetica Neue",Helvetica;

    }

    .fc td,
    .fc th {
        padding: 0;
        vertical-align: top;
    }



    /* Header
    ------------------------------------------------------------------------*/

    .fc-header td {
        white-space: nowrap;
        padding: 15px 10px 0px;
    }

    .fc-header-left {
        width: 25%;
        text-align: left;
    }

    .fc-header-center {
        text-align: center;
    }

    .fc-header-right {
        width: 25%;
        text-align: right;
    }

    .fc-header-title {
        display: inline-block;
        vertical-align: top;
        margin-top: -5px;
    }

    .fc-header-title h2 {
        margin-top: 0;
        white-space: nowrap;
        font-size: 32px;
        font-weight: 100;
        margin-bottom: 10px;
        font-family: 'Roboto', sans-serif;
    }
    span.fc-button {
        font-family: 'Roboto', sans-serif;
        border-color: #9675ce;
        color: #9675ce;
    }
    .fc-state-down, .fc-state-active {
        background-color: #9675ce !important;
        color: #FFF !important;
    }
    .fc .fc-header-space {
        padding-left: 10px;
    }

    .fc-header .fc-button {
        margin-bottom: 1em;
        vertical-align: top;
    }

    /* buttons edges butting together */

    .fc-header .fc-button {
        margin-right: -1px;
    }

    .fc-header .fc-corner-right,  /* non-theme */
    .fc-header .ui-corner-right { /* theme */
        margin-right: 0; /* back to normal */
    }

    /* button layering (for border precedence) */

    .fc-header .fc-state-hover,
    .fc-header .ui-state-hover {
        z-index: 2;
    }

    .fc-header .fc-state-down {
        z-index: 3;
    }

    .fc-header .fc-state-active,
    .fc-header .ui-state-active {
        z-index: 4;
    }



    /* Content
    ------------------------------------------------------------------------*/

    .fc-content {
        clear: both;
        zoom: 1; /* for IE7, gives accurate coordinates for [un]freezeContentHeight */
    }

    .fc-view {
        width: 100%;
        overflow: hidden;
    }



    /* Cell Styles
    ------------------------------------------------------------------------*/

    /* <th>, usually */
    .fc-widget-content {  /* <td>, usually */
        border: 1px solid #e5e5e5;
    }
    .fc-widget-header{
        border-bottom: 1px solid #EEE; 
    }	
    .fc-state-highlight { /* <td> today cell */ /* TODO: add .fc-today to <th> */
        /* background: #fcf8e3; */
    }

    .fc-state-highlight > div > div.fc-day-number{
        background-color: #ff3b30;
        color: #FFFFFF;
        border-radius: 50%;
        margin: 4px;
    }

    .fc-cell-overlay { /* semi-transparent rectangle while dragging */
        background: #bce8f1;
        opacity: .3;
        filter: alpha(opacity=30); /* for IE */
    }



    /* Buttons
    ------------------------------------------------------------------------*/

    .fc-button {
        position: relative;
        display: inline-block;
        padding: 0 .6em;
        overflow: hidden;
        height: 1.9em;
        line-height: 1.9em;
        white-space: nowrap;
        cursor: pointer;
    }

    .fc-state-default { /* non-theme */
        border: 1px solid;
    }

    .fc-state-default.fc-corner-left { /* non-theme */
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .fc-state-default.fc-corner-right { /* non-theme */
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    /*
            Our default prev/next buttons use HTML entities like ‹ › « »
            and we'll try to make them look good cross-browser.
    */

    .fc-text-arrow {
        margin: 0 .4em;
        font-size: 2em;
        line-height: 23px;
        vertical-align: baseline; /* for IE7 */
    }

    .fc-button-prev .fc-text-arrow,
    .fc-button-next .fc-text-arrow { /* for ‹ › */
        font-weight: bold;
    }

    /* icon (for jquery ui) */

    .fc-button .fc-icon-wrap {
        position: relative;
        float: left;
        top: 50%;
    }

    .fc-button .ui-icon {
        position: relative;
        float: left;
        margin-top: -50%;

        *margin-top: 0;
        *top: -50%;
    }


    .fc-state-default {
        border-color: #ff3b30;
        color: #ff3b30;	
    }
    .fc-button-month.fc-state-default, .fc-button-agendaWeek.fc-state-default, .fc-button-agendaDay.fc-state-default{
        min-width: 67px;
        text-align: center;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
    }
    .fc-state-hover,
    .fc-state-down,
    .fc-state-active,
    .fc-state-disabled {
        color: #333333;
        background-color: #FFE3E3;
    }

    .fc-state-hover {
        color: #ff3b30;
        text-decoration: none;
        background-position: 0 -15px;
        -webkit-transition: background-position 0.1s linear;
        -moz-transition: background-position 0.1s linear;
        -o-transition: background-position 0.1s linear;
        transition: background-position 0.1s linear;
    }

    .fc-state-down,
    .fc-state-active {
        background-color: #ff3b30;
        background-image: none;
        outline: 0;
        color: #FFFFFF;
    }

    .fc-state-disabled {
        cursor: default;
        background-image: none;
        background-color: #FFE3E3;
        filter: alpha(opacity=65);
        box-shadow: none;
        border:1px solid #FFE3E3;
        color: #ff3b30;
    }



    /* Global Event Styles
    ------------------------------------------------------------------------*/

    .fc-event-container > * {
        z-index: 8;
    }

    .fc-event-container > .ui-draggable-dragging,
    .fc-event-container > .ui-resizable-resizing {
        z-index: 9;
    }

    .fc-event {
        border: 1px solid #FFF; /* default BORDER color */
        background-color: #FFF; /* default BACKGROUND color */
        color: #919191;               /* default TEXT color */
        font-size: 12px;
        cursor: default;
    }
    .fc-event.chill{
        background-color: #f3dcf8;
    }
    .fc-event.info{
        background-color: #c6ebfe;
    }
    .fc-event.important{
        background-color: #FFBEBE;
    }
    .fc-event.success{
        background-color: #BEFFBF;
    }
    .fc-event:hover{
        opacity: 0.7;
    }
    a.fc-event {
        text-decoration: none;
    }

    a.fc-event,
    .fc-event-draggable {
        cursor: pointer;
    }

    .fc-rtl .fc-event {
        text-align: right;
    }

    .fc-event-inner {
        width: 100%;
        height: 100%;
        overflow: hidden;
        line-height: 15px;
    }

    .fc-event-time,
    .fc-event-title {
        padding: 0 1px;
    }

    .fc .ui-resizable-handle {
        display: block;
        position: absolute;
        z-index: 99999;
        overflow: hidden; /* hacky spaces (IE6/7) */
        font-size: 300%;  /* */
        line-height: 50%; /* */
    }



    /* Horizontal Events
    ------------------------------------------------------------------------*/

    .fc-event-hori {
        border-width: 1px 0;
        margin-bottom: 1px;
    }

    .fc-ltr .fc-event-hori.fc-event-start,
    .fc-rtl .fc-event-hori.fc-event-end {
        border-left-width: 1px;
        /*
border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        */
    }

    .fc-ltr .fc-event-hori.fc-event-end,
    .fc-rtl .fc-event-hori.fc-event-start {
        border-right-width: 1px;
        /*
border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        */
    }

    /* resizable */

    .fc-event-hori .ui-resizable-e {
        top: 0           !important; /* importants override pre jquery ui 1.7 styles */
        right: -3px      !important;
        width: 7px       !important;
        height: 100%     !important;
        cursor: e-resize;
    }

    .fc-event-hori .ui-resizable-w {
        top: 0           !important;
        left: -3px       !important;
        width: 7px       !important;
        height: 100%     !important;
        cursor: w-resize;
    }

    .fc-event-hori .ui-resizable-handle {
        _padding-bottom: 14px; /* IE6 had 0 height */
    }



    /* Reusable Separate-border Table
    ------------------------------------------------------------*/

    table.fc-border-separate {
        border-collapse: separate;
    }

    .fc-border-separate th,
    .fc-border-separate td {
        border-width: 1px 0 0 1px;
    }

    .fc-border-separate th.fc-last,
    .fc-border-separate td.fc-last {
        border-right-width: 1px;
    }


    .fc-border-separate tr.fc-last td {

    }
    .fc-border-separate .fc-week .fc-first{
        border-left: 0;
    }
    .fc-border-separate .fc-week .fc-last{
        border-right: 0;
    }
    .fc-border-separate tr.fc-last th{
        border-bottom-width: 1px;
        border-color: #cdcdcd;
        font-size: 16px;
        font-weight: 300;
        line-height: 30px;
    }
    .fc-border-separate tbody tr.fc-first td,
    .fc-border-separate tbody tr.fc-first th {
        border-top-width: 0;
    }



    /* Month View, Basic Week View, Basic Day View
    ------------------------------------------------------------------------*/

    .fc-grid th {
        text-align: center;
    }

    .fc .fc-week-number {
        width: 22px;
        text-align: center;
    }

    .fc .fc-week-number div {
        padding: 0 2px;
    }

    .fc-grid .fc-day-number {
        float: right;
        padding: 0 2px;
    }

    .fc-grid .fc-other-month .fc-day-number {
        opacity: 0.3;
        filter: alpha(opacity=30); /* for IE */
        /* opacity with small font can sometimes look too faded
           might want to set the 'color' property instead
           making day-numbers bold also fixes the problem */
    }

    .fc-grid .fc-day-content {
        clear: both;
        padding: 2px 2px 1px; /* distance between events and day edges */
    }

    /* event styles */

    .fc-grid .fc-event-time {
        font-weight: bold;
    }

    /* right-to-left */

    .fc-rtl .fc-grid .fc-day-number {
        float: left;
    }

    .fc-rtl .fc-grid .fc-event-time {
        float: right;
    }



    /* Agenda Week View, Agenda Day View
    ------------------------------------------------------------------------*/

    .fc-agenda table {
        border-collapse: separate;
    }

    .fc-agenda-days th {
        text-align: center;
    }

    .fc-agenda .fc-agenda-axis {
        width: 50px;
        padding: 0 4px;
        vertical-align: middle;
        text-align: right;
        white-space: nowrap;
        font-weight: normal;
    }

    .fc-agenda .fc-week-number {
        font-weight: bold;
    }

    .fc-agenda .fc-day-content {
        padding: 2px 2px 1px;
    }

    /* make axis border take precedence */

    .fc-agenda-days .fc-agenda-axis {
        border-right-width: 1px;
    }

    .fc-agenda-days .fc-col0 {
        border-left-width: 0;
    }

    /* all-day area */

    .fc-agenda-allday th {
        border-width: 0 1px;
    }

    .fc-agenda-allday .fc-day-content {
        min-height: 34px; /* TODO: doesnt work well in quirksmode */
        _height: 34px;
    }

    /* divider (between all-day and slots) */

    .fc-agenda-divider-inner {
        height: 2px;
        overflow: hidden;
    }

    .fc-widget-header .fc-agenda-divider-inner {
        background: #eee;
    }

    /* slot rows */

    .fc-agenda-slots th {
        border-width: 1px 1px 0;
    }

    .fc-agenda-slots td {
        border-width: 1px 0 0;
        background: none;
    }

    .fc-agenda-slots td div {
        height: 20px;
    }

    .fc-agenda-slots tr.fc-slot0 th,
    .fc-agenda-slots tr.fc-slot0 td {
        border-top-width: 0;
    }

    .fc-agenda-slots tr.fc-minor th.ui-widget-header {
        *border-top-style: solid; /* doesn't work with background in IE6/7 */
    }



    /* Vertical Events
    ------------------------------------------------------------------------*/

    .fc-event-vert {
        border-width: 0 1px;
    }

    .fc-event-vert.fc-event-start {
        border-top-width: 1px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .fc-event-vert.fc-event-end {
        border-bottom-width: 1px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .fc-event-vert .fc-event-time {
        white-space: nowrap;
        font-size: 10px;
    }

    .fc-event-vert .fc-event-inner {
        position: relative;
        z-index: 2;
    }

    .fc-event-vert .fc-event-bg { /* makes the event lighter w/ a semi-transparent overlay  */
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        opacity: .25;
        filter: alpha(opacity=25);
    }

    .fc .ui-draggable-dragging .fc-event-bg, /* TODO: something nicer like .fc-opacity */
    .fc-select-helper .fc-event-bg {
        display: none\9; /* for IE6/7/8. nested opacity filters while dragging don't work */
    }

    /* resizable */

    .fc-event-vert .ui-resizable-s {
        bottom: 0        !important; /* importants override pre jquery ui 1.7 styles */
        width: 100%      !important;
        height: 8px      !important;
        overflow: hidden !important;
        line-height: 8px !important;
        font-size: 11px  !important;
        font-family: monospace;
        text-align: center;
        cursor: s-resize;
    }

    .fc-agenda .ui-resizable-resizing { /* TODO: better selector */
        _overflow: hidden;
    }

    thead tr.fc-first{
        background-color: #f7f7f7;
    }
    table.fc-header{
        background-color: #FFFFFF;
        border-radius: 6px 6px 0 0;
    }

    .fc-week .fc-day > div .fc-day-number{
        font-size: 15px;
        margin: 2px;
        min-width: 19px;
        padding: 6px;
        text-align: center;
        width: 30px;
        height: 30px;
    }
    .fc-sun, .fc-sat{
        color: #b8b8b8;
    }

    .fc-week .fc-day:hover .fc-day-number{
        background-color: #B8B8B8;
        border-radius: 50%;
        color: #FFFFFF;
        transition: background-color 0.2s;
    }
    .fc-week .fc-day.fc-state-highlight:hover .fc-day-number{
        background-color:  #ff3b30;
    }
    .fc-button-today{
        border: 1px solid rgba(255,255,255,.0);
    }
    .fc-view-agendaDay thead tr.fc-first .fc-widget-header{
        text-align: right;
        padding-right: 10px;
    }

    /*!
     * FullCalendar v1.6.4 Print Stylesheet
     * Docs & License: http://arshaw.com/fullcalendar/
     * (c) 2013 Adam Shaw
     */

    /*
     * Include this stylesheet on your page to get a more printer-friendly calendar.
     * When including this stylesheet, use the media='print' attribute of the <link> tag.
     * Make sure to include this stylesheet IN ADDITION to the regular fullcalendar.css.
     */


    /* Events
   -----------------------------------------------------*/

    .fc-event {
        background: #fff !important;
        color: #000 !important;
    }

    /* for vertical events */

    .fc-event-bg {
        display: none !important;
    }

    .fc-event .ui-resizable-handle {
        display: none !important;
    }


</style>
@endsection
