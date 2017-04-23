@extends('layouts.app')
@section('content')
<br><br> 

<div class="container-d" ng-controller="appointment">
    <div class="container">
        
        <div class="row col-md-offset-2">
            <a href="" class="col-lg-3 md-button md-raised md-primary">Show Phone Log</a>
            <a href="" class="col-lg-3 md-button md-raised md-primary">Show Other Log</a>
            <a href="" class="col-lg-3 md-button md-raised md-primary">Show Appointments</a>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Appointment Form</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4" >
                                <md-input-container class="md-block">
                                    <label>Created By</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.country" name="country" id="country" ng-change="getState(true)" required >
                                        <option ng-value="student.id">Neeraj [Teacher]</option>
                                        <option ng-value="student.id">Vikash Sharma [Teacher]</option>
                                        <option ng-value="student.id">Rahul Gupta [Principle]</option>
                                        <option ng-value="student.id">Abhishek [Admin]</option>
                                    </select>
                                </md-input-container>
                            </div>

                            <div class="col-lg-4">
                                <md-input-container class="md-block">
                                    <label>Created For</label>&nbsp;
                                    <select ui-select2 ng-model="ctrl.usertype"  name="User" ng-change="getState(true)" required >
                                        <option ng-value="parent">Parent</option>
                                        <option ng-value="staff">Staff</option>
                                    </select>
                                </md-input-container>
                            </div>

                            <div class="col-lg-4" >
                                <md-input-container class="md-block"  id="inputparent">
                                    <label>Select Parent</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.country" name="country" id="country" ng-change="getState(true)" required >
                                        <option ng-value="1" >Sunil | Abhishek | S1000</option>
                                        <option ng-value="2">Akhilesh | Anuj | S1022</option>
                                        <option ng-value="3"> Other | not listed</option>
                                    </select>
                                </md-input-container>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <md-input-container class="md-block">
                                    <label>Subject</label>
                                    <textarea type="text" md-maxlength="50"  rows="3" md-select-on-focus ng-model="user.subject"></textarea>
                                </md-input-container>
                            </div>
                            <div class="col-lg-3 md-block">&nbsp;<br>
                                <md-datepicker name="Date" ng-model="myDate"  md-placeholder="Date*" md-min-date="minDate" 
                                               md-max-date="maxDate" required>
                                </md-datepicker>
                            </div>
                            <div class="col-lg-3">
                                <md-input-container class="md-block"> 
                                    <input type="text" placeholder="Time">
                                </md-input-container>
                            </div>
                        </div>
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
        </div>
    </div>
</div>
</div>
@endsection


