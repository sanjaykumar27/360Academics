@extends('layouts.app')
@section('content')
<br>

<div class="container-d" >
    <div class="container" ng-controller="examination">
        <div class="col-lg-3">
            <div class=" panel panel-primary">
                <div class="panel-heading">Search Course Structure </div>
                <div class="panel-body">
                    <div class="col-lg-12">
                        <md-input-container class="md-block">
                            <label>Class</label>&nbsp;
                            <select ui-select2 ng-model="singledata.timetable_class"   required >
                                <option ng-value="class.id">I</option>
                                <option ng-value="class.id">II</option>
                                <option ng-value="class.id">III</option>
                                <option ng-value="class.id">IV</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class="col-lg-12">
                        <md-input-container class="md-block">
                            <label>Subject</label>&nbsp;
                            <select ui-select2 ng-model="singledata.timetable_name"   required >
                                <option ng-value="season.id">English</option>
                                <option ng-value="season.id">Hindi</option>
                                <option ng-value="season.id">Maths</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class="col-lg-12"> 
                        <md-input-container class="md-block">
                            <md-button   class="md-raised md-primary">Search</md-button>
                        </md-input-container>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-searchbar" ng-show="showme"> 
                        <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Course">
                            <i class="material-icons">keyboard_backspace</i>
                            <md-tooltip md-visible="demo.back" md-direction="demo.back">
                                Back
                            </md-tooltip>
                        </button> 
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Search Course...</label>
                            <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                        </md-input-container>
                    </div>
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Course Structure</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search State">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.search" md-direction="demo.search">
                                Search Course
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
                    <h5 align="center">Mathematics Class XI</h5>
                    <table class="table table-bordered">
                        <tr>
                            <td>Units</td>
                            <td>Unit Name</td>
                            <td>Marks</td>
                            <td>Periods</td>
                        </tr>
                        <tr class="info">
                            <td>I</td>
                            <td colspan="3">NUMBER SYSTEMS</td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Real Numbers</td>
                            <td>08</td>
                            <td>18</td>
                        </tr>
                        <tr class="info">
                            <td>II</td>
                            <td colspan="3">ALGEBRA</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Polynomials</td>
                            <td rowspan="2">17</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Linear Equation in Two Variables</td>
                            <td>14</td>
                        </tr>
                        <tr class="info">
                            <td>III</td>
                            <td colspan="3">COORDINATE GEOMETRY</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Coordinate Geometry</td>
                            <td>04</td>
                            <td>06</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" ng-controller="examination" >
        <div class="modal-dialog" style="max-width: 80%">
            <div class="modal-content"> 
                <div class="modal-body">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">Create Course Structure</div>
                        <div class="panel-body md-caption" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <md-input-container class="md-block">
                                        <label>Class</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.timetable_class"   required >
                                            <option ng-value="class.id">I</option>
                                            <option ng-value="class.id">II</option>
                                            <option ng-value="class.id">III</option>
                                            <option ng-value="class.id">IV</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-6">
                                    <md-input-container class="md-block">
                                        <label>Subject</label>&nbsp;
                                        <select ui-select2 ng-model="singledata.timetable_name"   required >
                                            <option ng-value="season.id">English</option>
                                            <option ng-value="season.id">Hindi</option>
                                            <option ng-value="season.id">Maths</option>
                                        </select>
                                    </md-input-container>
                                </div>
                            </div>
                            <div class="row" class="row" ng-repeat="data in ctrl.add">
                                <div class="col-lg-3">
                                    <md-input-container class="md-block">
                                        <label>Unit Name</label>
                                        <input type="text" ng-model="unit_name">
                                    </md-input-container>
                                </div>
                                <div class="col-lg-1">
                                    <md-input-container class="md-block">
                                        <label>Marks</label>
                                        <input type="text" ng-model="marks">
                                    </md-input-container>
                                </div>

                                <div class="col-lg-5">
                                    <md-chips  ng-model="ctrl.chapter"  md-transform-chip="transform($chip)" >
                                        <md-autocomplete
                                            md-selected-item="selectedItem"
                                            md-search-text="searchText"
                                            md-items="item in ctrl.newFruits"
                                            md-item-text="item"
                                            placeholder="Chapters"></md-autocomplete>
                                        <md-chip-template class="md-caption">
                                            @{{$chip.chapter}}&nbsp;&nbsp;&nbsp;&nbsp; 
                                        </md-chip-template>
                                    </md-chips>

                                </div>

                                <div class="col-lg-2">
                                    <md-chips ng-model="ctrl.periods" placeholder="Amount" md-transform-chip="transform($chip)" >
                                        <md-autocomplete
                                            md-selected-item="selectedItem"
                                            md-search-text="searchText"
                                            md-items="item in ctrl.newFruits"
                                            md-item-text="item"
                                            placeholder="Periods"></md-autocomplete>
                                        <md-chip-template  class="md-caption">
                                            @{{$chip.name}}&nbsp;&nbsp;&nbsp;&nbsp; 
                                        </md-chip-template>
                                    </md-chips>
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
</div>
<br><br><br>
@endsection