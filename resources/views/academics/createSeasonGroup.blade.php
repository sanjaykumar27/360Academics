@extends('layouts.app')
@section('content')

<br>
<div class="d-container" >
    <div class="container" ng-controller="seasongroup" ng-cloak>
        <md-toolbar class="md-hue-2">
            <div class="md-toolbar-tools"> 
                <h2>
                    <span>@{{formtype}} Class Subject Teacher Association</span>

                </h2> 
            </div>
        </md-toolbar>  
        <br>
        <form name="timetable" id="timetable" ng-submit="" novalidate="novalidate">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="row" ng-repeat="data in singledata.add">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2" >
                    <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.season.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                        <label>Select Season</label>
                        <md-select placeholder="Seasons" ng-model="ctrl.seasonid" name="seasonid" id="seasonid" required>
                            <md-option ng-repeat="season in seasons" ng-value="season.id">@{{season.name}}</md-option>
                            <md-option style="color: #3c6df0" ng-click="openWindow()">Add New Season</md-option>
                        </md-select>
                    </md-input-container>
                </div>


                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                    <span><br></span>
                    <md-datepicker name="dob" ng-model="data.datefrom"  md-placeholder="Date from" md-min-date="minDate" 
                                   md-max-date="maxDate" required>
                    </md-datepicker>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                    <span><br></span>
                    <md-datepicker name="dob" ng-model="data.dateto"  md-placeholder="Date to" md-min-date="minDate" 
                                   md-max-date="maxDate" required>
                    </md-datepicker>
                </div>
                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                    <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                        <label>Remarks</label>
                        <input  type="text" id="remarks" ng-model="newctrl.remarks"  name="remarks" required>
                    </md-input-container>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index == 0" >
                        <i class="material-icons">add</i>
                        <md-tooltip md-visible="demo.add_row" md-direction="" >
                            Add Row
                        </md-tooltip>
                    </md-button>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1" ng-if="formtype == 'Add'">
                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="removeplus($index)" ng-show="$index != 0">
                        <i class="material-icons">remove</i>
                        <md-tooltip md-visible="demo.remove_row" md-direction="" >
                            Remove Row
                        </md-tooltip>
                    </md-button>
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                <md-button class="md-raised md-primary">Save</md-button>
            </div>
        </form>
    </div><br>




</div>

</div>

@endsection
