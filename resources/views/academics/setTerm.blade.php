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
                            <label>Search Term...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Term Listing</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search State
                            </md-tooltip>
                        </button>&nbsp; 
                        <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                            <i class="material-icons">add</i>
                            <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                Add Term
                            </md-tooltip>
                        </md-button>
                    </div>
                </md-toolbar>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <table class="table">
                            <tr class="md-body-2 info">
                                <th>S.no</th>
                                <th>Term Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Term 1</td>
                                <td>04-04-2017</td>
                                <td>21-12-2017</td>
                                <td>Test</td>
                                <td></td>
                            </tr>
                              <tr>
                                <td>2</td>
                                <td>Term 1</td>
                                <td>01-01-2018</td>
                                <td>30-03-2018</td>
                                <td>Test</td>
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
                    <div class="panel-heading">Create Term</div>
                    <div class="panel-body">
                        <div class="row" ng-repeat="data in ctrl.add">
                            <div class="col-lg-3">
                                <md-input-container >
                                    <label>Term Name</label>
                                    <input  type="text" id="term" ng-model="ctrl.term"  name="term" required>
                                </md-input-container>
                            </div>
                            <div class="col-lg-3">
                                <span class="clearfix">&nbsp;</span>
                                <md-datepicker name="date-from" ng-model="ctrl.datefrom"  md-placeholder="Start Date" md-min-date="minDate" 
                                               md-max-date="maxDate" required>
                                </md-datepicker>
                            </div>
                            <div class="col-lg-3">
                                <span class="clearfix">&nbsp;</span>
                                <md-datepicker name="date-to" ng-model="ctrl.dateto"  md-placeholder="Start To" md-min-date="minDate" 
                                               md-max-date="maxDate" required>
                                </md-datepicker>
                            </div>
                            <div class="col-lg-2">
                                <span class="clearfix">&nbsp;</span>
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