@extends('layouts.app')
@section('content')
<br>
<div class="container-d" ng-controller="examination" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Exam Blueprint</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <md-input-container class="md-block" >
                                <label>Select Term</label>&nbsp;
                                <select ui-select2 ng-model="ctrl.term">
                                    <option value="term1">Term 1</option>
                                    <option value="term2">Term 2</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" >
                                <label>Select Exam</label>&nbsp;
                                <select ui-select2  ng-model="ctrl.exam">
                                    <option value="fa1">PA1</option>
                                    <option value="fa2">Half Yearly</option>
                                    <option value="sa1">PA2</option>
                                    <option value="sa1">Yearly</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" > 
                                <label>Select Classes</label>&nbsp;
                                <select ui-select2  ng-model="past.class" required >
                                    <option  ng-value="class.id">NR</option>
                                    <option  ng-value="class.id">KG</option>
                                    <option  ng-value="class.id">I</option>
                                    <option  ng-value="class.id">II</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" > 
                                <label>Select Subject</label>&nbsp;
                                <select ui-select2   ng-model="past.subject" required >
                                    <option  ng-value="class.id">English</option>
                                    <option  ng-value="class.id">Hindi</option>
                                    <option  ng-value="class.id">Mathematics</option>
                                    <option  ng-value="class.id">Science</option>
                                </select>
                            </md-input-container>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-lg-offset-9">
                            <md-button data-toggle="modal" data-target="#subjecttime"  class="md-raised md-primary">Select Marks Scheme</md-button>
                        </div>
                    </div>

                    <div class="row">
                        <div class='col-lg-12'><br>
                            <table class="table table-bordered md-caption" style="text-align: center">
                                <tr class="info h5">
                                    <td>Subject Distribution</td>
                                    <td>Description</td>
                                    <td ng-repeat="row in repeatData">@{{row.period}}<br>[@{{row.starttime}}]</td>
                                    <td>Total Marks</td>
                                    <td>% Weightage (approx.)</td>
                                </tr>
                                <tr>
                                    <td>Remembering</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal">Select Topics</a>
                                        <br>
                                        <span ng-repeat="top in ctrl.topic">&nbsp;@{{top}}</span>
                                        <input type="text" placeholder="Notes" class="form-control">
                                    </td>
                                    <td ng-repeat="row in repeatData">
                                        <label></label>
                                        <input placeholder="No. of Question" class="form-control" type="text" ng-model="ctrl.no_question1">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text"  readonly ng-model="ctrl.total_marks1" class="form-control">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" class="form-control" readonly ng-model="ctrl.percentage1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Understanding</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal">Select Topics</a>
                                        <br>
                                        <span ng-repeat="top in ctrl.topic">&nbsp;@{{top}}</span>
                                        <input type="text" placeholder="Notes" class="form-control">
                                    </td>
                                    <td ng-repeat="row in repeatData">
                                        <label></label>
                                        <input placeholder="No. of Question" class="form-control" type="text"  ng-model="ctrl.no_question2">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" readonly class="form-control" ng-model="ctrl.total_marks2" value="15">
                                    </td>
                                    <td>
										<label></label>
                                        <input type="text" class="form-control" readonly ng-model="ctrl.percentage2">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Application</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal">Select Topics</a>
                                        <br>
                                        <span ng-repeat="top in ctrl.topic">&nbsp;@{{top}}</span>
                                        <input type="text" placeholder="Notes" class="form-control">
                                    </td>
                                    <td ng-repeat="row in repeatData">
                                        <label></label>
                                        <input placeholder="No. of Question" class="form-control" type="text" ng-model="ctrl.no_question3">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" readonly class="form-control" ng-model="ctrl.total_marks3" value="20">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" class="form-control" readonly ng-model="ctrl.percentage3">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Higher Order Thinking Skills</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#myModal">Select Topics</a>
                                        <br>
                                        <span ng-repeat="top in ctrl.topic">&nbsp;@{{top}}</span>
                                        <input  type="text" placeholder="Notes" class="form-control">

                                    </td>
                                    <td ng-repeat="row in repeatData">

                                        <label></label>
                                        <input placeholder="No. of Question" class="form-control" type="text" ng-model="ctrl.no_question4">

                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" readonly class="form-control" ng-model="ctrl.total_marks4">
                                    </td>
                                    <td>

                                        <label></label>
                                        <input type="text" class="form-control" readonly ng-model="ctrl.percentage4">

                                    </td>
                                </tr>
                                <tr>
                                    <td>Evaluation</td>
                                    <td >
                                        <a href="#" data-toggle="modal" data-target="#myModal">Select Topics</a>
                                        <br>
                                        <span ng-repeat="top in ctrl.topic">&nbsp;@{{top}}</span>
                                        <input type="text" placeholder="Notes" class="form-control">
                                    </td>
                                    <td ng-repeat="row in repeatData">
                                        <label></label>
                                        <input placeholder="No. of Question" type="text" class="form-control" ng-model="ctrl.no_question5">
                                    </td>
                                    <td>
                                        <label></label>
                                        <input type="text" readonly class="form-control" ng-model="ctrl.total_marks5">
                                    </td>
                                    <td>

                                        <label> </label>
                                        <input type="text" class="form-control" readonly ng-model="ctrl.percentage5">

                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td ng-repeat="row in repeatData">Total: </td>
                                    <td>Total Marks : 80</td>
                                    <td>Total % 100 </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-6"> 
                            <md-button class="md-raised md-default">Cancel</md-button>
                            <input type="submit" class="md-button md-raised md-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" >
        <div class="modal-dialog" style="max-width: 80%">
            <div class="modal-content"> 
                <div class="modal-body">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">Select Topics</div>
                        <div class="panel-body" >
                            <form>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block" > 
                                        <label>Select Unit</label>&nbsp;
                                        <select ui-select2   ng-model="ctrl.units" required >
                                            <option  ng-value="class.id">Polynomials</option>
                                            <option  ng-value="class.id">Geometry</option>
                                        </select>
                                    </md-input-container>

                                </div>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block" > 
                                        <label>Select Chapters</label>&nbsp;
                                        <select ui-select2 ng-model="ctrl.chapters" required >
                                            <option  ng-value="class.id">Lines and Angles</option>
                                            <option  ng-value="class.id">Triangles</option>
                                            <option  ng-value="class.id">Quadilaterals</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-6">
                                    <md-input-container class="md-block" > 
                                        <label>Select Topics</label>&nbsp;
                                        <select ui-select2  multiple ng-model="ctrl.topic" required >
                                            <option  ng-value="Parallelogram">Parallelogram</option>
                                            <option  ng-value="class.id">Diagonals</option>
                                            <option  ng-value="class.id">Segment</option>    
                                            <option  ng-value="class.id">Non-collinear points</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-6" align="right">
                                    <md-button class="md-raised md-default">Cancel</md-button>
                                    <input type="submit" class="md-button md-raised md-primary" value="Submit">
                                </div>
                            </form>
                        </div>
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
                        <div class="panel-heading">Select Type of Question and Marks</div>
                        <div class="panel-body">
                            <form post="method" name="frm" id="frm" ng-submit="savePeriod(frm.$valid)" novalidate="novalidate">
                                <table class="table">
                                    <tr class="h5">
                                        <th>Type of Questions</th>
                                        <th>Marks</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>
                                    <md-input-container class="md-block">
                                        <label>Description</label>
                                        <input type="text">
                                    </md-input-container>
                                    </td>
                                    <td>
                                    <md-input-container class="md-block">
                                        <label>Marks</label>
                                        <input type="text">
                                    </md-input-container>
                                    </td>

                                    <td>
                                    <md-button class="md-raised  md-primary"  ng-click="addRow()"  >Add Question</md-button>
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
</div>
<br><br><br>
@endsection