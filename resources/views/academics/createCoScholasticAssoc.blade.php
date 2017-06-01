@extends('layouts.app')
@section('content')
<br>

<div class="d-container" ng-controller="examination">
    <div class="container-fluid">
        <md-toolbar class="md-hue-2">
            <div class="md-toolbar-tools"> 
                <h2>
                    <span>Create Class Subject Exam Association</span>
                </h2> 
            </div>
        </md-toolbar>  
        <div class="panel panel-default md-padding">
            <div class="row">
                <div class="col-lg-6">
                    <md-input-container class="md-block" >
                        <label>Select Class</label>>&nbsp;
                        <select ui-select2  ng-model="ctrl.cls">
                            <option value="1">NR</option>
                            <option value="2">KG</option>
                            <option value="3">PR</option>
                            <option value="4">I</option>
                        </select> 
                    </md-input-container>
                </div>
                <div class="col-lg-6">
                    <md-input-container class="md-block" >
                        <label>Select Subject Criteria</label>&nbsp;
                        <select ui-select2  ng-model="ctrl.cls" >
                            <option value="1">Scholastic</option>
                            <option value="2">Co Scholastic</option>
                        </select> 
                    </md-input-container>
                </div>
            </div>






            <p class='label label-info'>If Scholastic is selected</p>
            <div class="row" ng-repeat="data in ctrl.add" >
                <div class="col-lg-2">
                    <md-input-container class="md-block" >
                        <label>Select Subject</label>&nbsp;
                        <select ui-select2  ng-model="ctrl.heads" >
                            <option value="1">English</option>
                            <option value="2">Hindi</option>
                            <option value="3">Maths</option>
                        </select> 
                    </md-input-container>
                </div>
                <div class="col-lg-3">
                    <md-input-container class="md-block" >
                        <label></label>
                        <select ui-select2  ng-model="ctrl.subheads" multiple placeholder='Select Subject Distribution'>
                            <option value="1">Knows his/her strengths and weaknesses</option>
                            <option value="2">demonstrates internal/external locus of control</option>
                            <option value="3">Knows her/his way of dealing with people, events, and things</option>
                        </select> 
                    </md-input-container>
                </div>
                <div class="col-lg-2">
                    <md-input-container class="md-block" >
                        <label></label>
                        <select ui-select2 placeholder="Select Exam" ng-model="ctrl.exam" multiple>
                            <option value="fa1">PA1</option>
                            <option value="fa2">Half Yearly</option>
                            <option value="sa1">PA2</option>
                            <option value="sa1">Yearly</option>
                        </select>
                    </md-input-container>
                </div>

                <div class="col-lg-2">
                    <label>&nbsp;Is Optional<br></label>
                    <md-switch ng-model="singledata.status"  aria-label="Switch 2" ng-true-value="'Optional'" ng-false-value="'Not Optional'" class="md-warn">
                        @{{ singledata.status}}
                    </md-switch>
                </div>
                <div class='col-lg-2'>
                    <label><br>Amount</label>
                    <input type='text' class='form-control'>
                </div>

                <div class="col-lg-1">
                    <span class="clearfix">&nbsp;<br><br></span>
                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index == 0" >
                        <i class="material-icons ">add</i>
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
            <p class='label label-danger'>If Co Scholastic is selected</p>
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
                        <label></label>
                        <select ui-select2  ng-model="ctrl.subheads" multiple placeholder='Select Sub - Heads'>
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