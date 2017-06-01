@extends('layouts.app')
@section('content')
<br>

<div class="container-d" >
    <div class="container" ng-controller="examination">
        <md-toolbar class="d-listing_toolbar">
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Course Mapping</span> 
            </div>
            <div class="d-toolbar_icon pull-right">
                <a href="{{url('course_mapping')}}" class="md-button md-fab md-mini md-raised md-mini pull-right">
                    <i class="material-icons">add</i>
                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                        Add New Record
                    </md-tooltip>
                </a>
            </div>
        </md-toolbar>
        <div class="clearfix row">
            <div class="col-lg-3 d-search_side">
                <div class=" panel panel-default ">
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
                                <label>Course Grouping / Unit Name</label>&nbsp;
                                <select ui-select2 ng-model="singledata.unit_name"   required >
                                    <option ng-value="season.id">Number Systems</option>
                                    <option ng-value="season.id">Algebra</option>
                                    <button type="button" class="btn btn-primary|primary|secondary|success|warning|danger|link"></button>                              <option ng-value="season.id">Geometry</option>
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
            <div class="col-lg-9 md-padding">

                <h5 align="center">Mathematics Class XI</h5>
                <span  class="h4" style="float: left">Unit: Geometry</span>
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 120px;">Chapter No</td>
                        <td>Chapter Name</td>
                        <td>Periods</td>
                        <td>Expected Start Date</td>
                    </tr>
                    <tr class='info'>
                        <td>4.</td>
                        <td ng-click="showTopics = !showTopics">Lines and Angles
                            <span  style="float: right">
                                <i style="float: right" class='fa fa-angle-double-up'></i>
                                <i style="float: right"class='fa fa-angle-double-down'></i>
                            </span></td>
                        <td>13</td>
                        <td>01-08-2017</td>
                    </tr>

                    <tr ng-show="showTopics">
                        <td>i</td>
                        <td colspan="3">(Motivate) If a ray stands on a line, then the sum of the two adjacent angles so
                            formed is 180O and the converse.</td>
                    </tr>
                    <tr ng-show="showTopics">
                        <td>ii</td>
                        <td colspan="3" >(Prove) If two lines intersect, vertically opposite angles are equal.</td>
                    </tr>
                    <tr ng-show="showTopics">
                        <td>iii</td>
                        <td colspan="3">(Motivate) Lines which are parallel to a given line are parallel.</td>
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
                        <td>08-08-2017</td>
                    </tr>

                    <tr ng-show="showTopic">
                        <td>i</td>
                        <td colspan="3">(Prove) The diagonal divides a parallelogram into two congruent triangles.</td>
                    </tr>
                    <tr ng-show="showTopic">
                        <td>ii</td>
                        <td colspan="3" >(Motivate) In a parallelogram opposite sides are equal, and conversely.</td>
                    </tr>
                    <tr ng-show="showTopic">
                        <td>iii</td>
                        <td colspan="3">(Motivate) In a parallelogram, the diagonals bisect each other and conversely.</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>


<br><br><br>
@endsection