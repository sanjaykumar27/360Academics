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
                            <span ><br><br></span>
                            <md-input-container class="md-block">
                                <md-button  data-toggle="modal" data-target="#myModal" class="md-raised md-primary">Set Weekdays</md-button>
                                &nbsp;<md-button data-toggle="modal" data-target="#subjectteacher" class="md-raised md-primary">Set Teacher</md-button>
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
                    <table class="table table-bordered md-caption">
                        <tr>
                            <td>Period / Day</td>
                            <td ng-repeat="days in selection">@{{days}}
                                <br><a href="" data-toggle="modal" data-target="#subjecttime">Assign</a></td>
                        </tr>
                        <tr ng-repeat="row in repeatData">
                            <td>@{{row.period}}
                                <br>@{{row.starttime}} - @{{row.endtime}}<br>
                            </td>
                            <td >
                                <select ui-select2 ng-model="singledata.subject" required >
                                    <option value="">Select Subject</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                </select><br><br>
                                Teacher: 
                            </td>
                        </tr>
                    </table>
                    <div>
                        <input type="submit" style="float: right" class="md-button md-raised md-primary" name="Submit" value="Save Timetable">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="subjecttime" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Select Period Timing</div>
                        <div class="panel-body">
                            <form post="method" name="frm" id="frm" ng-submit="savePeriod(frm.$valid)" novalidate="novalidate">
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
                                    <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#timepicker1').timepicker();
                                                    $('#timepicker2').timepicker();
                                                });
                                    </script>
                                    <td>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker1" ng-model="singledata.startTime" type="text" class="form-control input-small">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker2" ng-model="singledata.endTime" type="text" class="form-control input-small">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                    <md-button class="md-raised  md-primary"  ng-click="addRow()"  >Add Period</md-button>
                                    </td>

                                    </tr>

                                    <tr ng-repeat="row in repeatData" >
                                        <td id="periodname">@{{row.period}}</td>
                                        <td id="startTime" >@{{row.starttime}}</td >
                                        <td id="endTime" >@{{row.endtime}}</td>
                                        <td><i class="fa fa-remove md-title" ng-click="removeRow($index)"></i></td>
                                    </tr>
                                </table>
                            </form>
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

    <div id="subjectteacher" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Select Subject Teacher</div>
                        <div class="panel-body">
                            <table class="table">
                                <tr class="info">
                                    <td>Subject</td>
                                    <td>Teacher Name</td>
                                    <td>Substitute Teacher</td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
                                    </td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hindi</td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
                                    </td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maths</td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
                                    </td>
                                    <td><select ui-select2 ng-model="singledata.subject" required >
                                            <option value="">Select Teacher</option>
                                            <option>Sanjay Kumar</option>
                                            <option>Prateek Mathur</option>
                                        </select>
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
</div><br><br><br>
@endsection
