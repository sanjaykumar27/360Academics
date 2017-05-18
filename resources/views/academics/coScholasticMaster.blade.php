@extends('layouts.app')
@section('content')
<br><br>

<div class="container-d">
    <div class="container">
        <md-toolbar class="d-listing_toolbar">
            <div class="d-searchbar" ng-show="showme"> 
                <button ng-click="showme = false" class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Co-Scholastic">
                    <i class="material-icons">keyboard_backspace</i>
                    <md-tooltip md-visible="demo.back" md-direction="demo.back">
                        Back
                    </md-tooltip>
                </button> 
                <md-input-container class="md-block" flex-gt-sm>
                    <label>Search Co-Scholastic...</label>
                    <input  type="search" ng-model="search" ng-model-options="{debounce: 700}">
                </md-input-container>
            </div>
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Co Scholastic Listing</span> 
            </div>
            <div class="d-toolbar_icon pull-right">
                <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search Collection Type">
                    <i class="material-icons">search</i>
                    <md-tooltip md-visible="demo.search" md-direction="demo.search">
                        Search Co Scholastic
                    </md-tooltip>
                </button>&nbsp; 

                <md-button aria-label="edit" data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                    <i class="material-icons">add</i>
                    <md-tooltip md-visible="demo.add_collectiontype" md-direction="demo.add_collectiontype">
                        Add Co Scholastic
                    </md-tooltip>
                </md-button>

            </div>
        </md-toolbar>
        <div class="panel panel-default md-padding">
            <div class="clearfix row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <tr class="info">
                                <td width="10%">S.no</td>
                                <td >Head</td>
                                <td>Remarks</td>
                                <td width="20%">Action</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td ng-click="showList1 = !showList1">Thinking Skills
                                    <span style="float:  right"><i class="fa fa-chevron-down"></i></span></td>
                                <td>Test</td>
                                <td></td>
                            </tr>
                            <tr ng-show="showList1">
                                <td align="right">i.</td>
                                <td colspan="3">Knows his/her strengths and weaknesses</td>
                            </tr>
                            <tr ng-show="showList1">
                                <td align="right">ii.</td>
                                <td colspan="3">demonstrates internal/external locus of control</td>
                            </tr>
                            <tr ng-show="showList1">
                                <td align="right">iii.</td>
                                <td colspan="3">Knows her/his way of dealing with people, events, and things</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td ng-click="showList2 = !showList2">Social Skills
                                    <span style="float:  right"><i class="fa fa-chevron-down"></i></span></td>
                                <td>Test</td>
                                <td></td>
                            </tr>
                            <tr ng-show="showList2">
                                <td align="right">i.</td>
                                <td colspan="3">Actively listens and pays attention to others.</td>
                            </tr>
                            <tr ng-show="showList2">
                                <td align="right">ii.</td>
                                <td colspan="3">Sees and appreciates others' point of view.</td>
                            </tr>
                            <tr ng-show="showList2">
                                <td align="right">iii.</td>
                                <td colspan="3">Draw attention of others when speaking in the class, school assembly and other occasions</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Emotion Skills</td>
                                <td>Test</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade" ng-controller="examination"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Create Co Scholastic Heads</div>
                        <div class="panel-body">
                            <div class="row" ng-repeat="data in ctrl.add">
                                <div class="col-lg-4">
                                    <md-input-container class="md-block">
                                        <input type="text" placeholder="Head Name" ng-model="ctrl.headname">
                                    </md-input-container>
                                </div>
                                <div class="col-lg-7">
                                    <md-chips  ng-model="ctrl.chapter"  md-transform-chip="transform($chip)" >
                                        <md-autocomplete
                                            md-selected-item="selectedItem"
                                            md-search-text="searchText"
                                            md-items="item in ctrl.newFruits"
                                            md-item-text="item"
                                            placeholder="Sub Heads"></md-autocomplete>
                                        <md-chip-template class="md-caption">
                                            @{{$chip.chapter}}&nbsp;&nbsp;&nbsp;&nbsp; 
                                        </md-chip-template>
                                    </md-chips>

                                </div>
                                <div class="col-lg-1">
                                    <span class="clearfix">&nbsp;<br></span>
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
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <md-button class='md-raised md-default'  data-dismiss='modal'>Close</md-button>
                    <input class="md-button md-raised md-primary" type="submit" data-dismiss='modal' value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
@endsection