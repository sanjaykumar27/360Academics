@extends('layouts.app')
@section('content')
<br>


<div class="d-wrapper d-master" ng-controller="feeStructureController" ng-cloak >
    <div class="d-container" >
        <div class="container">
            <md-toolbar class="md-hue-2">
                <div class="md-toolbar-tools"> 
                    <h2>
                        <span>Add Fee Structure</span>
                    </h2> 
                </div>
            </md-toolbar>  
            <form method="post" name="fees" id="fees" ng-submit="saverecord(fees.$valid)"    novalidate="novalidate" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel panel-default md-padding">
                    <div class="row clearfix">  
                        <div class="clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block">
                                    <label>Fees Component</label>
                                    <md-select ng-model="ctrl.selectedComponent" name="selectedComponent"> 
                                        <md-option value="1">Admission Fees</md-option>
                                        <md-option value="2">Caution Money</md-option>
                                        <md-option value="3">Development Fee</md-option>
                                        <md-option value="4">Tuition Fee</md-option>
                                        <md-option value="5">Computer Admission Fee</md-option>
                                        <md-option value="6">Computer Fee</md-option>
                                        <md-option value="7">Science Fee</md-option>
                                    </md-select>
                                    <div class="md-errors-spacer"></div>
                                </md-input-container> 
                            </div> 
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Frequency" ng-model="ctrl.frequency" name="frequency"> 
                                        <md-option value="1">Once Only(per session)</md-option>
                                        <md-option value="2">Periodic </md-option>
                                        <md-option value="3">Once only(At time of admission) </md-option>
                                    </md-select> 
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div> 
                        </div>

                        <div class="d-class_clone">
                            <div class="d-class_row clearfix">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <md-input-container class="md-block">
                                        <label>Classes</label>
                                        <md-select ng-model="ctrl.selectedClass" name="selectedClass" > 
                                            <md-option value="1">NR</md-option>
                                            <md-option value="2">KG</md-option>
                                            <md-option value="3">PR</md-option>
                                            <md-option value="4">I</md-option>
                                            <md-option value="5">II</md-option>
                                        </md-select>
                                        <div class="md-errors-spacer"></div>
                                    </md-input-container> 
                                </div>

                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <md-input-container class="md-block">
                                        <label>Select Amount</label>
                                        <input type="text" id="amount" ng-model="ctrl.amount" name="amount[0]" >
                                    </md-input-container> 
                                </div>

                                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
                                    <md-input-container class="md-block" > 
                                        <label>Due Date(s)</label>
                                        <input type="text" name="due_date[0]" ng-model="ctrl.duedate">
                                    </md-input-container>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1">
                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini">
                                        <i class="material-icons">add</i>
                                        <md-tooltip md-visible="demo.add_row" md-direction="demo.add_row">
                                            Add Row
                                        </md-tooltip>
                                    </md-button>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                                    <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                                    <input class="md-button md-raised md-primary" type="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection