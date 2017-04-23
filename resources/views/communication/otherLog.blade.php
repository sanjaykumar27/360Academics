@extends('layouts.app')
@section('content')

<style>
    .table > tbody > tr > td > a{
        color: #993d3d
    }
</style>
<br><br>
<div class="d-container">
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
                    <div class="panel-heading">
                        <i class="fa fa-hashtag md-title"></i> &nbsp;Enter new Log
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <md-input-container class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                    <label>Select Student</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.country" name="country" id="country" ng-change="getState(true)" required multiple="">
                                        <option ng-value="student.id">All Students </option>
                                        <option ng-value="student.id">S1001 | Sanjay Kumar | III-C </option>
                                        <option ng-value="student.id">S1050 | Rajesh Kumar | IV-C </option>
                                        <option ng-value="student.id">S1012 | Prateek Mathur | X-C </option>
                                    </select>
                                </md-input-container>
                            </div>

                            <div class="col-lg-4">
                                <md-input-container class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                    <label>Select Staff</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.country" name="country" id="country" ng-change="getState(true)" required multiple="">
                                        <option ng-value="teacher.id">All Teachers</option>
                                        <option ng-value="teacher.id">Sanjay Kumar</option>
                                        <option ng-value="teacher.id">Prateek Mathur</option>
                                        <option ng-value="teacher.id">Rahul Gupta</option>
                                    </select>
                                </md-input-container>
                            </div>
                            <div class="col-lg-4">
                                <md-input-container class="md-block" ng-class="(submitted && !frmcity.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                    <label>Select Tag</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.country" multiple="true" name="country" id="country" required>
                                        <option value="1">#Notice</option>
                                        <option value="2">#Behavior</option>
                                        <option value="3">#Academics</option>
                                        <option value="4">#Complain</option>
                                    </select>
                                </md-input-container>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-2" ng-controller="otherLog">
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

                            <div class="col-lg-9" >
                                <md-input-container class="md-block">
                                    <label>Enter Remark / Message</label>
                                    <textarea ng-model="user.remark"  md-maxlength="150" rows="3" md-select-on-focus></textarea>
                                </md-input-container>
                            </div>

                            <div class="col-lg-1">
                                <md-input-container class="md-block">
                                    <i class="fa fa-clipboard md-title">
                                        <md-tooltip md-direction="top">Attach File</md-tooltip>
                                    </i>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-image md-title">
                                        <md-tooltip md-direction="top">Attach Image</md-tooltip>
                                    </i>
                                </md-input-container>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-6 ">
                                <md-button class="md-raised md-default">Cancel</md-button>
                                &nbsp;&nbsp;<md-button class="md-raised md-primary">Submit</md-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-primary md-caption"  style="height: 500px;overflow-y: scroll">
                    <div class="panel-heading">All Threads</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr class="info">
                                <td>Channels [5]
                                    <span style="float: right"><i class="fa fa-plus-square-o md-title">
                                            <md-tooltip md-direction="up">Add New Channel</md-tooltip>
                                        </i></span>
                                </td>
                            </tr>
                            <tr>
                                <td ><a href="" >#Success</a></td>
                            </tr>
                            <tr>
                                <td ><a href="">#Notice</a></td>
                            </tr>
                            <tr>
                                <td ><a href="">#Misbehave</a></td>
                            </tr>
                            <tr>
                                <td ><a href="">#Sports</a></td>
                            </tr>
                            <tr>
                                <td ><a href="">#Announcements</a></td>
                            </tr>


                            <tr class="info">
                                <td >Broadcast Message
                                    <span ><i style="float: right" class="fa fa-plus-square-o md-title">
                                            <md-tooltip md-direction="up">New Broadcast</md-tooltip>
                                        </i></span></td>
                            </tr>
                            <tr>
                                <td><a href="">Director</a></td>
                            </tr>
                            <tr>
                                <td><a href="">All Students</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Front Office</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Teacher</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Account Department</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="panel panel-primary " ng-controller="timeline" >
                    <div class="panel-heading">All Threads <label class="label-default">
                            <i class="fa fa-hashtag md-title"></i>allstudents</label>

                    </div>
                    <div class="panel-body"  style="height: 450px;overflow-y: scroll">
                        <table class="table table-condensed table-striped" style="padding: 2px;">
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
                        </table>
                    </div>
                </div></div>
        </div> 
        <md-button class="md-raised md-primary">Show All Logs</md-button>
    </div>
</div>
<br><br><br><br><br><br>
@endsection