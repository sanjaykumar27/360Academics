@extends('layouts.app')
@section('content')
<br>
<br>
<div class="d-container" ng-controller="examination">
    <div class="container">
        <md-toolbar class="md-hue-2">
            <div class="md-toolbar-tools"> 
                <h2>
                    <span>Create Marks Distribution</span>
                </h2> 
            </div>
        </md-toolbar>  
        <div class="panel panel-default md-padding">
            <div class="row">
                <div class="col-lg-4">
                    <md-input-container class="md-block" >
                        <label>Select Term</label>&nbsp;
                        <select ui-select2 ng-model="ctrl.term">
                            <option value="term1">Term 1</option>
                            <option value="term2">Term 2</option>
                        </select>
                    </md-input-container>
                </div>
                <div class="col-lg-4">
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
                <div class="col-lg-4">
                    <md-input-container class="md-block" >
                        <label>Select Class</label>&nbsp;
                        <select ui-select2  ng-model="ctrl.cls">
                            <option value="1">NR</option>
                            <option value="2">KG</option>
                            <option value="3">PR</option>
                            <option value="4">I</option>
                        </select> 
                    </md-input-container>
                </div>
            </div>


            <span class="clearfix"><br></span>

            <div class="row md-padding">
                <div class="panel panel-default">
                    <div class="panel-heading" ng-click="showScholastic = !showScholastic">Scholastic
                        <span style="float: right"><i class="fa fa-chevron-down"></i></span></div>
                    <div class="panel-body" ng-show="showScholastic">
                        <div class="table-responsive">
                            <table class="table table-hover table-hover table-bordered">
                                <tr class="info">
                                    <td>S.no</td>
                                    <td>Subject</td>
                                    <td>Code</td>
                                    <td width="20%">Marks</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>English</td>
                                    <td>E101</td>
                                    <td><input type="text" class="form-control"></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Hindi</td>
                                    <td>H100</td>
                                    <td><input type="text" class="form-control"></td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Science</td>
                                    <td>S114</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row md-padding">
                <div class="panel panel-default">
                    <div class="panel-heading" ng-click="CoshowScholastic = !CoshowScholastic">Co Scholastic
                        <span style="float: right"><i class="fa fa-chevron-down"></i></span></div>
                    <div class="panel-body" ng-show="CoshowScholastic">
                        <div class="table-responsive">
                            <table class="table table-hover table-hover table-bordered">
                                <tr>
                                    <td width="10%">S.no</td>
                                    <td>Heads</td>
                                    <td width="15%">Marks</td>
                                </tr>

                                <tr class="info">
                                    <td>1</td>
                                    <td>Thinking Skills </td>
                                    <td></td>

                                </tr>
                                <tr >
                                    <td align="right" >i.</td>
                                    <td>Knows his/her strengths and weaknesses</td>
                                    <td><input type="text" class="form-control"> </td>
                                </tr>
                                <tr >
                                    <td align="right" >ii.</td>
                                    <td >demonstrates internal/external locus of control</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr >
                                    <td align="right" >iii.</td>
                                    <td >Knows her/his way of dealing with people, events, and things</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr  class="info">
                                    <td>2</td>
                                    <td>Social Skills </td>

                                    <td></td>
                                </tr>
                                <tr >
                                    <td align="right" >i.</td>
                                    <td  >Actively listens and pays attention to others.</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td align="right"  >ii.</td>
                                    <td  >Sees and appreciates others' point of view.</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr  >
                                    <td align="right" >iii.</td>
                                    <td  >Draw attention of others when speaking in the class, school assembly and other occasions</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-lg-offset-5">
                    <md-button class='md-raised md-default'  data-dismiss='modal'>Close</md-button>
                    <input class="md-button md-raised md-primary" type="submit" data-dismiss='modal' value="Submit">
                </div>
            </div>

        </div>
    </div>
</div>

<br><br><br><br>
@endsection