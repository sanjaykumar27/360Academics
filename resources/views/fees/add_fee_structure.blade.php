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
            <form name="fees" id="fees" ng-submit="saverecord(fees.$valid)"    novalidate="novalidate" >
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="panel panel-default md-padding">
                    <div class="row clearfix">  
                        <div class="clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block">
                                    <label>Fees Component</label>
                                    <md-select ng-model="ctrl.selectedComponent" name="selectedComponent" required
                                         ng-class="(submitted && !fees.selectedComponent.$valid) ? 'd-validation-error' : ''"> 
                                        <md-option value="1">Admission Fees</md-option>
                                        <md-option value="2">Caution Money</md-option>
                                        <md-option value="3">Development Fee</md-option>
                                        <md-option value="4">Tuition Fee</md-option>
                                        <md-option value="5">Computer Admission Fee</md-option>
                                        <md-option value="6">Computer Fee</md-option>
                                        <md-option value="7">Science Fee</md-option>
                                    </md-select>
                                     &nbsp;<div ng-show="submitted && fees.selectedComponent.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="fees.selectedComponent.$error.required">Component is Required</div>
                                        </div>
                                    <div class="md-errors-spacer"></div>
                                </md-input-container> 
                            </div> 
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <md-input-container class="md-block"> 
                                    <md-select placeholder="Frequency" ng-model="ctrl.frequency" name="frequency" required
                                      ng-class="(submitted && !fees.frequency.$valid) ? 'd-validation-error' : ''" > 
                                        <md-option value="1">Once Only(per session)</md-option>
                                        <md-option value="2">Periodic </md-option>
                                        <md-option value="3">Once only(At time of admission) </md-option>
                                    </md-select> 
                                     &nbsp;<div ng-show="submitted && fees.frequency.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="fees.frequency.$error.required">Frequency is Required</div>
                                        </div>
                                    <div class="md-errors-spacer"></div>
                                </md-input-container>
                            </div> 
                        </div>

                        <div class="d-class_clone">
                            <div class="d-class_row clearfix">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
                                    <md-input-container class="md-block">
                                        <label>Classes</label>
                                        <md-select ng-model="ctrl.selectedClass" name="selectedClass" required
                                                   ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''" > 
                                            <md-option value="1">NR</md-option>
                                            <md-option value="2">KG</md-option>
                                            <md-option value="3">PR</md-option>
                                            <md-option value="4">I</md-option>
                                            <md-option value="5">II</md-option>
                                        </md-select>
                                        &nbsp;<div ng-show="submitted && fees.selectedClass.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="fees.selectedClass.$error.required">Class is Required</div>
                                        </div>
                                        <div class="md-errors-spacer"></div>
                                    </md-input-container> 
                                </div>

                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" 
                                     ng-class="(submitted && !fees.amount.$valid) ? 'd-validation-error' : ''" >
                                    <md-input-container class="md-block" >
                                        <label>Select Amount</label>
                                        <input  type="text" id="amount" ng-model="ctrl.amount"  name="amount" required>
                                        <div ng-show="submitted && fees.amount.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            &nbsp;<div ng-show="fees.amount.$error.required">Amount is Required</div>
                                        </div>
                                    </md-input-container> 
                                </div>

                                <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4"
                                     ng-class="(submitted && !fees.due_date.$valid) ? 'd-validation-error' : ''">
                                    <md-input-container class="md-block" > 
                                        <label>Due Date(s)</label>
                                        <input type="text" name="due_date" ng-model="ctrl.duedate" required>
                                        <div ng-show="submitted && fees.due_date.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            &nbsp;<div ng-show="fees.due_date.$error.required">Date is Required</div>
                                        </div>
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