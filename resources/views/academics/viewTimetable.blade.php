@extends('layouts.app')
@section('content')
<br>

<div class="d-container" ng-controller="viewtimetable">
    <div class="container">
        <div class="col-lg-3">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">Select Timetable</div>
                    <div class="panel-body">
                        <div class="col-lg-12" >
                            <md-input-container class="md-block">
                                <label>Select User</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetableuser" ng-change="showInput()" required >
                                    <option ng-value="student">Student</option>
                                    <option ng-value="teacher">Teacher</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12" id="studentclass" style="display: none">
                            <md-input-container class="md-block">
                                <label>Class</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetableclass" required >
                                    <option ng-value="student">NR</option>
                                    <option ng-value="teacher">KG</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12" id="studentsection" style="display: none;">
                            <md-input-container class="md-block" >
                                <label>Section</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetablesection" required >
                                    <option ng-value="student">A</option>
                                    <option ng-value="teacher">B</option>
                                    <option ng-value="teacher">C</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12" id="teacher" style="display: none;">
                            <md-input-container class="md-block" >
                                <label>Teacher</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetableuser" required >
                                    <option ng-value="student">Sanjay Kumar</option>
                                    <option ng-value="teacher">Prateek Mathur</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12">
                            <md-input-container class="md-block" >
                                <label>Timetable Name</label>&nbsp;
                                <select ui-select2 ng-model="singledata.timetable" required >
                                    <option ng-value="student">Summer</option>
                                    <option ng-value="teacher">Winter</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-12">
                            <md-button class="md-raised md-primary">Generate Timetable</md-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading"> 
                    @{{singledata.timetableuser}} Timetable</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr class="info">
                            <td>Period / Day</td>
                            <td>Time</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>[ 8:00 - 8:45 ]</td>
                            <td>English
                                </td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>II</td>
                            <td>[ 8:45 - 9:30 ]</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                        </tr>
                        <tr>
                            <td>III</td>
                            <td>[ 9:30 - 10:15 ]</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                        </tr>
                        <tr >
                            <td>IV</td>
                            <td>[ 10:15 - 11:00 ]</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                        </tr>
                        <tr class="success">
                            <td>Recess</td>
                            <td>[ 11:00 - 11:20 ]</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>V</td>
                            <td>[ 11:20 - 12:00 ]</td>
                            <td>Drawing</td>
                            <td>Activity</td>
                            <td>F.L</td>
                            <td>Activity</td>
                            <td>Drawing</td>
                            <td>Activity</td>
                        </tr>
                        <tr>
                            <td>VI</td>
                            <td>[ 12:00 - 12:40 ]</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                        </tr>
                         <tr>
                            <td>VII</td>
                            <td>[ 12:40 - 13:20 ]</td>
                            <td>Games</td>
                            <td>Library</td>
                            <td>Music</td>
                            <td>Games</td>
                            <td>Library</td>
                            <td>Games</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div><br><br><br><br><br><br>
@endsection