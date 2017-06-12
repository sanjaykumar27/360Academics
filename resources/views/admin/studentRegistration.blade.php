@extends('layouts.app')
@section('content')
<br><br>
<div class="container-d" >
    <div class="container" ng-controller="examination">
        <md-toolbar class="d-listing_toolbar">
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Student Registration List</span> 
            </div>
        </md-toolbar>
        <div class="clearfix row">
            <div class="col-lg-3 d-search_side">
                <div class=" panel panel-default ">
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <span class="clearfix">&nbsp;</span>
                            <md-datepicker style="background: transparent;" ng-model="ctrl.datefr"  md-placeholder="Date From"  required>
                            </md-datepicker>
                        </div>
                        <div class="col-lg-12">
                            <span class="clearfix">&nbsp;</span>
                            <md-datepicker style="background: transparent;" ng-model="ctrl.datefrom"  md-placeholder="Date To" required>
                            </md-datepicker>
                        </div>
                        <div class="col-lg-12">
                            <md-input-container class="md-block">
                                <label>Class:</label>&nbsp;
                                <select ui-select2 ng-model="">
                                    <option>I</option>
                                    <option>II</option>
                                    <option>III</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12">
                            <md-input-container class="md-block">
                                <label>Status:</label>&nbsp;
                                <select ui-select2 ng-model="">
                                    <option>Pending</option>
                                    <option>Selected</option>
                                    <option>Rejected</option>
                                </select>
                            </md-input-container>
                        </div>

                        <div class="col-lg-12"> 
                            <md-input-container class="md-block">
                                <md-button   class="md-raised md-primary">Search</md-button>
                            </md-input-container>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="13%"><span ng-hide="showCheck">S.no</span>
                    <md-checkbox ng-show="showCheck" aria-label="Select All" style="margin-bottom: 0px;"
                                                 ng-checked="isChecked()"
                                                 md-indeterminate="isIndeterminate()"
                                                 ng-click="toggleAll()"/>
                        <span ng-if="isChecked()">Un-</span>Select All
                    </md-checkbox</th>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th width="11%">Class Opted</th>
                    <th width="12%">Date</th>
                    <th width="12%">Status</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr ng-repeat="items in display">
                            <td >
                                <div layout="row" layout-wrap flex >
                                   
                                    <div  class="demo-select-all-checkboxes" flex="100" >
                                         @{{ items}} &nbsp;
                                        <md-checkbox ng-show="showCheck" ng-checked="exists(items, selected)" ng-click="toggle(items, selected)">

                                        </md-checkbox>
                                    </div>
                                </div>
                            </td>
                            <td>Ankit Goyal</td>
                            <td>Abcd</td>
                            <td>III</td>
                            <td>01/06/2017</td>
                            <td>
                                <span class="label label-primary" style="padding: 6px;"> Pending </span>
                            </td>
                            <td>
                                <span><a data-toggle="modal" data-target="#myModal" href=""><i class="fa fa-envelope" style="font-size: 21px;color: #0066cc;"></i></a></span>&nbsp;&nbsp;
                                <span><a  href="{{url('student_profile')}}"><i class="fa fa-check-circle" style="font-size: 24px;color: #339900;"></i></a></span>&nbsp;&nbsp;
                                <span><a data-toggle="modal" data-target="#myModalreject" href=""><i class="fa fa-exclamation-circle" style="font-size: 24px;color: #cc0000;"></i></a></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-lg-12  col-lg-offset-8">
                    <md-button data-toggle="modal" data-target="#myModal" class="md-raised md-primary">
                        <i class="fa fa-envelope"></i>&nbsp;Send Mail
                    </md-button>&nbsp;
                    <md-button class="md-raised md-primary" ng-click="showCheck = !showCheck">Select Multiple</md-button>
                </div>
                <!----------------------- Model for Sending Email -------------------->
                <div class="modal fade" id="myModal" ng-controller="examination">
                    <div class="modal-dialog" style="max-width: 80%">
                        <div class="modal-content"> 
                            <div class="modal-body clearfix">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Send Mail</div>
                                    <div class="panel-body">
                                        
                                        <div class="row">
                                            <div class='col-lg-6'>
                                                <md-input-container class="md-block">
                                                    <label>Email:</label>
                                                    <input type="text" value="abcd@gmail.com, test1@gmail.com, Test2@gmail.com and 15 More">
                                                </md-input-container>
                                            </div>
                                            <div class='col-lg-6'>
                                                <md-input-container class="md-block">
                                                    <label>BCC:</label>
                                                    <input type="text">
                                                </md-input-container>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <md-input-container class="md-block" style="margin-top: 10px;">
                                                    <label>Enter Subject:</label>
                                                    <input type="text" value="Schedule for Enterance Examination">
                                                </md-input-container>
                                            </div>
                                            <div class="col-lg-2">
                                                <a ng-click="showSyllabus = !showSyllabus" href="" class="md-button md-raised md-primary">Attach Syllabus</a>
                                            </div>
                                        </div>
                                        <div class="row" ng-show="showSyllabus">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
                                                    <tr class="info">
                                                        <td colspan="2">Syllabus for Class II Exam Enterance Test</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subject</td>
                                                        <td>Chapters</td>
                                                    </tr>
                                                    <tr>
                                                        <td>English</td><td>Nouns, Adverbs, Tense</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mathematics</td><td>Lines and Angles, Polynomials, Statistics</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <md-input-container class="md-block">
                                                    <label>Remark</label>
                                                    <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
                                                </md-input-container>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="file"> 

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12" align="center">
                                            <md-button class="md-raised md-default">Cancel</md-button>
                                            <input type="submit" class="md-button md-raised md-primary" value="Send">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>


                <!-------------------- Model to Approve Student -------------------->
                <div class="modal fade" id="myModalreject" ng-controller="examination">
                    <div class="modal-dialog" style="max-width: 80%">
                        <div class="modal-content"> 
                            <div class="modal-body clearfix">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Approve Student Admission</div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><strong>Sanjay Kumar Chaurasia</strong></td>
                                                    <td>Father's Name</td>
                                                    <td><strong>Ram Murat Chaurasia</strong></td>
                                                    <td>Class Opted</td>
                                                    <td><strong>II</strong></td>
                                                    <td>Previous School</td>
                                                    <td><strong>St. Pauls</strong></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <md-input-container class="md-block">
                                                    <label>Remark</label>
                                                    <textarea ng-model="user.biography" md-maxlength="150" rows="5" md-select-on-focus></textarea>
                                                </md-input-container>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="file"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12" align="center">
                                            <md-button class="md-raised md-default">Cancel</md-button>
                                            <input type="submit" class="md-button md-raised md-primary" value="Reject Admission">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
@endsection
