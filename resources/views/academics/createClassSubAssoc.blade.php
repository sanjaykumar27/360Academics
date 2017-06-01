@extends('layouts.app')
@section('content')

<br>
<div class="d-container" >
    <div class="container" ng-controller="subjectteacherassoc" ng-cloak>
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
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                    <md-input-container class="md-block" >
                        <label>Select Class</label>
                        <md-select name="section" id="section" ng-model="ctrl.class" name="selectedsubject" required
                                   ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''">
                            <md-option >NR</md-option>
                            <md-option >KG</md-option>
                            <md-option >PR</md-option>
                            <md-option >I</md-option>
                        </md-select> 

                    </md-input-container>
                </div>
                <div ng-cloak>
                    <md-content>
                        <md-tabs md-dynamic-height md-border-bottom>
                            <br>
                            <md-tab label="@{{ ctrl.class }} - A">
                                <md-content class="md-padding">
                                    <div class='row' ng-repeat="past in singledata.pluses">
                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2' >
                                            <md-input-container class="md-block">
                                                <label>Period</label>
                                                <md-select  name="section" id="section" id="section" ng-model="past.periods" name="selectedsubject" required
                                                            ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''">
                                                    <md-option >Assembly</md-option>
                                                    <md-option >I</md-option>
                                                    <md-option >II</md-option>
                                                    <md-option >III</md-option>
                                                    <md-option >IV</md-option>
                                                    <md-option >Interval</md-option>
                                                    <md-option >V</md-option>
                                                    <md-option >VI</md-option>
                                                    <md-option >VIII</md-option>
                                                </md-select> 
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-3' >
                                            <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                <label>Subject</label>
                                                <md-select ng-model="past.subject" name="selectedsubject" required
                                                           ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''" > 
                                                    <md-option value="1">English</md-option>
                                                    <md-option value="2">Hindi</md-option>
                                                    <md-option value="3">Maths</md-option>
                                                    <md-option value="4">Social Studies</md-option>
                                                    <md-option value="5">Games</md-option>
                                                </md-select>
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-3' >
                                            <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                <label>Teacher</label>
                                                <md-select ng-model="past.teacher" name="selectedteacher" required
                                                           ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''" > 
                                                    <md-option value="1">Sanjay</md-option>
                                                    <md-option value="2">Prateek</md-option>
                                                    <md-option value="3">Arpit</md-option>
                                                    <md-option value="4">Anuradha</md-option>
                                                    <md-option value="5">Sneha</md-option>
                                                </md-select>
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                            <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                <label>Remarks</label>
                                                <input  type="text" id="remarks" ng-model="newctrl.remarks"  name="remarks" required>
                                            </md-input-container>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-1">
                                            <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini" ng-click="addplus()" ng-show="$index==0" >
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
                                </md-content>
                            </md-tab>
                            <md-tab label="@{{ ctrl.class }} - B">
                                <md-content class="md-padding">
                                    <div class='row' ng-repeat="past in singledata.pluses">
                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2' >
                                            <md-input-container class="md-block">
                                                <label>Period</label>
                                                <md-select  name="section" id="section" id="section" ng-model="past.periods" name="selectedsubject" required
                                                            ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''">
                                                    <md-option >Assembly</md-option>
                                                    <md-option >I</md-option>
                                                    <md-option >II</md-option>
                                                    <md-option >III</md-option>
                                                    <md-option >IV</md-option>
                                                    <md-option >Interval</md-option>
                                                    <md-option >V</md-option>
                                                    <md-option >VI</md-option>
                                                    <md-option >VIII</md-option>
                                                </md-select> 
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-3' >
                                            <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                <label>Subject</label>
                                                <md-select ng-model="past.subject" name="selectedsubject" required
                                                           ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''" > 
                                                    <md-option value="1">English</md-option>
                                                    <md-option value="2">Hindi</md-option>
                                                    <md-option value="3">Maths</md-option>
                                                    <md-option value="4">Social Studies</md-option>
                                                    <md-option value="5">Games</md-option>
                                                </md-select>
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-3' >
                                            <md-input-container class="md-block" ng-class="(submitSearchStu && !frmsearch.section.$valid) ? 'd-validation-error' : ''" flex-gt-sm>
                                                <label>Teacher</label>
                                                <md-select ng-model="past.teacher" name="selectedteacher" required
                                                           ng-class="(submitted && !fees.selectedClass.$valid) ? 'd-validation-error' : ''" > 
                                                    <md-option value="1">Sanjay</md-option>
                                                    <md-option value="2">Prateek</md-option>
                                                    <md-option value="3">Arpit</md-option>
                                                    <md-option value="4">Anuradha</md-option>
                                                    <md-option value="5">Sneha</md-option>
                                                </md-select>
                                            </md-input-container>
                                        </div>

                                        <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' >
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
                                </md-content>
                            </md-tab>
                        </md-tabs>
                    </md-content>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <md-button class="md-raised md-button">Cancle</md-button>&nbsp;&nbsp;&nbsp;
                    <md-button class="md-raised md-primary">Save</md-button>
                </div>
            </div><br>
            


        </form>
    </div>

</div>

@endsection
