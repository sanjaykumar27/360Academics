@extends('layouts.app')
@section('content')
<br>

<div class="d-container" ng-controller="examination">
    <div class="container">
        <md-toolbar class="md-hue-2">
            <div class="md-toolbar-tools"> 
                <h2>
                    <span>Create Co Scholastic Association</span>
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
                            <select ui-select2  ng-model="ctrl.cls" multiple>
                                <option value="1">NR</option>
                                <option value="2">KG</option>
                                <option value="3">PR</option>
                                <option value="4">I</option>
                            </select> 
                        </md-input-container>
                    </div>
                </div>
                <div class="row" ng-repeat="data in ctrl.add" >
                    <div class="col-lg-4">
                        <md-input-container class="md-block" >
                            &nbsp;<label>Select Head</label>&nbsp;
                            <select ui-select2  ng-model="ctrl.heads" >
                                <option value="1">Thinking Skills</option>
                                <option value="2">Social Skills</option>
                                <option value="3">Emotion Skills</option>
                            </select> 
                        </md-input-container>
                    </div>
                    <div class="col-lg-7">
                        <md-input-container class="md-block" >
                            <label>Select Sub - Heads</label>&nbsp;
                            <select ui-select2  ng-model="ctrl.subheads" multiple>
                                <option value="1">Knows his/her strengths and weaknesses</option>
                                <option value="2">demonstrates internal/external locus of control</option>
                                <option value="3">Knows her/his way of dealing with people, events, and things</option>
                            </select> 
                        </md-input-container>
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
                <span class="clearfix"><br></span>
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-5">
                        <md-button class='md-raised md-default'  data-dismiss='modal'>Close</md-button>
                        <input class="md-button md-raised md-primary" type="submit" data-dismiss='modal' value="Submit">
                    </div>
                </div>
            
        </div>
    </div>
</div>

<br><br><br>
@endsection