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
                                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 d-logo">
                                            <a href="{{url('')}}"><img src="{{url('assets/images/logo.png')}}"  style="padding: 15px 15px;height: 80px;" alt="" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-7  col-lg-offset-2" style="padding-top: 20px;">
                                            <div class="d-main_menu">
                                                <nav>
                                                    <ul>
                                                        <li><a class="md-display-1" style="font-size: 24px;">Online Student Registration</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
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
                                        var visitortimezone = - visitortime.getTimezoneOffset() / 60;
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