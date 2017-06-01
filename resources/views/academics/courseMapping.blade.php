@extends('layouts.app')
@section('content')
<br>
<div class="container"  ng-controller="examination">
    <div class="col-lg-12">
        <div class="panel panel-primary" >
            <div class="panel-heading">Create Term Exam Association</div>
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
                <div class="row" ng-repeat="data in ctrl.add">
                    <div class="col-lg-2">
                        <md-input-container class="md-block">
                            <label>Topic Grouping / Unit</label>&nbsp;
                            <input type="text" name="topic grouping">
                            
                        </md-input-container>
                    </div>
                    <div class="col-lg-2">
                        <md-input-container class="md-block">
                            <label>Chapters</label>&nbsp;
                            <input type="text" name="chapter name">
                        </md-input-container>
                    </div>
                    <div class="col-lg-2">
                        <span class="clearfix">&nbsp;</span>
                        <md-chips  ng-model="ctrl.topics"  md-transform-chip="transform($chip)" >
                            <md-autocomplete
                                md-selected-item="selectedItem"
                                md-search-text="searchText"
                                md-items="item in ctrl.newTopics"
                                md-item-text="item"
                                placeholder="Topics"></md-autocomplete>
                            <md-chip-template class="md-caption">
                                @{{$chip.topics}}&nbsp;&nbsp;&nbsp;&nbsp; 
                            </md-chip-template>
                        </md-chips><br>
                    </div>
                    <div class="col-lg-1" style="width: 2%">
                        <span class="clearfix">&nbsp;<br><br><BR></span>
                        <span><i class="fa fa-info-circle md-title" style="color: blue;">
                                <md-tooltip>Enter topic one by one and press enter.</md-tooltip>
                            </i>
                        </span>
                    </div>
                    
                    <style> 
                        .md-datepicker-calendar-pane{
                            z-index: 1200;
                        }
                    </style>
                    <div class="col-lg-3">
                        <span><br><br></span>
                        <md-datepicker class="md-caption" name="dob" ng-model="data.start_date"  md-placeholder="Exp Start Date" md-min-date="minDate" 
                                       md-max-date="maxDate" required>
                        </md-datepicker>
                    </div>
                    <div class="col-lg-1">
                        <label>Periods</label><br><br>
                        <input type="text" name="periods" class="form-control">
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
                        <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" style="background-color: #fc7070" ng-click="removeplus($index)" ng-show="$index != 0">
                            <i class="material-icons">remove</i>
                            <md-tooltip md-visible="demo.remove_row" md-direction="" >
                                Remove Row
                            </md-tooltip>
                        </md-button>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-12">
                        <md-input-container class="md-block">
                            <label>Summary</label>&nbsp;
                            <input type="text" name="Summary">
                        </md-input-container>
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
<br><br><br>
@endsection