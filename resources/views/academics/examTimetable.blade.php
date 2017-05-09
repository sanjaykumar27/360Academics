@extends('layouts.app')
@section('content')
<br>

<div class="container-d" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Exam Timetable</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                Generate Timetable
                            </md-tooltip>
                        </md-button>
                    </div>
                </md-toolbar>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <h4 align='center'>Half Yearly Examination : 2017-18</h4>
                        <table class="table table-bordered" style="text-align: center">
                            <tr class="info">
                                <td>Day & Date</td>
                                <td>I</td>
                                <td>II</td>
                                <td>III</td>
                                <td>IV</td>
                                <td>V</td>
                                <td>VI</td>
                                <td>XI-Science</td>
                                <td>XI-Commerce</td>
                            </tr>
                            <tr>
                                <td>28-02-2017<br>Tuesday</td>
                                <td>G.K</td>
                                <td>Computer</td>
                                <td>G.K</td>
                                <td>Computer</td>
                                <td>Maths</td>
                                <td>Science</td>
                                <td>Chemistry</td>
                                <td>Business Studies</td>
                            </tr>
                            <tr>
                                <td>01-03-2017<br>Wednesday</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>02-03-2017<br>Thursday</td>
                                <td>English</td>
                                <td>Hindi</td>
                                <td>Maths</td>
                                <td>G.K</td>
                                <td>Computer</td>
                                <td>English</td>
                                <td>English</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>03-03-2017<br>Friday</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>04-03-2017<br>Saturday</td>
                                <td>Maths</td>
                                <td>English</td>
                                <td>Hindi</td>
                                <td>Maths</td>
                                <td>EVS</td>
                                <td>Hindi</td>
                                <td>Physics</td>
                                <td>Accountancy</td>
                            </tr>
                            <tr class="danger">
                                <td colspan="9" style="padding: 1px;"></td>
                            </tr>
                            <tr>
                                <td>06-03-2017<br>Monday</td>
                                <td>EVS</td>
                                <td>Maths</td>
                                <td>Computer</td>
                                <td>EVS</td>
                                <td>Hindi</td>
                                <td>EVS</td>
                                <td>Maths</td>
                                <td>Maths</td>
                            </tr>
                        </table>
                        <br><br>
                        <table class="table">
                            <tr class="info">
                                <td colspan="2">Please note that:</td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Computer for classes 5-10 will be conducted on <strong>Monday 27.02.2017,</strong>
                                    &nbsp;which shall be a full working day.</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>The School Timings during the Assessment (28.02.2017 to 10.03.2017) will be 
                                    <strong>7:30 AM to 11:00 AM.</strong></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>The Result of classes Nur to V will be declared on <strong>Thursday, 23.02.2017</strong>,
                                    for classses VI to VII & XI it will be declared on <strong>Monday, 27.03.2017.</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" ng-controller="examination">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-body clearfix">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Create Term</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <md-input-container class="md-block" >
                                        <label>Select Term</label>&nbsp;
                                        <select ui-select2 ng-model="ctrl.term">
                                            <option value="term1">Term 1</option>
                                            <option value="term2">Term 2</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-5">
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
<br><br><br><br>
@endsection