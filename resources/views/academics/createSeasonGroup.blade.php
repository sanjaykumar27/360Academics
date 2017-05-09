@extends('layouts.app')
@section('content')

<br>

<div class="d-container" ng-controller="seasongroup" ng-cloak>

    <div class="container" >
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-searchbar" ng-show="showme"> 
                        <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Timetable">
                            <i class="material-icons">keyboard_backspace</i>
                            <md-tooltip md-visible="demo.back" md-direction="demo.back">
                                Back
                            </md-tooltip>
                        </button> 
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Search timetable...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Timetable Name</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search timetable
                            </md-tooltip>
                        </button>&nbsp; 
                        <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                            <i class="material-icons">add</i>
                            <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                Add New Record
                            </md-tooltip>
                        </md-button>
                    </div>
                </md-toolbar>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  table-striped d-table_check ">
                            <thead>
                                <tr class="info">
                                    <th>S.no</th>
                                    <th>Timetable Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Summer</td>
                                <td>01-07-2017</td>
                                <td>30-09-2017</td>
                                <td>Summer Season</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Winter</td>
                                <td>01-10-2017</td>
                                <td>30-02-2018</td>
                                <td>Winter Season</td>
                                <td></td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog" style="max-width: 80%">
            <div class="modal-content"> 
                <div class="modal-body clearfix">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Create Timetable Name</div>
                        <div class="panel-body">
                            <div class="row" ng-repeat="data in singledata.add">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                                    <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.season.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                        <label>Select Season</label>
                                        <md-select placeholder="Seasons" ng-model="ctrl.seasonid" name="seasonid" id="seasonid" required>
                                            <md-option >Summer</md-option>
                                            <md-option >Winter</md-option>
                                            <md-option style="color: #3c6df0" ng-click="openWindow()">Add New Season</md-option>
                                        </md-select>
                                    </md-input-container>
                                </div>
                                <style> 
                                    .md-datepicker-calendar-pane{
                                        z-index: 1200}
                                    </style>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2" >
                                    <span><br></span>
                                    <md-datepicker name="dob" ng-model="data.datefrom"  md-placeholder="Date from" md-min-date="minDate" 
                                                   md-max-date="maxDate" required>
                                    </md-datepicker>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                                    <span><br></span>
                                    <md-datepicker name="dob" ng-model="data.dateto"  md-placeholder="Date to" md-min-date="minDate" 
                                                   md-max-date="maxDate" required>
                                    </md-datepicker>
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                        <label>Remarks</label>
                                        <input  type="text" id="remarks" ng-model="newctrl.remarks"  name="remarks" required>
                                    </md-input-container>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index == 0" >
                                        <i class="material-icons">add</i>
                                        <md-tooltip md-visible="demo.add_row" md-direction="" >
                                            Add Row
                                        </md-tooltip>
                                    </md-button>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1" ng-if="formtype == 'Add'">
                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="removeplus($index)" ng-show="$index != 0">
                                        <i class="material-icons">remove</i>
                                        <md-tooltip md-visible="demo.remove_row" md-direction="" >
                                            Remove Row
                                        </md-tooltip>
                                    </md-button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-5"> 
                                <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                                <md-button class="md-raised md-primary">Save</md-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div></div>

<br><br><br>
<br><br><br><br><br><br>

@endsection
