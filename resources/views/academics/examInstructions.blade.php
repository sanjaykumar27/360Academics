@extends('layouts.app')
@section('content')
<br>

<div class="container-d" ng-controller="examination" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Set Exam Instructions</div>
                <div class="panel-body">

                    <div class="col-lg-6">
                        <md-input-container class="md-block" >
                            <label>Select Term</label>&nbsp;
                            <select ui-select2 ng-model="ctrl.term">
                                <option value="term1">Term 1</option>
                                <option value="term2">Term 2</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class="col-lg-6">
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
                    <div class="row" ng-repeat="data in ctrl.add">
                        <div class="col-lg-10">
                            <md-input-container class="md-block">
                                <label>Points</label>
                                <textarea ng-model="user.Points" md-maxlength="150" rows="3" md-select-on-focus></textarea>
                            </md-input-container>
                        </div>
                        <div class="col-lg-2">
                            <span class="clearfix">&nbsp;<br><br></span>
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
</div>
<br><br><br><br>
@endsection