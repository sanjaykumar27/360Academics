@extends('layouts.app')
@section('content')
<br><br>
<style>
    md-input-container{
        margin: 9px 0;
    }
</style>
<div class="container-d" ng-controller="phoneLog">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading md-title">
                        <i class="material-icons md-title">call</i> &nbsp;Phone Log
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <md-input-container class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <label>Select Parent</label>&nbsp;
                                        <select  ng-click="showInput()" ui-select2 ng-model="ctrl.parent" name="country" id="country"  required >
                                            <option ng-value="1" >Sunil | Abhishek | S1000</option>
                                            <option ng-value="2">Akhilesh | Anuj | S1022</option>
                                            <option ng-value="3"> Other | not listed</option>
                                        </select>
                                    </md-input-container>
                                    <md-input-container id="inputother" style="display: none" class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <label>Enter Name</label>&nbsp;
                                        <input type="text">
                                    </md-input-container>
                                </div>

                                <div class="col-lg-5">
                                    <md-input-container class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <label>Select staff</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.country" name="country" id="country" ng-change="getState(true)" required >
                                            <option ng-value="student.id">Neeraj [Teacher]</option>
                                            <option ng-value="student.id">Vikash Sharma [Teacher]</option>
                                            <option ng-value="student.id">Rahul Gupta [Principle]</option>
                                            <option ng-value="student.id">Abhishek [Admin]</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-2">
                                    <md-input-container class="md-block" ><br>
                                        <md-radio-group ng-model="data.group1">
                                            <md-radio-button value="Caller"  class="md-primary" checked > 
                                                Caller
                                            </md-radio-button>
                                            <md-radio-button value="Receiver">
                                                Receiver
                                            </md-radio-button>
                                        </md-radio-group>
                                    </md-input-container>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <md-input-container class="md-block" > 
                                        <input type="text" placeholder="Contact No">
                                    </md-input-container> 
                                </div>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block"> 
                                        <input type="text" placeholder="Time">
                                    </md-input-container> 
                                </div>
                                <div class="col-lg-3">&nbsp;
                                    <md-datepicker name="Date" ng-model="myDate"  md-placeholder="Date*" md-min-date="minDate" 
                                                   md-max-date="maxDate" required>
                                    </md-datepicker>
                                </div>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block">
                                        <md-select placeholder="Rating " ng-model="ctrl.rating"  name="country" id="country"  required >
                                            <md-option ng-value="1">1</md-option>
                                            <md-option ng-value="2">2</md-option>
                                            <md-option ng-value="3">3</md-option>
                                            <md-option ng-value="2">4</md-option>
                                            <md-option ng-value="3">5</md-option>
                                        </md-select>
                                    </md-input-container>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <md-input-container class="md-block" > 
                                        <textarea type="text" placeholder="Subject" md-maxlength="50"  rows="3" md-select-on-focus ng-model="user.subject"></textarea>
                                    </md-input-container> 
                                </div>
                                <div class="col-lg-4">
                                    <md-input-container class="md-block" > 
                                        <md-select ng-model="Everyone" multiple placeholder="Privacy" class="md-no-underline">
                                            <md-option value="Everyone" selected>
                                                <i class="material-icons md-body-1">public</i> Everyone
                                            </md-option>
                                            <md-option value="staff">
                                                <i class="material-icons md-body-1">people</i> Staff
                                            </md-option>
                                            <md-option value="Student">
                                                <i class="material-icons md-body-1">lock</i> Student
                                            </md-option>
                                            <md-option value="Directors">
                                                <i class="material-icons md-body-1">verified_user</i> Directors
                                            </md-option>
                                        </md-select>
                                    </md-input-container> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <md-input-container class="md-block" > 
                                        <textarea type="text" placeholder="Remarks" md-maxlength="150"  rows="3" md-select-on-focus ng-model="user.remark"></textarea>
                                    </md-input-container> 
                                </div>
                            </div>

                            <div class="row">

                            </div><br>

                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-6" >
                                    <md-button class="md-raised md-default">Cancel</md-button>&nbsp;&nbsp;
                                    <input  type="submit" class="md-button md-raised md-primary" name="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--   <div class="col-lg-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="material-icons md-subhead">call</i>
                                Phone Log</div>
                            <div class="panel-body">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                    <th>S.no</th>
                                    <th>Dialer</th>
                                    <th>Spoken to</th>
                                    <th>Subject</th>
                                    <th>Case</th>
                                    <th>More</th>
                                    </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>Vikash Sharma [Teacher]</td>
                                        <td>Mr. Rajesh [Principle]</td>
                                        <td>Short Attendance </td>
                                        <td>Closed</td>
                                        <td>
                                    <md-button ng-click="showModal()" class="md-icon-button md-accent" aria-label="Favorite">
                                        <i class="fa fa-desktop md-title">
                                            <md-tooltip md-direction="bottom">Show Thread</md-tooltip>
                                        </i>
                                    </md-button>
                                    </td>
        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ravi Kumar[Teacher]</td>
                                        <td>Mr. Rajesh [Father]</td>
                                        <td>Bad Behavior in class </td>
                                        <td>Open</td>
                                        <td> <md-button ng-click="showModal()" class="md-icon-button md-accent" aria-label="Favorite">
                                        <i class="fa fa-desktop md-title">
                                            <md-tooltip md-direction="bottom">Show Thread</md-tooltip>
                                        </i>
        
                                    </md-button>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>-->

            </div>

            <div class="modal fade" id="modal-id">
                <div class="modal-dialog" style="max-width: 80%">
                    <div class="modal-content"> 
                        <div class="modal-body clearfix">
                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title d-no_padding">Phone Log [ID: 406]</h3> 
                                </div> 
                            </div>
                            <div class="clearfix well">

                                <table class="table table-striped md-caption" style="text-align: center">
                                    <tr>
                                        <td>Dialer</td>
                                        <td>Contact No</td>
                                        <td>Spoken To</td>
                                        <td>Remark</td>
                                        <td>Date / Time</td>
                                        <td>Rating</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h5">Vikash Sharma <br><span class="md-caption">[ Admin ]</span></p>
                                        </td>
                                        <td>9876543210</td>
                                        <td>Ramesh Sharma</td>
                                        <td width='420' align='justify' style="padding: 10px; color: #9c4019">
                                            Student was caught misbehaving in class, issue has been discussed with parents 
                                            and they are called for meeting with principle.
                                        </td>
                                        <td><strong>02-12-2017 11:45 AM</strong></td>
                                        <td>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="h5">Ashok Tiwari <br><span class="md-caption">[ Principle ]</span></p>
                                        </td>
                                        <td>9876543210</td>
                                        <td>Ramesh Sharma</td>
                                        <td width='420' align='justify' style="padding: 10px; color: #9c4019">
                                            Student was caught misbehaving in class, issue has been discussed with parents 
                                            and they are called for meeting with principle.
                                        </td>
                                        <td><strong>03-12-2017 11:45 AM</strong></td>
                                        <td>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                            <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        </td>
                                    </tr>
                                </table>

                                <!-------------- Enter New Log Form -------------------------->

                                <hr>
                                <span class='md-title'>Enter new log</span>
                                <div class='row'>
                                    <div class='col-lg-3'>
                                        <md-input-container>
                                            <label>User Name</label>
                                            <input ng-model="user.username" value="sanjay Kumar"  type="text">
                                        </md-input-container>
                                    </div>
                                    <div class='col-lg-4'>
                                        <md-input-container>
                                            <label>Remarks</label>
                                            <input ng-model="user.remarks" type="text">
                                        </md-input-container>
                                    </div>
                                    <div class='col-lg-3'>
                                        <md-input-container>
                                            <label>Date</label>
                                            <input type='date' >
                                        </md-input-container>
                                    </div>
                                    <div class='col-lg-2'>
                                        <md-input-container >
                                            <md-select ng-model="rating" placeholder='Rating*'>
                                                <md-option>1</md-option>
                                                <md-option>2</md-option>
                                                <md-option>3</md-option>
                                                <md-option>4</md-option>
                                                <md-option>5</md-option>
                                            </md-select>
                                        </md-input-container>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" >
                                        <md-button class="md-raised md-button">Cancel</md-button>
                                        &nbsp;&nbsp;<input  class="md-button md-raised md-primary" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <!-- -------------------- Phone Log Model Ends------------------------------->
            </div>

        </div>
    </div>
    <br><br><br><br>
    @endsection