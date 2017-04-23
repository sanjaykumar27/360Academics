@extends('layouts.app')

@section('content')
<div class="d-wrapper d-master" ng-controller="moduleController" ng-cloak >
    <div class="d-breadcrum_bar">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                    <ul class="d-breadcrum">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><span>Module</span></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>  
    <div class="d-container">
        <div class="container">
            <md-toolbar class="d-listing_toolbar">
                <div class="d-searchbar" ng-show="showme"> 
                    <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Module">
                        <i class="material-icons">keyboard_backspace</i>
                        <md-tooltip md-visible="demo.back" md-direction="demo.back">
                            Back
                        </md-tooltip>
                    </button> 
                    <md-input-container class="md-block" flex-gt-sm>
                        <label>Search Module...</label>
                        <input  type="search" ng-model="search">
                    </md-input-container>
                </div>
                <div class="d-listing_toolbar_title pull-left"> 
                    <span>Module Listing</span> 
                </div>
                <div class="d-toolbar_icon pull-right">
                    <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Module">
                        <i class="material-icons">search</i>
                        <md-tooltip md-visible="demo.search" md-direction="demo.search">
                            Search Module
                        </md-tooltip>
                    </button>&nbsp; 
                    <md-button aria-label="edit" ng-click="addrecords()" class="md-fab md-mini md-raised md-mini pull-right">
                        <i class="material-icons">add</i>
                        <md-tooltip md-visible="demo.add_country" md-direction="demo.add_institute">
                            Add Module
                        </md-tooltip>
                    </md-button>
                </div>
            </md-toolbar>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Module name</th> 
                            <th>Creation date</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="data in filtered = (list| filter:search) |  startFrom:(currentPage - 1) * entryLimit | limitTo:entryLimit">
                            <td>@{{$index + 1}}</td>
                            <td>@{{data.name}}</td>
                            <td>@{{data.created_at}}</td>
                            <td> 
                    <md-button aria-label="edit" ng-click="editrecords(data)" class="md-fab md-mini md-raised md-mini">
                        <i class="material-icons">mode_edit</i>
                        <md-tooltip  >
                            Edit Module
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
                                <h3 class="panel-title d-no_padding">@{{module_form}} Module</h3> 
                            </div> 
                        </div>
                        <div class="clearfix well">
                            <form   method="post" name="frmmodule" id="frmmodule" ng-submit="saverecord(frmmodule.$valid)"  novalidate="novalidate" >
                                <input type="hidden" name="_token"  value="{{csrf_token()}}" ng-model="singledata._token">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                    <md-input-container class="md-block" ng-class="(submitted && !frmmodule.module_name.$valid) ? 'd-validation-error' : ''" flex-gt-sm> 
                                        <label>Module Name</label>
                                        <input type="text" ng-model="singledata.module_name" name="module_name" required ng-minlength="3" ng-model-options="{debounce : 700}">
                                        <div ng-show="submitted && frmmodule.module_name.$error" class="md-input-messages-animation md-auto-hide ng-active">
                                            <div ng-show="frmmodule.module_name.$error.required">{{ config('constant.error.Required')}}</div>
                                            <div ng-show="frmmodule.module_name.$error.minlength">{{ config('constant.error.ModuleNameMinLength')}}</div>
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
