@extends('layouts.app')
@section('content')
<br><br>

<div class="d-container">
    <div class="container" ng-controller="examination">
        <md-toolbar class="d-listing_toolbar">
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Entrance Examination Syllabus</span> 
            </div>
            <div class="d-toolbar_icon pull-right">
                <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                    <i class="material-icons">add</i>
                    <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                        Add Syllabus
                    </md-tooltip>
                </md-button>
            </div>
        </md-toolbar>
        <div class="clearfix row">
            <div class="col-lg-3 d-search_side">
                <div class=" panel panel-default ">
                    <div class="panel-body">
                        <form method="post" name="frmsearch" id="frmsearch" novalidate="novalidate" >
                            <div class="col-lg-12">
                                <md-input-container class="md-block" >
                                    <label>Select Class</label>&nbsp;
                                    <select ui-select2 ng-model="ctrl.term">
                                        <option value="term1">NR</option>
                                        <option value="term2">KG</option>
                                        <option value="term2">I</option>
                                        <option value="term2">II</option>
                                    </select>
                                </md-input-container>
                            </div>
                            <div class="col-lg-12">
                                <md-input-container class="md-block" >
                                    <label>Select Subject</label>&nbsp;
                                    <select ui-select2  ng-model="ctrl.exam">
                                        <option value="fa1">English</option>
                                        <option value="fa2">Hindi</option>
                                        <option value="sa1">Maths</option>
                                        <option value="sa1">Sciene</option>
                                    </select>
                                </md-input-container>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                <md-button ng-click="filter()" class="md-raised md-primary">Search</md-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="7%">S.no</th>
                            <th width="20%">Subject</th>
                            <th>Chapters</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>English</td>
                            <td ng-click="showchapters = !showchapters"><a href="">Show Chapters
                                    <span>
                                        &nbsp;<i class="fa fa-chevron-down"></i>
                                    </span>
                                </a></td>
                            <td></td>
                        </tr>
                        <tr ng-show="showchapters" class="info">
                            <td></td>
                            <td colspan="3">i. Nouns</td>
                        </tr>
                        <tr ng-show="showchapters"  class="info">
                            <td></td>
                            <td colspan="3">ii. Adverb</td>
                        </tr>
                        <tr ng-show="showchapters"  class="info">
                            <td></td>
                            <td colspan="3">iii. Tense</td>
                        </tr>
                        <!-------------------->
                        <tr>
                            <td>2</td>
                            <td>Mathematics</td>
                            <td ng-click="showchaptersm = !showchaptersm"><a href="">Show Chapters
                                    <span>
                                        &nbsp;<i class="fa fa-chevron-down"></i>
                                    </span>
                                </a></td>
                            <td></td>
                        </tr>
                        <tr ng-show="showchaptersm" class="info">
                            <td></td>
                            <td colspan="3">i. Lines and Angles</td>
                        </tr>
                        <tr ng-show="showchaptersm"  class="info">
                            <td></td>
                            <td colspan="3">ii. Polynomials</td>
                        </tr>
                        <tr ng-show="showchaptersm"  class="info">
                            <td></td>
                            <td colspan="3">iii. Statistics</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="modal fade" id="myModal" >
            <div class="modal-dialog" style="max-width: 80%">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">Select Topics</div>
                            <div class="panel-body" >
                                <div class="row">
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
                                </div>
                                <div class="row" class="row" ng-repeat="data in ctrl.add">
                                    <div class="col-lg-3">
                                        <md-input-container class="md-block">
                                            <label>Subject</label>&nbsp;
                                            <select ui-select2 ng-model="singledata.timetable_name"   required >
                                                <option ng-value="season.id">English</option>
                                                <option ng-value="season.id">Hindi</option>
                                                <option ng-value="season.id">Maths</option>
                                            </select>
                                        </md-input-container>
                                    </div>
                                    <div class="col-lg-8">
                                        <md-input-container class="md-block">
                                            <md-input-container class="md-block">
                                                <label>Chapters</label>
                                                <textarea ng-model="user.biography" md-maxlength="500" rows="5" md-select-on-focus></textarea>
                                            </md-input-container>
                                        </md-input-container>
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
                                <div class="col-lg-6" align="right">
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
