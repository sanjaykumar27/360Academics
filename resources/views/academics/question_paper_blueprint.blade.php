@extends('layouts.app')
@section('content')
<br>
<div class="container-d" ng-controller="examination" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Question Paper Blueprint</div>
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
                        <div class="col-lg-4"></div>
                        <div class="col-lg-6"> 
                            <md-button class="md-raised md-default">Cancel</md-button>
                            <input type="submit" class="md-button md-raised md-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Question Paper Design</div>
                <div class="panel-body">
                    <h4 align="center">Half Year Examination</h4>
                    <h5 align="center">Mathematics [ 2017 - 18 ]</h5>
                    <div class="panel panel-info">
                        <div class="panel-heading" ng-click="sectiona = !sectiona">Section A
                            <span style="float: right"> 1 Mark</span></div>
                        <div class ="panel-body" ng-show="sectiona">
                            <table class="table">
                                <!---------- tr -------------->
                                <tr>
                                    <td colspan="3">
                                        <textarea placeholder="Enter Note" ng-model="ctrl.note" class="form-control"  rows="1" ></textarea>
                                    </td>
                                </tr> 
                                <!---------- tr -------------->
                                <tr class="info">
                                    <td>No.</td>
                                    <td>Question</td>
                                    <td></td>
                                </tr>
                                <!---------- tr -------------->
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <textarea placeholder="Question 1" class="form-control" ng-model="ctrl.question1"  rows="1" ></textarea>
                                    </td>
                                    <td>
                                <md-button ng-click="choice1 = !choice1" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button>
                                </td>
                            </tr>
                            <tr ng-show="choice1"><td colspan="3" align="center">OR</td></tr>
                                <tr ng-show="choice1">
                                    <td>1</td>
                                    <td>
                                        <textarea placeholder="Question 1 Optional" class="form-control" ng-model="ctrl.question1"  rows="1" ></textarea>
                                    </td>
                                </tr>
                                <!---------- tr -------------->
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <textarea placeholder="Question 2" class="form-control" ng-model="ctrl.question2"  rows="1" ></textarea>
                                    </td> 
                                    <td>
                                <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button>
                                </td>
                                </tr>
                                <!---------- tr -------------->
                                <tr ng-show="choice3">
                                    <td>3</td>
                                    <td> 
                                        <textarea placeholder="Question 3" class="form-control" ng-model="ctrl.question3"  rows="1" ></textarea>
                                    </td>
                                    <td><md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>

                                    </td><td>
                                <md-button ng-click="choice3 = !choice3" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Optional Choice Question
                                    </md-tooltip>
                                </md-button>
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!--------------------- Section B --------------------->

                    <div class="panel panel-danger">
                        <div class="panel-heading" ng-click="sectionb = !sectionb">Section B
                            <span style="float: right"> 2 Mark</span></div>
                        <div class ="panel-body" ng-show="sectionb">
                            <table class="table">
                                <!---------- tr -------------->
                                <tr>
                                    <td colspan="3">
                                        <textarea placeholder="Enter Note" ng-model="ctrl.note" class="form-control"  rows="1" ></textarea>
                                    </td>
                                </tr> 
                                <!---------- tr -------------->
                                <tr class="info">
                                    <td>No.</td>
                                    <td>Question</td>
                                    <td></td>
                                </tr>
                                <!---------- tr -------------->
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <textarea placeholder="Question 1" class="form-control" ng-model="ctrl.question1"  rows="1" ></textarea>
                                    </td>
                                    <td>
                                <md-button ng-click="choice1 = !choice1" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button>
                                </td>
                                </tr>
                                <tr ng-show="choice1">
                                    <td>1</td>
                                    <td>
                                        <textarea placeholder="Question 1 Optional" class="form-control" ng-model="ctrl.question1"  rows="1" ></textarea>
                                    </td>
                                </tr>
                                <!---------- tr -------------->
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <textarea placeholder="Question 2" class="form-control" ng-model="ctrl.question2"  rows="1" ></textarea>
                                    </td> 
                                    <td>
                                <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button>
                                </td>
                                </tr>
                                <!---------- tr -------------->
                                <tr ng-show="choice3">
                                    <td>3</td>
                                    <td> 
                                        <textarea placeholder="Question 3" class="form-control" ng-model="ctrl.question3"  rows="1" ></textarea>
                                    </td>
                                    <td><md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Internal Choice
                                    </md-tooltip>
                                </md-button></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>

                                    </td><td>
                                <md-button ng-click="choice3 = !choice3" class="md-fab md-mini md-raised md-mini pull-right">
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                        Add Optional Choice Question
                                    </md-tooltip>
                                </md-button>
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-5">
                            <input type="submit" class="md-button md-raised md-primary" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<br><br>
@endsection