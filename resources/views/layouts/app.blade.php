<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>

        <!-- PAGE TITLE -->
        <title>360 Degree @if(isset($title)) {{$title}} @endif</title>

        <!-- META-DATA -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="" >
            <meta name="keywords" content="" >

                <!-- CSS:: FONTS -->
                <!-- CSS:: FONTS -->
                <script type="text/javascript" src="{{url('')}}/assets/js/jquery.min.js"></script>   
                <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/font-awesome.min.css"/>  
                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500" rel="stylesheet"/> 
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
                <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
                <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">     

                    <!-- CSS:: ANGULAR -->  
                    <link rel="stylesheet" href="{{url('')}}/assets/css/angular-material.min.css"/>
                    <link rel="stylesheet" href="{{url('')}}/assets/css/select2.css"/>
                    <link rel="stylesheet" href="{{url('')}}/assets/css/sweetalert.css"/>

                    <!-- CSS:: -->
                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/reset.css"/>
                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/main.css"/> 
                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/angular-timeline.css"/> 
                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/bootstrap-timepicker.min.css"/> 

                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/ui-cropper.css"/> 
                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/intlTelInput.css"/> 


                    <script>
                        window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
                    </script>
                    <style>
                        body.stop-scrolling{height: auto;}
                        #loader { display: none;background-color:#000 !important;opacity:.6;  }
                        #loader { display: block; top: 0; }
                        .loaderimage {
                            position: fixed;
                            left: 0px;
                            top: 0px;
                            width: 100%;
                            height: 100%;
                            z-index: 2147483647;
                            background: url('/360d/assets/images/loading.gif') center no-repeat;
                        }
                        .loaderimage::after {
                            content: 'Processing ......';
                            top: 55%;
                            height: 100%;
                            width: 100%;
                            z-index: 9999999;
                            position: fixed;
                            text-align: center;
                            color: #fff;
                        }
                    </style>
                    </head>
                    <body ng-app="app">  
                        <header ng-cloak>    
                            <md-sidenav md-component-id="right" class="md-sidenav-right">
                                <md-content>  
                                    <div class="d-notification_head clearfix">
                                        <div class="d-read_all">
                                            <i class="material-icons">done_all</i>
                                            <span>Mark all as read</span>
                                        </div>
                                        <div class="d-close" ng-click="closeRightMenu()">
                                            <i class="material-icons">close</i>
                                            <span>Close Notification</span>
                                        </div>

                                    </div>
                                    <ul class="d-notification_list">
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li class="d-visible"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                        <li><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></li>
                                    </ul> 
                                </md-content>
                            </md-sidenav>
                            <div class="d-header">
                                <div class="d-header_info">
                                    <div class="container-fluid">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="col-xs-12 col-sm-2 col-md-4 col-lg-2 d-logo" >
                                                <a href="{{url('/home')}}"><img style="height: 40px;" src="{{url('')}}/assets/images/logo.png" alt="" class="img-responsive"></a>
                                            </div>
                                            <span class="hidden-md hidden-lg clearfix">&nbsp</span>
                                            <div class="d-main_menu" style="padding-top: 10px;">
                                                <nav>
                                                    <ul>
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="#">About</a></li>
                                                        <li><a href="#">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right" style="padding-top: 10px;">
                                            <div class="d-top_user" ng-controller="Notification as ctrl">
                                                <img src="{{url('')}}/assets/images/father.jpg" class="menu-icon img-responsive" alt=""> 
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle" type="button" data-toggle="dropdown">HI, {{Auth::user()->fname}} 
                                                            &nbsp;<i class="fa fa-chevron-down"></i></span>
                                                        <ul class="dropdown-menu"> 
                                                            <li style="background-color: #d0d0d0"><a>[ System Admin ]</a></li>
                                                            <li ><a href="user_profile.html">
                                                                    <i class="fa fa-edit"></i> &nbsp; Edit Profile</a></li> 
                                                            <li><a href="change_password.html">
                                                                    <i class="fa fa-lock"></i> &nbsp; &nbsp;Change Password</a></li> 
                                                            <li><a href="{{ url('/logout')}}"
                                                                   onclick="event.preventDefault();
                                                                                   document.getElementById('logout-form').submit();">
                                                                    <i class="fa fa-sign-out"></i> &nbsp;       Logout
                                                                </a><form id="logout-form" action="{{ url('/logout')}}" method="POST" style="display: none;">
                                                                    {{ csrf_field()}}
                                                                </form></li> 
                                                        </ul>
                                                    </div>
                                                    <span class="d-notification_icon" ng-click="openRightMenu()">
                                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                                        <em>10</em>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-header_strip" >
                                    <div class="container-fluid " >
                                        <div class="col-xs-12 col-sm-10 col-md-12 col-lg-12 d-nav"> 
                                            <nav class="navbar navbar-default " role="navigation" >  
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button> 
                                                </div> 
                                                <div class="collapse navbar-collapse navbar-ex1-collapse col-md-offset-3"> 
                                                    <ul class="nav navbar-nav navbar-right "> 
                                                        <li>
                                                            <md-menu-bar>
                                                                <md-menu>
                                                                    <a href="#" class="md-button dropdown-toggle" style="padding-top: 2px; color: #fff" ng-click="$mdOpenMenu()"><i class="fa fa-file-o"></i> &nbsp; Academics <b class="caret"></b></a>
                                                                    <md-menu-content>           
                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a class="md-button" ng-click="$mdOpenMenu()">Time Table</a>
                                                                                <md-menu-content>
                                                                                    <md-menu-item><a class="md-button" href="{{url('/timetable_season_group')}}">Timetable Date Range</a></md-menu-item>
                                                                                    <!--<md-menu-item><a class="md-button" href="{{url('/sub_teach_assoc')}}">Subject Teacher Allocation</a></md-menu-item>-->
                                                                                    <md-menu-item><a class="md-button" href="{{url('/timetable_master')}}">Timetable Master</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('/view_timetable')}}">View Timetable</a></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>
                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a href="{{url('class_teacher_allocation')}}" ng-click="$mdOpenMenu()" class="md-button">Subject Teacher Allocation</a>
                                                                                <md-menu-content hide>
                                                                                    <md-menu-item><md-button>Document</md-button></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>
                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a  ng-click="$mdOpenMenu()" class="md-button">Syllabus</a>
                                                                                <md-menu-content>
                                                                                    <md-menu-item><a class="md-button" href="{{url('set_course')}}">Course Structure</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('course_topic_distribution')}}">Course Topic Distribution</a></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>

                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a ng-click="$mdOpenMenu()" class="md-button">Examination</a>
                                                                                <md-menu-content>
                                                                                    <md-menu-item><a class="md-button" href="{{url('set_term')}}">Set Term</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('term_exam_assoc')}}">Term Exam Structure</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('create_exam')}}">Create Exam</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('create_exam_notes')}}">Create Exam Instructions</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('exam_timetable')}}">Exam Timetable</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('exam_blueprint')}}">Create Exam Blueprint</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('view_exam_blueprint')}}">Exam Blueprint</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('create_questionpaper_blueprint')}}">Question Paper Blueprint</a></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>

                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a  ng-click="$mdOpenMenu()" class="md-button">Attendance</a>
                                                                                <md-menu-content>
                                                                                    <md-menu-item><a class="md-button" href="{{url('mark_attendance')}}">Mark Attendance</a></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>
                                                                        <md-menu-item>
                                                                            <md-menu>
                                                                                <a  ng-click="$mdOpenMenu()" class="md-button">Subjects</a>
                                                                                <md-menu-content>
                                                                                    <md-menu-item><a class="md-button" href="{{url('co_scholastic_master')}}">Co-Scholastic Master</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('co_scholastic_assoc')}}">Class - Co-Scholastic Association</a></md-menu-item>
                                                                                    <md-menu-item><a class="md-button" href="{{url('marks_distribution')}}">Marks Distribution</a></md-menu-item>
                                                                                </md-menu-content>
                                                                            </md-menu>
                                                                        </md-menu-item>
                                                                    </md-menu-content>
                                                                </md-menu>
                                                            </md-menu-bar>
                                                        </li>

                                                        <li> 
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-phone"></i>  &nbsp; Communication<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="phone_log">Phone Log</a></li>
                                                                <li><a href="other_log">Other Log</a></li>
                                                                <li><a href="appointment">Appointments</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- <li> 
                                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i>  &nbsp; Master <b class="caret"></b></a>
                                                             <ul class="dropdown-menu">
                                                                 <li><a href="{{url('/collection_type')}}">Collection Type</a></li>
                                                             </ul>
                                                         </li>-->
                                                        <li>
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  &nbsp;Student <b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="{{url('/create_student')}}">Create Student</a></li>
                                                                <li><a href="{{url('/student_profile')}}">Student Profile</a></li>
                                                                <li><a href="{{url('/daily_report')}}">Daily Report</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </header>

                        <input type="text" id="path" name="path" value="{{url('')}}" style="display: none;"/>
                        <div id="loader"></div>
                        @yield('content')

                        <footer>
                            <div class="d-footer">
                                <div class="container">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
                                            <ul class="d-footer_social">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                            </ul>
                                        </div> 
                                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                            <p>
                                                Copyright &copy; 2017 eBizneeds Business Solutions | All Rights Reserved <br>
                                                    Total School Empowerment Solutions. | <a href="#">360° view</a> 
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </footer>
                        <!-- JQUERY:: BOOTSTRAP.JS --> 
                        <script type="text/javascript" src="{{url('')}}/assets/js/jquery.min.js"></script>   
                        <script type="text/javascript" src="{{url('')}}/assets/js/bootstrap.min.js"></script>   

                        <!-- ANGULAR:: ANGULAR MATERIAL PACKAGE -->
                        <script src="{{url('')}}/assets/js/angular.min.js"></script>
                        <script src="{{url('')}}/assets/js/angular-animate.min.js"></script>
                        <script src="{{url('')}}/assets/js/angular-aria.min.js"></script>
                        <script src="{{url('')}}/assets/js/angular-messages.min.js"></script>
                        <script src="{{url('')}}/assets/js/angular-material.min.js"></script>
                        <script src="{{url('')}}/assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
                        <script src="{{url('')}}/assets/js/select2.js"></script>
                        <script src="{{url('')}}/assets/js/select2_src.js"></script>
                        <script src="{{url('')}}/assets/js/sweetalert.min.js"></script>


                        <!-- CUSTOM:: CUSTOM.JS -->
                        <script type="text/javascript" src="{{url('')}}/assets/js/custom.min.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_login.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_module.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_role.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_country.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_state.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_city.js"></script>

                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_student.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_collection.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controllers_collectiontype.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controller_seasongroup.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/Chart.min.js"></script>

                        <script type="text/javascript" src="{{url('')}}/assets/js/angular-chart.min.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/angular-timeline.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/bootstrap-timepicker.min.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/js/controller_examination.js"></script>
                        <script type="text/javascript" src="{{url('')}}/assets/tinymce/js/tinymce/tinymce.min.js"></script>



                        <?php if (!\Cookie::get('timezone')) { ?>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    var visitortime = new Date();
                                    var visitortimezone = -visitortime.getTimezoneOffset() / 60;
                                    $.ajax({
                                        type: "GET",
                                        url: "<?php echo url(''); ?>/updatetimezone/" + visitortimezone,
                                        data: 'time=' + visitortimezone,
                                        success: function () {
                                            location.reload();
                                        }
                                    });
                                });
                            </script>
                        <?php } ?>
                    </body>
                    </html> 	