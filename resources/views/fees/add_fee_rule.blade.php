@extends('layouts.app')
@section('content')
<br>
<div class="d-container">
    <div class="container">
        <md-toolbar class="md-hue-2">
            <div class="md-toolbar-tools"> 
                <h2>
                    <span>Add Rule</span>
                </h2> 
            </div>
        </md-toolbar>  
        <div class="panel panel-default md-padding">
            <div class="row clearfix">   
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <md-input-container class="md-block" ng-model="ctrl.rule"> 
                        <label>Fee Rule Name</label>
                        <input type="text">
                    </md-input-container>
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <md-input-container class="md-block" ng-model="ctrl.amount"> 
                        <label>Amount</label>
                        <input type="text">
                    </md-input-container>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 d-radio_outer">
                    <label>Format</label>  
                    <md-radio-group ng-model="data.group1"> 
                        <md-radio-button value="Percent">Percent</md-radio-button>
                        <md-radio-button value="Fixed">Fixed</md-radio-button> 
                    </md-radio-group> 
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 d-radio_outer">
                    <label>Type</label>  
                    <md-radio-group ng-model="data.group2"> 
                        <md-radio-button value="Discount">Discount</md-radio-button>
                        <md-radio-button value="Addition">Addition</md-radio-button> 
                    </md-radio-group> 
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 d-radio_outer">
                    <label>Status</label>  
                    <md-radio-group ng-model="data.group3"> 
                        <md-radio-button value="Active">Active</md-radio-button>
                        <md-radio-button value="In-Active">In-Active</md-radio-button> 
                    </md-radio-group> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" ng-controller="SelectComponent">
                    <md-input-container class="md-block">
                        <label>Fees Component</label>
                        <md-select ng-model="selectedComponents" multiple> 
                            <md-optgroup label="Fees Component">
                                <md-option ng-value="component.name" ng-repeat="component in components">@{{component.name}}</md-option>
                            </md-optgroup>
                        </md-select>
                        <div class="md-errors-spacer"></div>
                    </md-input-container> 
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                    <md-button class="md-raised md-primary">Save</md-button>
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection