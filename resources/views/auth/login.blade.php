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
      <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">     

      <!-- CSS:: ANGULAR -->  
      <link rel="stylesheet" href="{{url('')}}/assets/css/angular-material.min.css">
      <link rel="stylesheet" href="{{url('')}}/assets/css/sweetalert.css">

      <!-- CSS:: -->
      <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/reset.css">
      <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/css/main.css"> 
      
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
			  <form  method="post" name="frmlogin" id="frmlogin"  novalidate="novalidate" action="{{ url('/login') }}" >
			  
					<input type="hidden" name="_token"  value="{{csrf_token()}}">
                  <md-input-container class="md-block" ng-class="(submitted && !frmlogin.email.$valid) ? 'd-validation-error' : ''" flex-gt-sm >
                    <i class="material-icons">person</i>
                    <label>Email</label>
                    <input ng-model="singledata.email" name="email"  required type="email" ng-model-options="{debounce : 700}" value="{{ old('email') }}">
					<div ng-show="submitted && frmlogin.email.$error " class="md-input-messages-animation md-auto-hide ng-active">
					  <div ng-show="frmlogin.email.$error.required">{{ config('constant.error.Required') }}</div>
					  <div ng-show="frmlogin.email.$error.email">{{ config('constant.error.ValidEmail') }}</div>
					</div>
					@if ($errors->has('email'))
						<div ng-show="loginErrorMessage"  class="md-input-messages-animation md-auto-hide ng-active">
							 <div>{{ config('constant.error.LoginEmail') }}</div>
						</div>
					@endif
                  </md-input-container>
                  <md-input-container class="md-block" ng-class="(submitted && !frmlogin.password.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                    <i class="material-icons">lock_outline</i>
                    <label>Password</label>
                    <input name="password" ng-model="singledata.password" required="" ng-minlength="6" ng-maxlength="30"   type="password" ng-model-options="{debounce : 700}">
                    <div ng-show="submitted &&  frmlogin.password.$error " class="md-input-messages-animation md-auto-hide ng-active">
					  <div ng-show="frmlogin.password.$error.required">{{ config('constant.error.Required') }}</div>
					  <div ng-show="frmlogin.password.$error.minlength || frmlogin.password.$error.maxlength">{{ config('constant.error.LoginPassMinLength') }}</div>
					</div>
                  </md-input-container>
                  <md-button class="md-raised md-primary" ng-click="checklogin(frmlogin.$valid)">Submit</md-button>
                <div class="d-form_links"> 
                   
				    <input type="checkbox" name="remember" class="md-checkbox"> Remember Me
                   <a href="#" class="pull-right">Forgot Password ?</a>
                </div>
                </form>
              </div>
          </div>
     </div>
   </div>  
 </div>
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


 </body>
</html> 	