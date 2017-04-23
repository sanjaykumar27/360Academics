@extends('layouts.app')
@section('content')
<br>

<div class="container-d" ng-controller="timetablemaster" ng-cloak>
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Select Class & Section</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3" >
                            <md-input-container class="md-block">
                                <label>Class</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetable_class"   required >
                                    <option ng-value="class.id">I</option>
                                    <option ng-value="class.id">II</option>
                                    <option ng-value="class.id">III</option>
                                    <option ng-value="class.id">IV</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3" >
                            <md-input-container class="md-block">
                                <label>Section</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetable_section"   required >
                                    <option ng-value="section.id">A</option>
                                    <option ng-value="section.id">B</option>
                                    <option ng-value="section.id">C</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3" >
                            <md-input-container class="md-block">
                                <label>Name</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetable_name"   required >
                                    <option ng-value="season.id">Summer</option>
                                    <option ng-value="season.id">Winter</option>
                                    <option ng-value="season.id">Winter Temp</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block">
                                <span class="clearfix">&nbsp;</span>
                                <span class="clearfix">&nbsp;</span>
                                <md-button  data-toggle="modal" data-target="#myModal" class="md-raised md-primary">Set Weekdays</md-button>
                            </md-input-container>
                        </div>
                        <form  method="post" name="frmstate" id="frmstate" ng-submit="savedays(frmstate.$valid)"  novalidate="novalidate" >
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">Select working days</div>
                                                <div class="panel-body">
                                                    <table class="table">
                                                        <tr>
                                                            <td class="md-title">Weekdays</td>
                                                        </tr>
                                                        <tr>
                                                            <td><br>
                                                                <fieldset class="standard" >
                                                                    <div layout="row" layout-wrap flex>
                                                                        <div flex="50" ng-repeat="item in weekdays">
                                                                            <md-checkbox md-no-ink ng-model="singledata.item"
                                                                                         ng-checked="selection.indexOf(item) > -1"
                                                                                         ng-click="toggleSelection(item)">
                                                                                @{{ item}} 
                                                                            </md-checkbox>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="md-body-1">Selected Days: @{{selection}}</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <md-button class='md-raised md-default'  data-dismiss='modal'>Close</md-button>
                                            <input class="md-button md-raised md-primary" type="submit" data-dismiss='modal' value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">Create Timetable</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th class="h5">Days</th>
                        </tr>
                        <tr ng-repeat="days in selection">
                            <td>@{{days}}
                                <br><a href="" data-toggle="modal" data-target="#subjecttime">Assign</a>
                                <div id="subjecttime" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">Select Period Timing for @{{days}}</div>
                                                    <div class="panel-body">
                                                        <table class="table">
                                                            <tr class="h5">
                                                                <th>Name</th>
                                                                <th>Start Time</th>
                                                                <th>End Time</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            <tr>
                                                                <td col-lg-10>
                                                            <md-input-container class="md-block md-select_box" ng-class="(submitted && !frm.frequency.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                                                <md-select  placeholder="Period" ng-model="singledata.periodname" name="component" id="component" required >
                                                                    <md-option>I</md-option>
                                                                    <md-option>II</md-option>
                                                                    <md-option>III</md-option>
                                                                    <md-option>IV</md-option>
                                                                    <md-option>Break</md-option>
                                                                    <md-option>V</md-option>
                                                                    <md-option>VI</md-option>
                                                                    <md-option>VII</md-option>
                                                                    <md-option>VIII</md-option>
                                                                </md-select>
                                                            </md-input-container>
                                                            </td>
                                                            <td><label><br></label>
                                                            <md-input-container>
                                                                <label>Time</label>
                                                                <input type="time" ng-click="ctrl.showTimePicker($event)" ng-model="currentDate" />
                                                            </md-input-container>
                                                            </td>
                                                            @{{singledata.currentTime}}
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <md-button class='md-raised md-default'  data-dismiss='modal'>Close</md-button>
                                                <input class="md-button md-raised md-primary" type="submit" data-dismiss='modal' value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div><br><br><br>
@endsection
