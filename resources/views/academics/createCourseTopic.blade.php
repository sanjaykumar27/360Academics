@extends('layouts.app')
@section('content')
<br>

<div class="container-d" >
    <div class="container" ng-controller="examination">
        <div class="col-lg-3">
            <div class=" panel panel-primary">
                <div class="panel-heading">Search Course Structure </div>
                <div class="panel-body">
                    <div class="col-lg-12">
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
                    <div class="col-lg-12">
                        <md-input-container class="md-block">
                            <label>Subject</label>&nbsp;
                            <select ui-select2 ng-model="singledata.timetable_name"   required >
                                <option ng-value="season.id">English</option>
                                <option ng-value="season.id">Hindi</option>
                                <option ng-value="season.id">Maths</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class="col-lg-12">
                        <md-input-container class="md-block">
                            <label>Unit Name</label>&nbsp;
                            <select ui-select2 ng-model="singledata.unit_name"   required >
                                <option ng-value="season.id">Number Systems</option>
                                <option ng-value="season.id">Algebra</option>
                                <option ng-value="season.id">Geometry</option>
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
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-searchbar" ng-show="showme"> 
                        <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Course">
                            <i class="material-icons">keyboard_backspace</i>
                            <md-tooltip md-visible="demo.back" md-direction="demo.back">
                                Back
                            </md-tooltip>
                        </button> 
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Search Course...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Course Structure</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search Course
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
                    <h5 align="center">Mathematics Class XI</h5>
                    <span  class="h4" style="float: left">Unit: Geometry</span><span   style="float:  right" class="h4" align="Center">Marks: 14</span>
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 120px;">Chapter No</td>
                            <td>Chapter Name</td>
                            <td>Periods</td>
                        </tr>
                        <tr class='info'>
                            <td>4.</td>
                            <td ng-click="showTopics = !showTopics">Lines and Angles
                                <span  style="float: right">
                                    <i style="float: right" class='fa fa-angle-double-up'></i>
                                    <i style="float: right"class='fa fa-angle-double-down'></i>
                                </span></td>
                            <td>13</td>
                        </tr>

                        <tr ng-show="showTopics">
                            <td>i</td>
                            <td colspan="2">(Motivate) If a ray stands on a line, then the sum of the two adjacent angles so
                                formed is 180O and the converse.</td>
                        </tr>
                        <tr ng-show="showTopics">
                            <td>ii</td>
                            <td colspan="2" >(Prove) If two lines intersect, vertically opposite angles are equal.</td>
                        </tr>
                        <tr ng-show="showTopics">
                            <td>iii</td>
                            <td colspan="2">(Motivate) Lines which are parallel to a given line are parallel.</td>
                        </tr>
                        <tr ng-show="showTopics">
                            <td>iv</td>
                            <td colspan="3">(Prove) The sum of the angles of a triangle is 180O.</td>
                        </tr>
                        <tr class='info'>
                            <td>5.</td>
                            <td ng-click="showTopic = !showTopic">Quadilaterals
                                <span  style="float: right">
                                    <i style="float: right" class='fa fa-angle-double-up'></i>
                                    <i style="float: right"class='fa fa-angle-double-down'></i>
                                </span></td>
                            <td>10</td>
                        </tr>

                        <tr ng-show="showTopic">
                            <td>i</td>
                            <td colspan="2">(Prove) The diagonal divides a parallelogram into two congruent triangles.</td>
                        </tr>
                        <tr ng-show="showTopic">
                            <td>ii</td>
                            <td colspan="2" >(Motivate) In a parallelogram opposite sides are equal, and conversely.</td>
                        </tr>
                        <tr ng-show="showTopic">
                            <td>iii</td>
                            <td colspan="2">(Motivate) In a parallelogram, the diagonals bisect each other and conversely.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" ng-controller="examination" >
        <div class="modal-dialog" style="max-width: 90%">
            <div class="modal-content"> 
                <div class="modal-body">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">Create Term Exam Association</div>
                        <div class="panel-body md-caption" >
                            <div class="row">
                                <div class="col-lg-4">
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
                                <div class="col-lg-4">
                                    <md-input-container class="md-block">
                                        <label>Subject</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.timetable_name"   required >
                                            <option ng-value="season.id">English</option>
                                            <option ng-value="season.id">Hindi</option>
                                            <option ng-value="season.id">Maths</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-4">
                                    <md-input-container class="md-block">
                                        <label>Unit Name</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.timetable_name"   required >
                                            <option ng-value="season.id">Geometry</option>
                                            <option ng-value="season.id">Algebra</option>
                                            <option ng-value="season.id">Polynomials</option>
                                        </select>
                                    </md-input-container>
                                </div>
                            </div>
                            <div class="row" class="row" ng-repeat="data in ctrl.add">
                                <div class="col-lg-2">
                                    <md-input-container class="md-block">
                                        <label>Chapter</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.timetable_name"   required >
                                            <option ng-value="season.id">Lines and Angles</option>
                                            <option ng-value="season.id">Quadilaterals</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <style> 
                                    .md-datepicker-calendar-pane{
                                        z-index: 1200}
                                    </style>
                                    <div class="col-lg-3">
                                        <span><br><br><br></span>
                                    <md-datepicker class="md-caption" name="dob" ng-model="data.start_date"  md-placeholder="Date from" md-min-date="minDate" 
                                                   md-max-date="maxDate" required>
                                    </md-datepicker>
                                </div>
                                <div class="col-lg-3">
                                    <span><br><br><br></span>
                                    <md-datepicker name="dob" ng-model="data.end_date"  md-placeholder="Date from" md-min-date="minDate" 
                                                   md-max-date="maxDate" required>
                                    </md-datepicker>
                                </div>&nbsp;&nbsp;&nbsp;
                                <div class="col-lg-3">
                                    <span class="clearfix">&nbsp;<br><br></span>
                                    <md-chips  ng-model="ctrl.topics"  md-transform-chip="transform($chip)" >
                                        <md-autocomplete
                                            md-selected-item="selectedItem"
                                            md-search-text="searchText"
                                            md-items="item in ctrl.newTopics"
                                            md-item-text="item"
                                            placeholder="Topics"></md-autocomplete>
                                        <md-chip-template class="md-caption">
                                            @{{$chip.topics}}&nbsp;&nbsp;&nbsp;&nbsp; 
                                        </md-chip-template>
                                    </md-chips>
                                </div>

                                <div class="col-lg-1">
                                    <span class="clearfix">&nbsp;<br><br></span>
                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index == 0" >
                                        <i class="material-icons">add</i>
                                        <md-tooltip md-visible="demo.add_row" md-direction="" >
                                            Add Row
                                        </md-tooltip>
                                    </md-button>
                                </div>

                                <div class="col-lg-1">
                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="removeplus($index)" ng-show="$index != 0">
                                        <i class="material-icons">remove</i>
                                        <md-tooltip md-visible="demo.remove_row" md-direction="" >
                                            Remove Row
                                        </md-tooltip>
                                    </md-button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <md-button class="md-raised md-default">Cancel</md-button>
                                    <input type="submit" class="md-button md-raised md-primary" value="Submit">
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
<br><br><br>
@endsection