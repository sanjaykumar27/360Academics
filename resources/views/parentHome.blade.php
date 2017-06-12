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
</head>
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
        padding: 15px;
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
        border-radius: 6px;
        position: relative;
        margin-bottom: 15px;
        box-shadow: 0 5px 5px 0 rgba(0,0,0,0.25);
    }
    .large{
        font-size: 22px;
    }
    .text-muted{
        padding-top: 5px;
        color: #7e8994;
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

    #calendar {
        margin: 0 auto;

        width: 600px;
        background-color: #FFFFFF;
    }

    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        border-top: 0px;
    }
    .hover15 figure {
        position: relative;
    }
    .hover15 figure::before {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        display: block;
        content: '';
        width: 0;
        height: 0;
        background: rgba(255,255,255,.2);
        border-radius: 100%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        opacity: 0;
    }
    .hover15 figure:hover::before {
        -webkit-animation: circle .75s;
        animation: circle .75s;
    }
    @-webkit-keyframes circle {
        0% {
            opacity: 1;
        }
        40% {
            opacity: 1;
        }
        100% {
            width: 200%;
            height: 200%;
            opacity: 0;
        }
    }
    @keyframes circle {
        0% {
            opacity: 1;
        }
        40% {
            opacity: 1;
        }
        100% {
            width: 200%;
            height: 200%;
            opacity: 0;
        }
    }
    
    .fa:hover{
        color: #1EBFAE;
        moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);

    }
    

</style>



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


        <!-- ---- Color changing palette box --------------------------->
        <div class="d-container" ng-controller="feecollectionstats">
            <div class="container" style="padding-left: 25px;">

                <div class="col-lg-12 panel" style="height: 500px; padding: 0px;">
                    <div class="row no-padding" style="background-color: #1EBFAE;color: #fff">
                        <div class="col-lg-12" >
                            <div class="md-display-1" style="padding: 15px; font-weight: 300" align="center">Welcome to Parent Module...</div>
                        </div>
                    </div>
                    <hr style="margin-top: 0px; border-top: 2px #1EBFAE solid;" >
                    <div class="row" align="center">
                        <div class="col-lg-12">
                            <div class="large" style="padding: 10px; font-weight: 300">SELECT YOUR STUDENT</div>
                            <span class="clearfix">&nbsp;</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 hover15" >
                            <a href="{{url('student_profile')}}">
                                <figure><img class="menu-icon " style="height: 80px;width: 80px;" src="{{url('assets/images/father.jpg')}}"></figure>
                                <p style="padding-top: 10px; font-size: 18px; font-weight: 300" align="center">SANJAY KUMAR CHAURASIA</p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 hover15">
                            <a href="{{url('student_profile')}}">
                                <figure><img class="menu-icon" style="height: 80px;width: 80px;" src="{{url('assets/images/brother.jpg')}}"></figure>
                                <p style="padding-top: 10px; font-size: 18px; font-weight: 300" align="center">RAJESH KUMAR CHAURASIA</p>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row" align="center">
                        <div class="col-lg-12">
                            <div class="large" style="padding: 10px; font-weight: 300;">FEATURES OF THIS MODULE</div>
                            <span class="clearfix">&nbsp;</span>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <div class="col-lg-12">
                            <table class="table table-condensed" style="width:60%; text-align: center"> 
                                <tr >
                                    <td class="hi-icon-effect-1"><i class="hi-icon fa fa-user-circle fa-2x "></i>
                                <md-tooltip md-direction="down">
                                    Student Profile
                                </md-tooltip>
                                </td>
                                <td><i class="fa fa-inr fa-2x"></i>
                                <md-tooltip md-direction="down">
                                    Student Profile
                                </md-tooltip></td>
                                <td><i class="fa fa-bar-chart fa-2x"></i>
                                <md-tooltip md-direction="down">
                                    Student Reports
                                </md-tooltip></td>
                                <td><i class="fa fa-phone fa-2x"></i>
                                <md-tooltip md-direction="down">
                                    Student Communication
                                </md-tooltip></td>
                                <td><i class="fa fa-bus fa-2x"></i>
                                <md-tooltip md-direction="down">
                                    Student Transport
                                </md-tooltip></td>
                                <td><i class="fa fa-graduation-cap fa-2x"></i>
                                <md-tooltip md-direction="down">
                                    Student Academics
                                </md-tooltip></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>  
<br><br><br><br><br><br><br><br>
@endsection
