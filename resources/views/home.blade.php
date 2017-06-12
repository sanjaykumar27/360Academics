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
<style>

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
        margin-bottom: 24px;
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
        border-radius: 0px;
        transition: all ease-in 0.3s;
        border-color: #fff;
        color: #fff;
        width: 140px;
    }

</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "light",
        "marginRight": 20,
        "marginLeft": 70,
        "marginTop": 7,
        "dataProvider": [{
                "date": "2012-03-01",
                "Amount": 145532
            }, {
                "date": "2012-03-02",
                "Amount": 185532
            }, {
                "date": "2012-03-03",
                "Amount": 156532
            }, {
                "date": "2012-03-04",
                "Amount": 192532
            }, {
                "date": "2012-03-05",
                "Amount": 258532
            }, {
                "date": "2012-03-06",
                "Amount": 210532
            }, {
                "date": "2012-03-07",
                "Amount": 192532
            }, {
                "date": "2012-03-08",
                "Amount": 119532
            }, {
                "date": "2012-03-09",
                "Amount": 202532
            }, {
                "date": "2012-03-10",
                "Amount": 212532
            }, {
                "date": "2012-03-11",
                "Amount": 192532
            }, {
                "date": "2012-03-12",
                "Amount": 162532
            }, {
                "date": "2012-03-13",
                "Amount": 172532
            }, {
                "date": "2012-03-14",
                "Amount": 212532
            }, {
                "date": "2012-03-15",
                "Amount": 145532
            }],
        "valueAxes": [{
                "logarithmic": true,
                "dashLength": 1,
                "guides": [{
                        "dashLength": 4,
                        "inside": true,
                        "label": "Collection",
                        "lineAlpha": 1,
                        "value": 90.4
                    }],
                "position": "center"
            }],
        "graphs": [{
                "bullet": "round",
                "id": "g1",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 9,
                "lineThickness": 3,
                "title": "Amount",
                "type": "smoothedLine",
                "useLineColorForBulletBorder": true,
                "valueField": "Amount"
            }],
        "chartCursor": {
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "valueLineAlpha": 0,
            "fullWidth": true,
            "cursorAlpha": 0
        },
        "dataDateFormat": "YYYY-MM-DD",
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true
        },
        "export": {
            "enabled": false
        }
    });

    var chart = AmCharts.makeChart("chartdivexpense", {
        "type": "serial",
        "theme": "light",
        "marginRight": 20,
        "marginLeft": 70,
        "marginTop": 7,
        "dataProvider": [{
                "date": "2012-03-01",
                "Amount": 5400
            }, {
                "date": "2012-03-02",
                "Amount": 6500
            }, {
                "date": "2012-03-03",
                "Amount": 3200
            }, {
                "date": "2012-03-04",
                "Amount": 4520
            }],
        "valueAxes": [{
                "logarithmic": true,
                "dashLength": 1,
                "guides": [{
                        "dashLength": 4,
                        "inside": true,
                        "label": "Collection",
                        "lineAlpha": 1,
                        "value": 90.4
                    }],
                "position": "center"
            }],
        "graphs": [{
                "bullet": "round",
                "id": "g1",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 9,
                "lineThickness": 3,
                "title": "Amount",
                "type": "smoothedLine",
                "useLineColorForBulletBorder": true,
                "valueField": "Amount"
            }],
        "chartCursor": {
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "valueLineAlpha": 0,
            "fullWidth": true,
            "cursorAlpha": 0
        },
        "dataDateFormat": "YYYY-MM-DD",
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true
        },
        "export": {
            "enabled": false
        }
    });
</script>
<script type="text/javascript">

    var chart = AmCharts.makeChart("piediv", {
        "type": "pie",
        "theme": "chalk",
        "dataProvider": [{
                "title": "Absent",
                "value": 1420
            }, {
                "title": "Present",
                "value": 3230
            }],
        "titleField": "title",
        "valueField": "value",
        "labelRadius": 5,
        "radius": "35%",
        "innerRadius": "60%",
        "labelText": "",
        "export": {
            "enabled": false
        }
    });
    var chart = AmCharts.makeChart("piedivteacher", {
        "type": "pie",
        "theme": "dark",
        "dataProvider": [{
                "title": "Absent",
                "value": 7
            }, {
                "title": "Present",
                "value": 65
            }],
        "titleField": "title",
        "valueField": "value",
        "labelRadius": 5,
        "radius": "35%",
        "innerRadius": "60%",
        "labelText": "",
        "export": {
            "enabled": false
        }
    });
    var chart = AmCharts.makeChart("piedivstaff", {
        "type": "pie",
        "theme": "light",
        "dataProvider": [{
                "title": "Absent",
                "value": 7
            }, {
                "title": "Present",
                "value": 65
            }],
        "titleField": "title",
        "valueField": "value",
        "labelRadius": 5,
        "radius": "35%",
        "innerRadius": "60%",
        "labelText": "",
        "export": {
            "enabled": false
        }
    });
    var chart = AmCharts.makeChart("pietest", {
        "type": "pie",
        "theme": "black",
        "dataProvider": [{
                "title": "Absent",
                "value": 7
            }, {
                "title": "Present",
                "value": 65
            }],
        "titleField": "title",
        "valueField": "value",
        "labelRadius": 5,
        "radius": "35%",
        "innerRadius": "60%",
        "labelText": "",
        "export": {
            "enabled": false
        }
    });

</script>
</head>

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
</script>

<body style="background-color: #F0F3F4;">
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

                    <!---------------- widget container for Total Student -------------------------->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-blue panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="ion-ios-people-outline md-display-3"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large"><a href="">4120</a></div>
                                    <div class="text-muted">Total Students</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------- widget container for Incomplete Profile -------------------------->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-orange panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="ion-ios-person-outline md-display-3"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large">120</div>
                                    <div class="text-muted">Incomplete Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------- widget container for Total Collected -------------------------->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-green panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="fa fa-inr md-display-2"></i>
                                </div>
                                <div class="col-lg-7 col-xs-7 widget-right">
                                    <div class="large">10,25,122
                                        <div class="btn-group" style="font-size:14px;padding-left: 10px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-muted">Today Collection </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------------- widget container for Total Due -------------------------->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-red panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-xs-5 widget-left">
                                    <i class="fa fa-inr md-display-2"></i>
                                </div>
                                <div class="col-lg-7  col-xs-7 widget-right">
                                    <div class="large">1,20,200
                                        <div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted">Total Due</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-white panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5  col-xs-5 widget-left" style="height: 110px; padding-top: 5px;">
                                    <div id="piedivteacher" style="height: 100px;"></div>
                                </div>
                                <div class="col-lg-7  col-xs-7 widget-right" >
                                    <div class="md-display-1" style="color: #5f6468;font-weight: 300">93%
                                        <div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted" style="font-size: 15px;">Teachers Attendance
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-white panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 widget-left" style="height: 110px; padding-top: 5px;">
                                    <div id="piedivstaff" style="height: 100px;"></div>
                                </div>
                                <div class="col-lg-7 col-md-5 col-sm-5 col-xs-7 widget-right" >
                                    <div class="md-display-1" style="color: #5f6468;font-weight: 300">96%
                                        <div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted" style="font-size: 15px;">Staff Attendance</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 widget-item-container">
                        <div class="panel panel-white panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 widget-left" style="height: 110px; padding-top: 5px;">
                                    <div id="piediv" style="height: 100px;"></div>
                                </div>
                                <div class="col-lg-7 col-md-5 col-sm-5 col-xs-7 widget-right" >
                                    <div class="md-display-1" style="color: #5f6468;font-weight: 300">85%
                                        <div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted" style="font-size: 15px;">Student Attendance</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3  col-xs-12 widget-item-container">
                        <div class="panel panel-white panel-widget">
                            <div class="row no-padding">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 widget-left" style="height: 110px; padding-top: 5px;">
                                    <div id="pietest" style="height: 100px;"></div>
                                </div>
                                <div class="col-lg-7 col-md-5 col-sm-5 col-xs-7 widget-right" >
                                    <div class="md-display-1" style="color: #5f6468;font-weight: 300">75%
                                        <div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                            <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <li><a href="">Weekly</a></li>
                                                <li><a href="">This Month</a></li>
                                                <li><a href="">Up to Date</a></li>
                                            </div>
                                        </div></div>
                                    <div class="text-muted" style="font-size: 15px;">Test</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 widget-item-container table-container">
                        <div class="horizontal-scroll panel fixed-height">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="black-muted-tag">
                                            <td width="5%"><div class="btn-group" style="font-size:14px;padding-left: 20px;">
                                                    <i class="fa fa-chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                    <div class="dropdown-menu">
                                                        <li><a href="">Weekly</a></li>
                                                        <li><a href="">This Month</a></li>
                                                        <li><a href="">Up to Date</a></li>
                                                    </div>
                                                </div></td>
                                            <td align="center" colspan="3" >Daily Collection</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Cash</td>
                                            <td><i class="fa fa-inr"></i>&nbsp;85,000</td>
                                            <td><i class="fa fa-arrow-up" style="color: green"></i>&nbsp;12%</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Cheque</td>
                                            <td><i class="fa fa-inr"></i>&nbsp;42,000</td>
                                            <td><i class="fa fa-arrow-up" style="color: green"></i>&nbsp;16%</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Conveyance</td>
                                            <td><i class="fa fa-inr"></i>&nbsp;5,000</td>
                                            <td><i class="fa fa-arrow-down" style="color: red"></i>&nbsp;6%</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Penalties</td>
                                            <td><i class="fa fa-inr"></i>&nbsp;5,00</td>
                                            <td><i class="fa fa-arrow-up" style="color: green"></i>&nbsp;2%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12 widget-item-container table-container">
                        <div class="horizontal-scroll panel fixed-height">
                            <table class="table" style="text-align: center" >
                                <thead>
                                    <tr class="black-muted-tag">
                                        <td colspan="4" align="center">Quick Links</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Quick Registration</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Student Dashboard</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Fee Collect</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-primary">Tc Issue</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Fee Collection Report</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Fee Due Report</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Daily Report</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-info">Fee Rule Report</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Cheque Management</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Vehicle Dashboard</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Incomplete Profiles</a></td>
                                        <td><a href="" style="color: #fff" class="btn btn-sm btn-success">Master Collection</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <p class="large"  align="center" style="background-color: #1EBFAE;color: #fff; padding: 6px; width: 100%;font-weight: 300">Daily Fee Collection</p>
                        <div id="chartdiv" class="panel" style="height: 222px;" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <p class="large"  align="center" style="background-color: #30A5FF;color: #fff; padding: 6px; width: 100%;font-weight: 300">Daily Expense</p>
                        <div id="chartdivexpense" class="panel" style="height: 222px;" >
                        </div>
                    </div>

                    <div class="col-lg-6 widget-item-container table-container">
                        <div class="horizontal-scroll panel" style="height: 330px;">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="black-muted-tag">
                                        <td align="center">NOTICE BOARD</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="h6">
                                                <img class="log-icon" src='{{url('assets/images/profile.jpg')}}'/>
                                                &nbsp;Ashok Tiwari
                                                <span class="md-caption">[ Principle ]
                                                    <small>5<sup>th</sup>March 2017</small>
                                                </span>
                                                <span style="float: right">
                                                    <i class="fa fa-comment-o md-caption">
                                                        <md-tooltip md-direction="top">Add Comment</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-desktop md-caption">
                                                        <md-tooltip md-direction="top">Open Thread</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-trash-o md-caption">
                                                        <md-tooltip md-direction="top">Delete Thread</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-hand-pointer-o md-caption">
                                                        <md-tooltip md-direction="top">Mark as important</md-tooltip>
                                                    </i>
                                                </span>
                                            </p>
                                            <p><span class="label label-danger">#Misbehave</span>
                                                &nbsp;Student caught fighting with other student in
                                                playground.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6">
                                                <img class="log-icon" src='{{url('assets/images/profile.jpg')}}'/>
                                                &nbsp;Manoj Sinha
                                                <span class="md-caption">[ Teacher ]
                                                    <small>8<sup>th</sup>March 2017</small>
                                                </span> 
                                                <span style="float: right">
                                                    <i class="fa fa-comment-o md-caption">
                                                        <md-tooltip md-direction="top">Add Comment</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-desktop md-caption">
                                                        <md-tooltip md-direction="top">Open Thread</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-trash-o md-caption">
                                                        <md-tooltip md-direction="top">Delete Thread</md-tooltip>
                                                    </i>&nbsp;
                                                    <i class="fa fa-hand-pointer-o md-caption">
                                                        <md-tooltip md-direction="top">Mark as important</md-tooltip>
                                                    </i>
                                                </span>
                                            </p>
                                            <p><span class="label label-success">#Notice</span>
                                                &nbsp; January 15 is PTM.</p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h6">
                                                <img class="log-icon" src='{{url('assets/images/profile.jpg')}}'/>
                                                &nbsp;Manoj Sinha
                                                <span class="md-caption">[ Teacher ]
                                                    <small>8<sup>th</sup>March 2017</small>
                                                </span> 
                                                <span style="float: right">
                                                    <i class="fa fa-comment-o md-caption">
                                                        <md-tooltip md-direction="top">Add Comment</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-desktop md-caption">
                                                        <md-tooltip md-direction="top">Open Thread</md-tooltip>
                                                    </i>
                                                    &nbsp;
                                                    <i class="fa fa-trash-o md-caption">
                                                        <md-tooltip md-direction="top">Delete Thread</md-tooltip>
                                                    </i>&nbsp;
                                                    <i class="fa fa-hand-pointer-o md-caption">
                                                        <md-tooltip md-direction="top">Mark as important</md-tooltip>
                                                    </i>
                                                </span>
                                            </p>
                                            <p><span class="label label-success">#Notice</span>
                                                &nbsp; January 15 is PTM.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</body><br><br><br><br><br><br><br><br>
@endsection
