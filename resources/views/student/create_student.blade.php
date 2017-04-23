@extends('layouts.app')
@section('content');
<br>

<style>
    .error-message {
        color: red;
        font-size: 13px;
    }
    input.ng-dirty.ng-invalid {
        border-color: red;
    }
    #label{
        color: #000;
    }
</style>
<div class="d-wrapper d-master" ng-controller="StudentController" ng-cloak>

    <div class="d-container" >
        <div class="container">
            <md-toolbar class="md-hue-2">
                <div class="md-toolbar-tools"> 
                    <h2>
                        <span>Student Details</span>
                    </h2> 
                </div>
            </md-toolbar>  
            <form name="addstudent" id="addstudent" ng-submit="saverecord(addstudent.$valid)" novalidate="novalidate"  >
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="panel panel-default md-padding">
                    <div class="row clearfix">  
                        <div class="clearfix">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                <md-input-container class="md-block">
                                    <md-checkbox name="isanysibling" ng-model="val" ng-true-value="true" ng-false-value="false" aria-label="Finished?">
                                        Is Any Sibling *?
                                    </md-checkbox>
                                    <div class="md-errors-spacer"></div>
                                </md-input-container> 
                            </div>

                            <!-- -------------- AADHAR CARD NUMBER ------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
                                <md-input-container class="md-block"> 
                                    <label color="black">Aadhar Card*</label>
                                    <input type="text" id="aadharcardno" ng-model="ctrl.aadharcardno"  name="aadharcardno" required
                                           ng-pattern="onlynumber" ng-minlength="16" ng-maxlength="16">
                                    &nbsp;<div ng-show="addstudent.aadharcardno.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.aadharcardno.$error.required">This field is required !</div>
                                        <div ng-show="addstudent.aadharcardno.$error.pattern">Character not allowed ! Enter only number.</div>
                                        <div ng-show="submitted && addstudent.aadharcardno.$error.minlength">Enter 16 digit number</div>
                                        <div ng-show="submitted && addstudent.aadharcardno.$error.maxlength">Enter 16 digit number</div>
                                    </div>
                                </md-input-container>
                            </div> 
                            <!-- --------------Scholor Number------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Scholar No*</label>
                                    <input type="text" id="scholarnumber" ng-model="ctrl.scholarnumber" name="scholarnumber" required >
                                    &nbsp;<div ng-show="addstudent.scholarnumber.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.scholarnumber.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div> 
                            <!----------------- Sibling Scholar No ------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 "ng-show="val">
                                <md-input-container class="md-block"> 
                                    <label>Sibling Scholar No*</label>
                                    <input type="text" id="siblingscholarno" ng-model="ctrl.siblingscholarno" name="siblingscholarno" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container> 
                            </div> 

                        </div>

                        <!-----------------Student First Name ------------------>
                        <div class="row clearfix">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>First Name*</label>
                                    <input type="text" ng-pattern="onlycharacter" id="firstname" ng-model="ctrl.firstname" name="firstname" required>
                                    <div class="md-errors-spacer"></div>
                                    &nbsp; <div ng-show="addstudent.firstname.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.firstname.$error.required">This field is required !</div>
                                        <div ng-show="addstudent.firstname.$error.pattern">Number not allowed ! Enter only character.</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!-- --------------Student Middle Name -------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Middle Name</label>
                                    <input type="text" ng-pattern="onlycharacter" id="middlename" ng-model="ctrl.middlename" name="middlename" >
                                    &nbsp;<div ng-show="addstudent.middlename.$error" class="error-message">
                                        <div ng-show="addstudent.middlename.$error.pattern">Number not allowed ! Enter only character.</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!-----------Student Last Name ------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block">
                                    <label>Last Name</label>
                                    <input type="text" ng-pattern="onlycharacter" id="lastname" ng-model="ctrl.lastname" name="lastname" >
                                    &nbsp;<div ng-show="addstudent.lastname.$error" class="error-message">
                                        <div ng-show="addstudent.lastname.$error.pattern">Number not allowed ! Enter only character.</div>
                                    </div>
                                </md-input-container> 
                            </div>
                        </div>

                        <!----------- Parent First Name --------------------->
                        <div class="row clearfix">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Parent First Name*</label>
                                    <input type="text" id="fatherfirstname" required ng-pattern="onlycharacter" ng-model="ctrl.fatherfirstname" name="fatherfirstname" >
                                    &nbsp; <div ng-show="addstudent.fatherfirstname.$error" class="error-message">
                                        <div ng-show="addstudent.fatherfirstname.$error.pattern">Number not allowed ! Enter only character.</div>
                                        <div ng-show="submitted && addstudent.fatherfirstname.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div> 
                            <!-- ------ Parent Middle Name------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Parent Middle Name</label>
                                    <input type="text" id="fathermiddlename" ng-pattern="onlycharacter" ng-model="ctrl.fathermiddlename" name="fathermiddlename" >
                                    &nbsp; <div ng-show="addstudent.fathermiddlename.$error" class="error-message">
                                        <div ng-show="addstudent.fathermiddlename.$error.pattern">Number not allowed ! Enter only character.</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!-- ----------- Parent Last name ---------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block">
                                    <label>Parent Last Name</label>
                                    <input type="text" id="fatherlastname" ng-pattern="onlycharacter" ng-model="ctrl.fatherlastname" name="fatherlastname" >
                                    &nbsp;<div ng-show="addstudent.fatherlastname.$error" class="error-message">
                                        <div ng-show="addstudent.fatherlastname.$error.pattern">Number not allowed ! Enter only character.</div>
                                    </div>
                                </md-input-container> 
                            </div>
                        </div>

                        <!-- ------------------ Classes --------------------->
                        <div class="row clearfix">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Class" ng-model="ctrl.classid" name="classid" id="classid" required>
                                        <md-option ng-repeat="class in classes" ng-value="class.classid">@{{class.classname}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.classid.$error" class="error-message">
                                        <div ng-show="addstudent.classid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!--------------- Section ------------------------>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Section" ng-model="ctrl.sectionid" name="sectionid" id="sectionid" required>
                                        <md-option ng-repeat="section in sections" ng-value="section.sectionid">@{{section.sectionname}}</md-option>
                                    </md-select>
                                    &nbsp;<div ng-show="submitted && addstudent.sectionid.$error" class="error-message">
                                        <div ng-show="addstudent.sectionid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>  

                            <!---------------- Gender ------------------------>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Gender" ng-model="ctrl.gender" name="gender" id="gender" required>
                                        <md-option ng-repeat="gender in genders" ng-value="gender.mastercollectionid">@{{ gender.collectionname}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.gender.$error" class="error-message">
                                        <div ng-show="addstudent.gender.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>
                        </div>
                        <div class="clearfix"><br></div>

                        <!-------------------- Date of Birth -------------------->
                        <div class="row">    
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-datepicker name="dob" ng-model="myDate"  md-placeholder="D.O.B*" md-min-date="minDate" 
                                               md-max-date="maxDate" required>
                                    &nbsp;<div ng-show="submitted && addstudent.myDate.$error" class="error-message">
                                        <div ng-show="addstudent.myDate.$error.required">This field is required !</div>
                                    </div>
                                </md-datepicker>
                            </div> 

                            <!----------- Mobile Number ------------------------>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Mobile*</label>
                                    <input type="text" id="mobile" required  ng-model="ctrl.mobile" ng-minlength="10" 
                                           ng-maxlength="10" name="mobile" ng-pattern="onlynumber">
                                    &nbsp;   <div ng-show="addstudent.mobile.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.mobile.$error.required">This field is required !</div>
                                        <div ng-show="submitted && addstudent.mobile.$error.minlength">Please enter 10 digit mobile number</div>
                                        <div ng-show="submitted && addstudent.mobile.$error.maxlength">Please enter 10 digit mobile number</div>
                                        <div ng-show="addstudent.mobile.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!---------------- Category ----------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Category" ng-model="ctrl.category" name="categoryid" id="categoryid" required>
                                        <md-option ng-repeat="category in categories" ng-value="category.mastercollectionid">@{{ category.collectionname}}</md-option>
                                    </md-select>
                                    &nbsp;   <div ng-show="addstudent.category.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.categoryid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>
                        </div>

                        <!-------------- Relation -------------------------------->
                        <div class="row clearfix">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-select placeholder="Relation*" ng-model="ctrl.relation" name="relation"> 
                                    <md-option value="214"> Father</md-option>
                                    <md-option value="215"> Mother </md-option>
                                    <md-option value="216"> Guardian </md-option>
                                </md-select> 
                                <div class="md-errors-spacer"></div>
                            </div>

                            <!-------------- Student Type ---------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Student Type" ng-model="ctrl.studenttype" name="studenttypeid" id="studenttypeid" required>
                                        <md-option ng-repeat="studenttype in studenttypes" ng-value="studenttype.mastercollectionid">@{{ studenttype.collectionname}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.studenttypeid.$error" class="error-message">
                                        <div ng-show="addstudent.studenttypeid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!----------------- Email ----------------------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block">
                                    <label>Email </label>
                                    <input type="email" id="email"  ng-model="ctrl.email" name="email" required>
                                    &nbsp;<div ng-show="submitted && addstudent.email.$error" class="error-message">
                                        <div ng-show="addstudent.email.$error.email">Incorrect email format, Ex: abcd@gmail.com</div>
                                        <div ng-show="addstudent.email.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <md-toolbar class="md-hue-2">
                    <div class="md-toolbar-tools"> 
                        <h2>
                            <span>Current Address</span>
                        </h2> 
                    </div>
                </md-toolbar>

                <div class="panel panel-default md-padding">
                    <div class="row clearfix">  
                        <div class="clearfix">

                            <!--------- Current Address 1 --------------->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block">
                                    <label>Current Address One*</label>
                                    <input type="text" id="currentaddress1" required ng-model="ctrl.currentaddress1" name="currentaddress1" >
                                    &nbsp; <div ng-show="submitted && addstudent.currentaddress1.$error" class="error-message">
                                        <div ng-show="addstudent.currentaddress1.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container> 
                            </div>

                            <!----------- Current Address 2 --------------->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block"> 
                                    <label>Current Address Two*</label>
                                    <input type="text" id="currentaddress2" ng-model="ctrl.currentaddress2" name="currentaddress2" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div> 
                        </div>

                        <div class="clearfix">
                            <!------------- Current Suburb ----------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Current Suburb" ng-model="ctrl.currentsuburb" name="currentsuburbid" id="currentsuburbid" required>
                                        <md-option ng-repeat="suburbs in suburbs" ng-value="suburbs.mastercollectionid">@{{ suburbs.collectionname}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.currentsuburbid.$error" class="error-message">
                                        <div ng-show="addstudent.currentsuburbid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!-------- Current Pincode ---------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Current Pincode*</label>
                                    <input type="text"  id="currentzipcode" required ng-model="ctrl.currentzipcode" name="currentzipcode" ng-pattern="onlynumber" >
                                    &nbsp; <div ng-show="addstudent.currentzipcode.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.currentzipcode.$error.required">This field is required !</div>
                                        <div ng-show="addstudent.currentzipcode.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!------------- Current Country ----------------->
                            <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Current Country" ng-model="ctrl.currentcountryid" 
                                               ng-change="getState(true)" name="currentcountryid" id="currentcountryid" required>
                                        <md-option ng-repeat="country in countries" ng-value="country.id">@{{ country.name}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.currentcountryid.$error" class="error-message">
                                        <div ng-show="addstudent.currentcountryid.$error.required">This field is required !</div>
                                    </div>

                                </md-input-container>
                            </div> 

                            <!-------------------- Current state ----------->
                            <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Current State" ng-model="ctrl.currentstateid"  ng-change="getCity(true)" name="currentstateid" id="currentcountryid" required>
                                        <md-option ng-repeat="state in states" ng-value="state.id">@{{ state.name}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.currentstateid.$error" class="error-message">
                                        <div ng-show="addstudent.currentstateid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div> 

                            <!------------------- Current city ---------->
                            <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Current City" ng-model="ctrl.currentcityid"  name="currentcityid" id="currentcountryid" required>
                                        <md-option ng-repeat="city in cities" ng-value="city.id">@{{ city.name}}</md-option>
                                    </md-select>
                                    &nbsp;   <div ng-show="submitted && addstudent.currentcityid.$error" class="error-message">
                                        <div ng-show="addstudent.currentcityid.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>  
                        </div>


                        <md-toolbar class="md-hue-2">
                            <div class="md-toolbar-tools">
                                Contact Details
                                <span flex></span>
                                <md-button ng-click="show = !show" class="md-raised"> Different Permanent Address ? </md-button>
                            </div>
                        </md-toolbar>

                        <div ng-show="show"  >  
                            <!-- -----------------Permanent Address 1 -------->
                            <div class="clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <md-input-container class="md-block">
                                        <label>Permanent Address One*</label>
                                        <input type="text" id="permanentaddress1" required ng-model="ctrl.permanentaddress1" name="permanentaddress1" >
                                        &nbsp;   <div ng-show="submitted && addstudent.permanentaddress1.$error" class="error-message">
                                            <div ng-show="submitted && addstudent.permanentaddress1.$error.required">This field is required !</div>
                                        </div>
                                    </md-input-container> 
                                </div>

                                <!------------ Permanent Address 2 ----------------->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <md-input-container class="md-block"> 
                                        <label>Permanent Address Two*</label>
                                        <input type="text" id="permanentaddress2" ng-model="ctrl.permanentaddress2" name="permanentaddress2" >
                                    </md-input-container>
                                </div> 
                            </div>

                            <!------------- Permanent Suburb -------------->
                            <div class="clearfix">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <md-input-container class="md-block"> 
                                        <md-select placeholder="Permanent Suburb*" ng-model="ctrl.permanentsuburb" required name="permanentsuburb"> 
                                            <md-option ng-repeat="suburbs in suburbs" ng-value="suburbs.mastercollectionid">@{{ suburbs.collectionname}}</md-option>
                                        </md-select> 
                                        &nbsp;   <div ng-show="submitted && addstudent.permanentsuburb.$error" class="error-message">
                                            <div ng-show="submitted && addstudent.permanentsuburb.$error.required">This field is required !</div>
                                        </div>
                                    </md-input-container>
                                </div> 

                                <!------------ Permanent Pincode ------------>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <md-input-container class="md-block"> 
                                        <label>Permanent Pincode*</label>
                                        <input type="text" id="permanentzipcode" required ng-pattern="onlynumber" ng-model="ctrl.permanentzipcode" name="permanentzipcode" >
                                        &nbsp; <div ng-show="addstudent.permanentzipcode.$error" class="error-message">
                                            <div ng-show="submitted && addstudent.permanentzipcode.$error.required">This field is required !</div>
                                            <div ng-show="addstudent.permanentzipcode.$error.pattern">Character not allowed ! Enter only number</div>
                                        </div>
                                    </md-input-container>
                                </div> 


                                <!------------ Permanent Country ------------>
                                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                    <md-input-container class="md-block"> 
                                        <md-select placeholder="Permanent Country" ng-model="ctrl.currentcountryid" 
                                                   ng-change="getState(true)" name="permanentcountryid" id="permanentcountryid" required>
                                            <md-option ng-repeat="country in countries" ng-value="country.id">@{{ country.name}}</md-option>
                                        </md-select>
                                        &nbsp; <div ng-show="submitted && addstudent.permanentcountryid.$error" class="error-message">
                                            <div ng-show="addstudent.permanentcountryid.$error.required">This field is required !</div>
                                        </div>
                                    </md-input-container>
                                </div> 

                                <!-------------------- Current state ----------->
                                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                    <md-input-container class="md-block"> 
                                        <md-select placeholder="Permanent State" ng-model="ctrl.currentstateid"  ng-change="getCity(true)" name="permanentstateid" id="permanentstateid" required>
                                            <md-option ng-repeat="state in states" ng-value="state.id">@{{ state.name}}</md-option>
                                        </md-select>
                                        &nbsp; <div ng-show="submitted && addstudent.permanentstateid.$error" class="error-message">
                                            <div ng-show="addstudent.permanentstateid.$error.required">This field is required !</div>
                                        </div>
                                    </md-input-container>
                                </div> 

                                <!------------------- Current city ---------->
                                <div class="col-xs-2 col-sm-2 col-md-4 col-lg-2">
                                    <md-input-container class="md-block"> 
                                        <md-select placeholder="Permanent City" ng-model="ctrl.currentcityid"  name="permanentcityid" id="permanentcityid" required>
                                            <md-option ng-repeat="city in cities" ng-value="city.id">@{{ city.name}}</md-option>
                                        </md-select>
                                        &nbsp;   <div ng-show="submitted && addstudent.permanentcityid.$error" class="error-message">
                                            <div ng-show="addstudent.permanentcityid.$error.required">This field is required !</div>
                                        </div>
                                    </md-input-container>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default md-padding">
                    <div class="row clearfix">  
                        <div class="clearfix">

                            <!--------------- Primary No ----------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block">
                                    <label>Primary No (landline)</label>
                                    <input type="text" id="phone1" ng-model="ctrl.phone1" name="phone1" ng-maxlength="7" ng-minlength="7" ng-pattern="onlynumber" >
                                    <div ng-show="addstudent.phone1.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.phone1.$error.minlength">Please enter 7 digit mobile number</div>
                                        <div ng-show="submitted && addstudent.phone1.$error.maxlength">Please enter 7 digit mobile number</div>
                                        <div ng-show="addstudent.phone1.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container> 
                            </div>

                            <!------------- Secondary Number --------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Secondary No (landline)</label>
                                    <input ng-maxlength="7" ng-minlength="7" ng-pattern="onlynumber" type="text" 
                                           id="phone2" ng-model="ctrl.phone2" name="phone2" >
                                    <div ng-show="addstudent.phone2.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.phone2.$error.minlength">Please enter 7 digit mobile number</div>
                                        <div ng-show="submitted && addstudent.phone2.$error.maxlength">Please enter 7 digit mobile number</div>
                                        <div ng-show="addstudent.phone2.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!----------- Primary No ------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Primary No (mobile)</label>
                                    <input ng-maxlength="10" ng-minlength="10" ng-pattern="onlynumber"type="text" 
                                           id="mobile1" ng-model="ctrl.mobile1" name="mobile1" ng-minlength="2" >
                                    <div ng-show="addstudent.mobile1.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.mobile1.$error.minlength">Please enter 10 digit mobile number</div>
                                        <div ng-show="submitted && addstudent.mobile1.$error.maxlength">Please enter 10 digit mobile number</div>
                                        <div ng-show="addstudent.mobile1.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container>
                            </div>


                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                                <input  class="ng-hide" id="input-file-id" multiple type="file" />
                                <label for="input-file-id" class="md-button md-raised md-primary">Upload Image</label>
                            </div>
                        </div>

                        <div class="clearfix">
                            <!--------------- Primary Fax ------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block">
                                    <label>Primary Fax No</label>
                                    <input ng-pattern="onlynumber" type="text" 
                                           id="fax1" ng-model="ctrl.fax1" name="fax1" >
                                    <div ng-show="addstudent.fax1.$error" class="error-message">
                                        <div ng-show="addstudent.fax1.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container> 
                            </div>

                            <!------------ Seconday Fax ----------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Secondary Fax No</label>
                                    <input ng-pattern="onlynumber" type="text" id="fax2" ng-model="ctrl.fax2" name="fax2" >
                                    <div ng-show="addstudent.fax2.$error" class="error-message">
                                        <div ng-show="addstudent.fax2.$error.pattern">Character not allowed ! Enter only number</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!-------------------- Passport Number ---------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Passport No</label>
                                    <input type="text" id="passportno" ng-model="ctrl.passportno" name="passportno" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div>


                            <!-------------------- House ------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>House</label>
                                    <input type="text" id="house" ng-model="ctrl.house" name="house" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div>
                        </div>

                        <!----------- Date -------------------------------->
                        <div class="clearfix">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <label></label>
                                <md-datepicker name="doj" ng-model="myDate"  md-placeholder="Date of Joining*" md-min-date="minDate" 
                                               md-max-date="maxDate">
                                    <div class="md-errors-spacer"></div>
                                </md-datepicker>
                            </div>

                            <!------------ Conveyance required -------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Conveyance Required" required ng-model="ctrl.conveyancerequired" name="conveyancerequired"> 
                                        <md-option value="1"> Yes</md-option>
                                        <md-option value="0"> No </md-option>
                                    </md-select> 
                                    &nbsp; <div ng-show="submitted && addstudent.conveyancerequired.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.conveyancerequired.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!------------ Previous School name ------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Previous School Name</label>
                                    <input type="text" id="passportno" ng-model="ctrl.previousschoolname" name="previousschoolname" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div>

                            <!-------------Previous Class Attended ------------>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Class" ng-model="ctrl.previousclass" name="previousclass" id="previousclass" required>
                                        <md-option ng-repeat="class in classes" ng-value="class.classid">@{{class.classname}}</md-option>
                                    </md-select>
                                    &nbsp; <div ng-show="submitted && addstudent.previousclass.$error" class="error-message">
                                        <div ng-show="addstudent.previousclass.$error.required">This field is required !</div>
                                    </div>
                                </md-input-container>
                            </div>
                        </div>

                        <!-------------------- Previous Result ---------->

                        <div class="clearfix">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Previous Result" ng-model="ctrl.previousresult" name="previousresult"> 
                                        <md-option value="267"> Promoted</md-option>
                                        <md-option value="268"> Demoted </md-option>
                                    </md-select> 

                                </md-input-container>
                            </div>

                            <!------------ Percentage / grade --------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Percentage/Grade</label>
                                    <input type="text" id="percentgrade" ng-model="ctrl.percentgrade" name="percentgrade" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div>

                            <!------------- Reference By ------------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Reference By</label>
                                    <input type="text" id="referenceby" ng-model="ctrl.referenceby" name="referenceby" >
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div>


                            <!--------- Other additional info -------------->
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <md-input-container class="md-block"> 
                                    <label>Other Additional Info</label>
                                    <input type="text" id="otheradditionalinformation" ng-model="ctrl.otheradditionalinformation" name="otheradditionalinformation" >
                                </md-input-container>
                            </div>
                        </div>

                        <!------------ Emergency Contact Name ---------------->
                        <div class="clearfix">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Emergency Contact Name</label>
                                    <input type="text" id="emeregencycontactname" required ng-model="ctrl.emeregencycontactname" name="emeregencycontactname" >
                                    &nbsp;<div ng-show="submitted && addstudent.emeregencycontactname.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.emeregencycontactname.$error.required">Required !!</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!-------- Emergancy Contact no ------------------>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Emergency Contact No</label>
                                    <input type="text" id="emeregencyphoneno" ng-pattern="onlynumber" required ng-model="ctrl.emeregencyphoneno" name="emeregencyphoneno" >
                                    &nbsp;<div ng-show="addstudent.emeregencyphoneno.$error" class="error-message">
                                        <div ng-show="addstudent.emeregencyphoneno.$error.pattern">Character not allowed ! Enter only number</div>
                                        <div ng-show="submitted && addstudent.emeregencyphoneno.$error.required">Required !!</div>
                                    </div>
                                </md-input-container>
                            </div>

                            <!------------ Emergancy contact address --------->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <md-input-container class="md-block"> 
                                    <label>Emergency Contact Address</label>
                                    <input type="text" id="emeregencycontactaddress" required ng-model="ctrl.emeregencycontactaddress" name="emeregencycontactaddress" >
                                    &nbsp; <div ng-show="submitted && addstudent.emeregencycontactaddress.$error" class="error-message">
                                        <div ng-show="submitted && addstudent.emeregencycontactaddress.$error.required">Required !!</div>
                                    </div>
                                </md-input-container>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">  
                            <md-button class="md-raised md-button">Cancel</md-button>&nbsp;&nbsp;&nbsp;
                            <input class="md-button md-raised md-primary" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection 