@extends('layouts.app')
@section('content')
<br>

<div class="container-d" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-searchbar" ng-show="showme"> 
                        <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Term">
                            <i class="material-icons">keyboard_backspace</i>
                            <md-tooltip md-visible="demo.back" md-direction="demo.back">
                                Back
                            </md-tooltip>
                        </button> 
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Search Exam...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Term Exam Association</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search Exam
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
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <tr class="info">
                                <th>S.no</th>
                                <th>Term Name</th>
                                <th>Exam Name</th>
                                <th>Classes</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Term 1</td>
                                <td>PA1</td>
                                <td>NR, KG, PR</td>
                                <td>Periodic Assessment I</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Term 1</td>
                                <td>Half Yearly</td>
                                <td>I, II, III</td>
                                <td>Half Yearly</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Term 2</td>
                                <td>PA II</td>
                                <td>I, II, III, IV, V</td>
                                <td>Periodic Assessment II</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Term 2</td>
                                <td>Yearly</td>
                                <td>I, II, III, IV, V</td>
                                <td>Final Annual Exam</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
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
                    <div class="panel-heading">Create Term Exam Association</div>
                    <div class="panel-body">
                        <div class="row" >
                            <div class="col-lg-12">
                                <md-input-container class="md-block" >
                                    <label>Select Term</label>&nbsp;
                                    <select ui-select2 ng-model="ctrl.term">
                                        <option value="term1">Term 1</option>
                                        <option value="term2">Term 2</option>
                                    </select>
                                </md-input-container>
                            </div>
                        </div>
                        <div class="row" ng-repeat="data in ctrl.add">
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
                            <div class="col-lg-5">
                                <md-input-container class="md-block" > 
                                    <label>Select Classes</label>&nbsp;
                                    <select ui-select2 multiple  ng-model="past.class" required >
                                        <option  ng-value="class.id">NR</option>
                                        <option  ng-value="class.id">KG</option>
                                        <option  ng-value="class.id">I</option>
                                        <option  ng-value="class.id">II</option>
                                    </select>
                                </md-input-container>
                            </div>
                            <div class="col-lg-2">
                                <span class="clearfix">&nbsp;<br><br><br></span>
                                <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index == 0" >
                                    <i class="material-icons">add</i>
                                    <md-tooltip md-visible="demo.add_row" md-direction="" >
                                        Add Row
                                    </md-tooltip>
                                </md-button>
                            </div>
                            <div class="col-lg-2">
                                <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="removeplus($index)" ng-show="$index != 0">
                                    <i class="material-icons">remove</i>
                                    <md-tooltip md-visible="demo.remove_row" md-direction="" >
                                        Remove Row
                                    </md-tooltip>
                                </md-button>
                            </div>
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
<br><br><br>
@endsection