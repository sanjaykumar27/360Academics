@extends('layouts.studentregistration')
@section('content')

<div class="container" ng-controller="onlinestudentregistration">
    <div class="row">
        <span class="clearfix">&nbsp;<br><br></span>
        <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
            <div id="wid-id-0">
                <!-- widget div-->
                <div role="content">
                    <!-- widget content -->
                    <div class="widget-body">
                        <div class="row">
                            <form id="wizard-1" novalidate="novalidate">
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard">
                                            <li class="active" data-target="#step1">
                                                <a href="#tab1" data-toggle="tab" class="active"> <span class="step">1</span> <span class="title">Student Information</span> </a>
                                            </li>
                                            <li>
                                                <a > <span class="step">2</span> <span class="title">Review Information</span> </a>
                                            </li>
                                            <li>
                                                <a> <span class="step">3</span> <span class="title">Registration Successful</span> </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <span class="clearfix">&nbsp<br><br><br></span>
                                    <script>
                                                $(function() {
                                                    $("#permaddrdetails").hide();
                                                    $("#guardiandetails").hide();

                                                    $('#detailsmatch').click(function() {
                                                        $('#permaddrdetails').toggle();
                                                    });

                                                    $('#guardianinfo').click(function() {
                                                        $('#guardiandetails').toggle();
                                                    });

                                                    $('#sibling').click(function() {
                                                        $('#siblingscholarnumber').removeAttr('disabled');
                                                        $('#siblingbranch').removeAttr('disabled');
                                                    });

                                                });
                                    </script>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <div class="form-actions">
                                                <span class="clearfix">&nbsp;<br></span>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                        <h4><i class="material-icons">account_circle</i>SIBLING DETAILS</h4> 
                                                    </div>
                                                </div>

                                                <div class="row" >
                                                    <!-------------------- Sibling Check Box ------------------------------>


                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block" ><br>
                                                            <input type="text" placeholder="Enter Scholar Number"  id="siblingscholarnumber" >
                                                        </md-input-container>
                                                    </div>

                                                    <!-------------------- Sibling Branch ------------------------------>
                                                    <div class='col-lg-4'>
                                                        <md-input-container class="md-block">
                                                            <label>Sibling Branch</label><br>
                                                            <md-select  ng-model="ctrl.branch" placeholder="Sibling Branch"  id="siblingbranch">
                                                                <md-option value="term1">CHB</md-option>
                                                                <md-option value="term2">Shastri Nagar</md-option>
                                                                <md-option value="term1">Paota</md-option>
                                                                <md-option value="term2">Ratanada</md-option>
                                                            </md-select>
                                                        </md-input-container>
                                                    </div>

                                                    <!-------------------- Sibling Branch ------------------------------>
                                                    <div class='col-lg-4'>
                                                        <md-input-container class="md-block">
                                                            <label></label>
                                                            <select ui-select2 ng-model="ctrl.branch" multiple placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">CHB</option>
                                                                <option value="term2">Shastri Nagar</option>
                                                                <option value="term3">Paota</option>
                                                                <option value="term4">Ratanada</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                        <h4><i class="material-icons">account_circle</i>STUDENT DETAILS</h4> 
                                                    </div>
                                                </div>


                                                <div class="row">      
                                                    <!-- First Name --------------- -->
                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>First Name</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>    

                                                    <!-- Middle Name --------------- -->

                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Middle Name</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>

                                                    <!-- Last name --------------- -->

                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Last Name</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div> 
                                                </div>

                                                <span class="clearfix"></span>
                                                <div class="row">
                                                    <!-- admission sought --> 
                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Admission sought in</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">NR</option>
                                                                <option value="term2">KG</option>
                                                                <option value="term3">PR</option>
                                                                <option value="term4">I</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>

                                                    <!-- gender --> 
                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Gender</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">Male</option>
                                                                <option value="term2">Female</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Date of Birth</label>
                                                            <input type="date">
                                                        </md-input-container>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Category</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">General</option>
                                                                <option value="term2">OBC</option>
                                                                <option value="term3">SC</option>
                                                                <option value="term4">ST</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Religion</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">Hindu</option>
                                                                <option value="term2">Muslim</option>
                                                                <option value="term3">Sikh</option>
                                                                <option value="term4">Christian</option>
                                                            </select>
                                                        </md-input-container>

                                                    </div>

                                                    <div class="col-lg-4" >
                                                        <md-input-container class="md-block">
                                                            <label>Passport No</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!-------------------- Student Mobile primary------------------ -->

                                                    <div class="col-lg-4" >
                                                        <md-input-container class="md-block">
                                                            <label>Mobile (Primary)</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <md-input-container class="md-block">

                                                            <label>School Conveyance required ?</label>
                                                            <input type="text">
                                                            <small>If seeking school transport, enter nearest landmark</small>
                                                        </md-input-container>

                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-4">
                                                        <md-input-container class="md-block">
                                                            <label>Current School Name</label>
                                                            <input type="text">
                                                            <small>Leave empty if its child's First School</small>
                                                        </md-input-container>

                                                    </div>  

                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Current Class Attended</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">NR</option>
                                                                <option value="term2">KG</option>
                                                                <option value="term3">PR</option>
                                                                <option value="term4">I</option>
                                                            </select>
                                                        </md-input-container>

                                                    </div>

                                                    <div class="col-lg-4 ">   
                                                        <md-input-container class="md-block">
                                                            <label>Current Result</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">Promoted</option>
                                                                <option value="term2">Demoted</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 ">
                                                        <h5 style="background-color: #E0E0E0;padding: 7px; font-weight: 300">
                                                            <i class="material-icons">account_box</i>&nbsp;FATHER'S DETAILS</h5> 
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Firstname</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>    

                                                            <!-- Middle Name --------------- -->
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Middlename</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Lastname</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div> 
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Email</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class='row'>
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Mobile</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Landline</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>  
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Qualification</label>
                                                                    <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                        <option value="term1">Secondary</option>
                                                                        <option value="term2">Higher Secondary</option>
                                                                        <option value="term3">Graduate</option>
                                                                        <option value="term4">Post Graduate</option>
                                                                    </select>
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Occupation</label>
                                                                    <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                        <option value="term1">Business</option>
                                                                        <option value="term2">Government Service</option>
                                                                        <option value="term3">Service Men</option>
                                                                        <option value="term4">Private Service</option>
                                                                    </select>
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Business/Org. Name</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Designation</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Office No</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Office Address</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6" style="padding-left: 5px;">
                                                        <h5  style="background-color: #E0E0E0;padding: 7px; font-weight: 300"><i class="material-icons">account_box</i>
                                                            &nbsp;MOTHERS'S DETAILS</h5> 
                                                        <div class="row">
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Firstname</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>    

                                                            <!-- Middle Name --------------- -->

                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Middlename</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Lastname</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <md-input-container class="md-block">
                                                                    <label>Email</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6" >
                                                                <md-input-container class="md-block">
                                                                    <label>Mobile</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Phone</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>  
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Qualification</label>
                                                                    <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                        <option value="term1">Secondary</option>
                                                                        <option value="term2">Higher Secondary</option>
                                                                        <option value="term3">Graduate</option>
                                                                        <option value="term4">Post Graduate</option>
                                                                    </select>
                                                                </md-input-container>
                                                            </div>

                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Occupation</label>
                                                                    <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                        <option value="term1">Business</option>
                                                                        <option value="term2">Government Service</option>
                                                                        <option value="term3">Service Women</option>
                                                                        <option value="term4">Private Service</option>
                                                                    </select>
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Business/Org. Name</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Designation</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6 " >
                                                                <md-input-container class="md-block">
                                                                    <label>Office No</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                            <div class="col-lg-6 ">
                                                                <md-input-container class="md-block">
                                                                    <label>Office Address</label>
                                                                    <input type="text">
                                                                </md-input-container>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-lg-12' align='right'>
                                                        <button type="button" class="btn btn-warning" name="guardianinfo" 
                                                                id="guardianinfo" >
                                                            Add local guardian's details
                                                        </button>
                                                    </div>
                                                    <span class="clearfix">&nbsp;</span>
                                                </div>
                                                <span class="clearfix">&nbsp;<br></span>
                                                <div id="guardiandetails">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                            <h4><i class="material-icons">account_box</i>Guardian Details</h4>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 ">
                                                            <md-input-container class="md-block">
                                                                <label>Name</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>  

                                                        <div class="col-lg-3 ">
                                                            <md-input-container class="md-block">
                                                                <label>Phone</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>  

                                                        <div class="col-lg-3 ">
                                                            <md-input-container class="md-block">
                                                                <label>Mobile</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <md-input-container class="md-block">
                                                                <label>Address</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>  

                                                        <div class="col-lg-6">
                                                            <md-input-container class="md-block">
                                                                <label>Qualification</label>
                                                                <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                    <option value="term1">Secondary</option>
                                                                    <option value="term2">Higher Secondary</option>
                                                                    <option value="term3">Graduate</option>
                                                                    <option value="term4">Post Graduate</option>
                                                                </select>
                                                            </md-input-container>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                        <h4><i class="material-icons">home</i>CURRENT ADDRESS</h4>
                                                    </div> 
                                                </div>   

                                                <div class="row">
                                                    <div class="col-lg-6 ">
                                                        <md-input-container class="md-block">
                                                            <label>Current Address 1</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <md-input-container class="md-block">
                                                            <label>Current Address 2</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>  
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <md-input-container class="md-block">
                                                            <label>Current Suburb</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>  

                                                    <div class="col-lg-3">
                                                        <md-input-container class="md-block">
                                                            <label>Current Pincode</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <md-input-container class="md-block">
                                                            <label>Current City</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">Jodhpur</option>
                                                                <option value="term2">Jaipur</option>
                                                                <option value="term3">Ajmer</option>
                                                                <option value="term4">Bikaner</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>  

                                                    <div class="col-lg-2">
                                                        <md-input-container class="md-block">
                                                            <label>Current State</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">Rajasthan</option>
                                                                <option value="term2">Punjab</option>
                                                                <option value="term3">Haryana</option>
                                                                <option value="term4">Kolkata</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <md-input-container class="md-block">
                                                            <label>Current Country</label>
                                                            <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                <option value="term1">India</option>
                                                            </select>
                                                        </md-input-container>
                                                    </div>
                                                    <div class='col-lg-12' align='right'>
                                                        <button type="button" class="btn btn-warning" name="detailsmatch" id="detailsmatch" >
                                                            Different Permanent Address ?
                                                        </button>
                                                    </div>
                                                    <span class="clearfix">&nbsp;<br></span>
                                                </div>

                                                <span class="clearfix">&nbsp;<br></span>

                                                <div id="permaddrdetails">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                            <h4><i class="material-icons">home</i>PERMANENT ADDRESS</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 ">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent Address 1</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>

                                                        <div class="col-lg-6 ">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent Address 2</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>  
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent Suburb</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>  

                                                        <div class="col-lg-3">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent Pincode</label>
                                                                <input type="text">
                                                            </md-input-container>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent City</label>
                                                                <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                    <option value="term1">Jodhpur</option>
                                                                    <option value="term2">Jaipur</option>
                                                                    <option value="term3">Ajmer</option>
                                                                    <option value="term4">Bikaner</option>
                                                                </select>
                                                            </md-input-container>
                                                        </div>  

                                                        <div class="col-lg-2">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent State</label>
                                                                <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                    <option value="term1">Rajasthan</option>
                                                                    <option value="term2">Punjab</option>
                                                                    <option value="term3">Haryana</option>
                                                                    <option value="term4">Kolkata</option>
                                                                </select>
                                                            </md-input-container>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <md-input-container class="md-block">
                                                                <label>Permanent Country</label>
                                                                <select ui-select2 ng-model="ctrl.branch" placeholder="Preferred Branch" id="siblingbranch" >
                                                                    <option value="term1">India</option>
                                                                </select>
                                                            </md-input-container>
                                                        </div>
                                                    </div> 
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-subheading">
                                                        <h4><i class="material-icons">home</i> DETAILS OF TWO KNOWN CONTACTS (LOCAL)</h4>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <h5 class="text-primary" style="font-weight: 400;">Person one</h5>
                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Name</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>  

                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Contact No</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Address</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <h5 class="text-primary" style="font-weight: 400;">Person Two</h5>
                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Name</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>  

                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Contact No</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>

                                                    <div class="col-lg-4 ">
                                                        <md-input-container class="md-block">
                                                            <label>Address</label>
                                                            <input type="text">
                                                        </md-input-container>
                                                    </div>
                                                </div>



                                                <div class="col-lg-3 col-lg-offset-4">
                                                    <ul class="pager wizard no-margin">
                                                        <li class="previous disabled">
                                                            <a href="#" class="md-button md-raised md-default"> Previous </a>
                                                        </li>
                                                        <li class="next">
                                                            <a href="{{url('student_registration_review')}}" class="md-button md-raised md-primary md-ripple-visible"> Next </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

    </div>
    <!-- end widget -->

</article>
</div>
</div>
<br><br><br><br><br>
@endsection