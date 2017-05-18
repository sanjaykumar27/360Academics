@extends('layouts.app')
@section('content')
<br>

<div class="container-d" ng-controller="examination" >
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Exam</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <md-input-container class="md-block" >
                                <label>Select Term</label>&nbsp;
                                <select ui-select2 ng-model="ctrl.term">
                                    <option value="term1">Term 1</option>
                                    <option value="term2">Term 2</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" >
                                <label>Select Exam</label>&nbsp;
                                <select ui-select2  ng-model="ctrl.exam">
                                    <option value="fa1">PA1</option>
                                    <option value="fa2">Half Yearly</option>
                                    <option value="sa1">PA2</option>
                                    <option value="sa1">Yearly</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" > 
                                <label>Select Classes</label>&nbsp;
                                <select ui-select2 multiple  ng-model="past.class" required >
                                    <option  ng-value="class.id">NR</option>
                                    <option  ng-value="class.id">KG</option>
                                    <option  ng-value="class.id">I</option>
                                    <option  ng-value="class.id">II</option>
                                </select>
                            </md-input-container>
                        </div>
                        <div class="col-lg-3">
                            <md-input-container class="md-block" > 
                                <label>Select Section</label>&nbsp;
                                <select ui-select2 multiple  ng-model="past.section" required >
                                    <option  ng-value="class.id">A</option>
                                    <option  ng-value="class.id">B</option>
                                    <option  ng-value="class.id">C</option>
                                    <option  ng-value="class.id">D</option>
                                </select>
                            </md-input-container>
                        </div>
                    </div>

                    <div class="row" ng-repeat="data in ctrl.add">
                        <div class="col-lg-2">
                            <md-input-container class="md-block" > 
                                <label>Select Subject</label>&nbsp;
                                <select ui-select2   ng-model="past.subject" required >
                                    <option  ng-value="class.id">English</option>
                                    <option  ng-value="class.id">Hindi</option>
                                    <option  ng-value="class.id">Mathematics</option>
                                    <option  ng-value="class.id">Science</option>
                                </select>
                            </md-input-container>
                        </div>



                        <script type="text/javascript">
                            $(document).ready(function () {
                            $('#timepicker1').timepicker();
                            $('#timepicker2').timepicker();
                            });
                        </script>
                        <div class="col-lg-3">
                            <span class="clearfix">&nbsp;<br><br></span>
                            <md-datepicker name="date-from" ng-model="ctrl.examdate"  md-placeholder="Exam Date" md-min-date="minDate" 
                                           md-max-date="maxDate" required>
                            </md-datepicker>
                        </div>
                        <div class="col-lg-3">
                            <span class="clearfix">&nbsp;<br></span>
                            <label>Start Time</label>
                            <div class="input-group bootstrap-timepicker timepicker">

                                <input id="timepicker1" ng-model="singledata.startTime" type="text" class="form-control input-small">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <span class="clearfix">&nbsp;<br></span>
                            <label>End Time</label>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="timepicker2" ng-model="singledata.endTime" type="text" class="form-control input-small">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
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
                    <span class="clearfix">&nbsp;<br><br></span>
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-5"> 
                            <md-button class="md-raised md-default">Cancel</md-button>&nbsp;
                            <input type="submit" class="md-button md-raised md-primary" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" ng-controller="examination" >
        <div class="modal-dialog" style="max-width: 50%">
            <div class="modal-content"> 
                <div class="modal-body">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">Marks Distribution</div>
                        <div class="panel-body">
                            <div class="row" ng-repeat="item in subject_breakdown">  
                                <div class="col-lg-6">
                                    <span class="clearfix"></span>
                                    <md-checkbox md-no-ink ng-model="singledata.item"
                                                 ng-checked="selection.indexOf(item) > - 1"
                                                 ng-click="toggleSelection(item)">
                                        @{{ item}} 
                                    </md-checkbox>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control" type="text" placeholder="Marks">
                                </div>
                                <span class="clearfix">&nbsp;</span>
                            </div>  
                            <div class="col-lg-12 col-lg-offset-3">
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
<br><br><br>
@endsection