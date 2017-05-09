@extends('layouts.app')

@section('content')
<div class="d-wrapper d-master" ng-controller="stateController" ng-cloak >
    <div class="d-breadcrum_bar">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <ul class="d-breadcrum">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><span>State</span></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>  
    <div class="d-container">
        <div class="container">
            <md-toolbar class="d-listing_toolbar">
                <div class="d-searchbar" ng-show="showme"> 
                    <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                        <i class="material-icons">keyboard_backspace</i>
                        <md-tooltip md-visible="demo.back" md-direction="demo.back">
                            Back
                        </md-tooltip>
                    </button> 
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Search State...</label>
                        <input  type="search" ng-model="search" ng-model-options="{debounce : 700}">
                    </md-input-container>
                </div>
                <div class="d-listing_toolbar_title pull-left"> 
                    <span>State Listing</span> 
                </div>
                <div class="d-toolbar_icon pull-right">
                    <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                        <i class="material-icons">search</i>
                        <md-tooltip md-visible="demo.search" md-direction="demo.search">
                            Search State
                        </md-tooltip>
                    </button>&nbsp; 
                    <md-button aria-label="edit" ng-click="addrecords()" class="md-fab md-mini md-raised md-mini pull-right">
                        <i class="material-icons">add</i>
                        <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                            Add State
                        </md-tooltip>
                    </md-button>
                </div>
            </md-toolbar>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>State name</th> 
                            <th>Country</th> 
                            <th>Creation date</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search) |  startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>@{{$index + 1}}</td>
                            <td>@{{data.name}}</td>
                            <td>@{{data.country}}</td>
                            <td>@{{data.created_at}}</td>
                            <td> 
                    <md-button aria-label="edit" ng-click="editrecords(data)" class="md-fab md-mini md-raised md-mini">
                        <i class="material-icons">mode_edit</i>
                        <md-tooltip  >
                            Edit State
                        </md-tooltip>
                    </md-button>
                    </td> 
                    </tr> 
                    </tbody>
                </table>
            </div>

            <div class="pagination" ng-show="filteredItems > 0">
                <pagination total-items="filteredItems" ng-model="currentPage"  rotate="false"  max-size="4" previous-text="< Previous" next-text="Next >" items-per-page="entryLimit" class="paging" boundary-links="true"></pagination>
            </div> 	 

        </div>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body clearfix">
                        <div class="panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title d-no_padding">@{{state_form}} State</h3> 
                            </div> 
                        </div>
                        <div class="clearfix well">
                            <form   method="post" name="frmstate" id="frmstate" ng-submit="saverecord(frmstate.$valid)"  novalidate="novalidate" >
                                <input type="hidden" name="_token"  value="{{csrf_token()}}" ng-model="singledata._token">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                    <md-input-container class="md-block" ng-class="(submitted && !frmstate.state_name.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <label>State Name</label>
                                        <input type="text" ng-model="singledata.state_name" name="state_name" required ng-minlength="3" ng-model-options="{debounce : 700}">
                                        <div ng-show="submitted && frmstate.state_name.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="frmstate.state_name.$error.required">{{ config('constant.error.Required')}}</div>
                                            <div ng-show="frmstate.state_name.$error.minlength">{{ config('constant.error.StateNameMinLength')}}</div>
                                        </div>
                                    </md-input-container>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                    <md-input-container class="md-block" ng-class="(submitted && !frmstate.country.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <select ui-select2 ng-model="singledata.country" name="country" id="country" required>
                                            <option value="">Select Country</option>
                                            <option ng-repeat="country in countries" ng-value="country.id">@{{country.name}}</option>
                                        </select>

                                        <div ng-show="submitted && frmstate.country.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="frmstate.country.$error.required">{{ config('constant.error.Required')}}</div>
                                        </div>
                                    </md-input-container>
                                </div>   
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <md-switch ng-model="singledata.status"  aria-label="Switch 2" ng-true-value="'Active'" ng-false-value="'Inactive'" class="md-warn">
                                        @{{ singledata.status}}
                                    </md-switch> 
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                                    <md-button class="md-raised md-button" data-dismiss="modal">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                                    <input class="md-button md-raised md-primary" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

    </div>  
</div>
@endsection
