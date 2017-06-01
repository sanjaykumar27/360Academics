<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>

        <!-- PAGE TITLE -->
        <title>360 Degree</title>

        <!-- META-DATA -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" >
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                <meta name="description" content="" >
                    <meta name="keywords" content="" >

                        <!-- CSS:: FONTS -->
                        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/font-awesome.min.css">  
                            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500" rel="stylesheet"> 
                                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

                                    <!-- CSS:: BOOTSTRAP -->	
                                    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css"/>     

                                        <!-- CSS:: ANGULAR -->  
                                        <link rel="stylesheet" href="{{url('')}}/assets/css/angular-material.min.css"/>
                                            <link rel="stylesheet" href="{{url('')}}/assets/css/sweetalert.css"/>

                                                <!-- CSS:: -->
                                                <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/reset.css"/>
                                                    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/main.css"/> 

                                                        </head>
                                                        <body ng-app="app" ng-controller="loginController">  
                                                            <header>
                                                                <div class="d-header">
                                                                    <div class="d-header_strip d-login_page">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                                                    <a href="index.html"><img src="assets/images/logo.png" alt="" class="img-responsive"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </header>
                                                            <div class="d-wrapper">
                                                                <div class="d-container">
                                                                    <div class="d-welcome_msg text-center">
                                                                        <h1>Welcome to 360°</h1>
                                                                        <span>Complete School Management Solution...</span>   
                                                                    </div>
                                                                    <div class="d-login_form">
                                                                        <div class="panel panel-primary">
                                                                            <div class="panel-heading">Login</div>
                                                                            <div class="panel-body">
                                                                                <form  method="post" name="frmlogin" id="frmlogin"  novalidate="novalidate" action="{{ url('/login')}}" >

                                                                                    <input type="hidden" name="_token"  value="{{csrf_token()}}">
                                                                                        <md-input-container class="md-block" ng-class="(submitted && !frmlogin.email.$valid) ? 'd-validation-error' : ''" flex-gt-sm >
                                                                                            <i class="material-icons">person</i>
                                                                                            <label>Email</label>
                                                                                            <input ng-model="singledata.email" name="email"  required type="email" ng-model-options="{debounce: 700}" value="{{ old('email')}}" ng-keyup="$event.keyCode == 13 && checklogin(frmlogin.$valid)">
                                                                                                <div ng-show="submitted && frmlogin.email.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                                                                                    <div ng-show="frmlogin.email.$error.required">{{ config('constant.error.EmailNotEmpty')}}</div>
                                                                                                    <div ng-show="frmlogin.email.$error.email">{{ config('constant.error.ValidEmail')}}</div>
                                                                                                </div>
                                                                                        </md-input-container>
                                                                                        <md-input-container class="md-block" ng-class="(submitted && !frmlogin.password.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                                                            <i class="material-icons">lock_outline</i>
                                                                                            <label>Password</label>
                                                                                            <input name="password" ng-model="singledata.password" required="" type="password"   ng-keyup="$event.keyCode == 13 && checklogin(frmlogin.$valid)">
                                                                                                <div ng-show="(submitted && frmlogin.password.$error) || (<?php echo ($errors->has('email')) ? 1 : 0; ?>)" class="md-input-messages-animation md-auto-hide ng-active">
                                                                                                    <div ng-show="submitted && frmlogin.password.$error.required">{{ config('constant.error.PasswordNotEmpty')}}</div>
                                                                                                    @if ($errors->has('email'))
                                                                                                    <div ng-show="loginErrorMessage"  class="md-input-messages-animation md-auto-hide ng-active" style="color:#FF0000; font-size:12px" >
                                                                                                        {{ config('constant.error.LoginEmail')}}
                                                                                                    </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                        </md-input-container>
                                                                                        <md-button class="md-raised md-primary" ng-click="checklogin(frmlogin.$valid)">Submit</md-button>
                                                                                        <div class="d-form_links"> 

                                                                                            <input type="checkbox" name="remember" class="md-checkbox"> Remember me
                                                                                                <a data-toggle="modal" href='#modal-id' class="pull-right">Forgot password ?</a>
                                                                                        </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                                <div class="modal fade" id="modal-id">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content"> 
                                                                            <div class="modal-body clearfix">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading clearfix">
                                                                                        <h3 class="panel-title d-no_padding">Forgot password</h3> 
                                                                                    </div> 
                                                                                </div>
                                                                                <div class="clearfix well">
                                                                                    <form  method="post" name="forgetpass" id="forgetpass"  novalidate="novalidate" ng-submit="forgot_pass(forgetpass.$valid)" >
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                                                                            <md-input-container class="md-block" ng-class="(submitForget && !forgetpass.email.$valid) ? 'd-validation-error' : ''" flex-gt-sm >
                                                                                                <label>Email</label>
                                                                                                <input ng-model="forget.email" name="email"  required type="email" ng-model-options="{debounce: 700}" ng-keyup="$event.keyCode == 13 && forgot_pass(forgetpass.$valid)">
                                                                                                    <div ng-show="submitForget && forgetpass.email.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                                                                                        <div ng-show="forgetpass.email.$error.required">{{ config('constant.error.Required')}}</div>
                                                                                                        <div ng-show="forgetpass.email.$error.email">{{ config('constant.error.ValidEmail')}}</div>
                                                                                                    </div>
                                                                                            </md-input-container>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                                                                                            <md-button class="md-raised md-button" data-dismiss="modal">Cancel</md-button>&nbsp;&nbsp;&nbsp;
                                                                                            <md-button class="md-raised md-primary" type="submit">Save</md-button>
                                                                                        </div>
                                                                                </div>

                                                                                </form>
                                                                            </div>
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


                                                        </body>
                                                        </html> 	