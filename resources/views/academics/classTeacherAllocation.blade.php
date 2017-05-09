@extends('layouts.app')
@section('content')

<br>
<br>
<div class="d-container" ng-controller="seasongroup">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-searchbar" ng-show="showme"> 
                        <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Class Teacher">
                            <i class="material-icons">keyboard_backspace</i>
                            <md-tooltip md-visible="demo.back" md-direction="demo.back">
                                Back
                            </md-tooltip>
                        </button> 
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Search Class-Teacher...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Class Teacher</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search Class teacher
                            </md-tooltip>
                        </button>&nbsp; 
                        <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                            <i class="material-icons">add</i>
                            <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                Add New Record
                            </md-tooltip>
                        </md-button>
                    </div>
                </md-toolbar>
                <div class="panel-body">

                    <table class="table table-striped">
                        <tr class="info">
                            <th>S.no</th>
                            <th>Class - Section</th>
                            <th>Teacher</th>
                            <th>Remark</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>II - A</td>
                            <td>Prateek Mathur</td>
                            <td>Test</td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>IX - C</td>
                            <td>Sanjay Kumar</td>
                            <td>Test</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog" style="max-width: 80%">
            <div class="modal-content"> 
                <div class="modal-body clearfix">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Create Class Teacher</div>
                        <div class="panel-body">
                            <div class="row" ng-repeat="data in singledata.add">
                                <div class="col-lg-2">
                                    <md-input-container class="md-block " flex-gt-sm>
                                        <label>Class</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.Class"   required >
                                            <option ng-value="class.id">I</option>
                                            <option ng-value="class.id">II</option>
                                            <option ng-value="class.id">III</option>
                                            <option ng-value="class.id">IV</option>
                                        </select>
                                    </md-input-container>
                                </div>

                                <div class="col-lg-2">
                                    <md-input-container class="md-block">
                                        <label>Section</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.Section"   required >
                                            <option ng-value="section.id">A</option>
                                            <option ng-value="section.id">B</option>
                                            <option ng-value="section.id">C</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block">
                                        <label>Teacher</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.Teacher"  flex-gt-sm required >
                                            <option ng-value="teacher.id">Sanjay Kumar</option>
                                            <option ng-value="teacher.id">Prateek Mathur</option>
                                        </select>
                                    </md-input-container>

                                </div>

                                <div class="col-lg-4">
                                    <span class="clearfix">&nbsp;<br><br></span>
                                    <md-input-container class="md-block">
                                        <input type ="text" placeholder="Remarks" ng-model="singledata.Remark">
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
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-5" > 
                                <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                                <md-button class="md-raised md-primary">Save</md-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div><br><br><br>

@endsection