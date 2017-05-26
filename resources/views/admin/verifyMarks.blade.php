@extends('layouts.app')
@section('content')
<br><br>

<div class='container-d' ng-controller="examination">
    <div class='container-fluid'>
        <div class='panel panel-primary'>
            <div class='panel-heading'>Verify Marks of Students</div>
            <div class='panel-body '>

                <div class='row'>
                    <div class='col-lg-2'>
                        <md-input-container class="md-block" >
                            <label>Select Term</label>&nbsp;
                            <select ui-select2 ng-model="ctrl.term">
                                <option value="term1">Term 1</option>
                                <option value="term2">Term 2</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class='col-lg-2'>
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
                    <div class='col-lg-2'>
                        <md-input-container class="md-block" > 
                            <label>Select Classes</label>&nbsp;
                            <select ui-select2  ng-model="past.class" required >
                                <option  ng-value="class.id">NR</option>
                                <option  ng-value="class.id">KG</option>
                                <option  ng-value="class.id">I</option>
                                <option  ng-value="class.id">II</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class='col-lg-2'>
                        <md-input-container class="md-block" > 
                            <label>Select Section</label>&nbsp;
                            <select ui-select2  ng-model="past.class" required >
                                <option  ng-value="section.id">A</option>
                                <option  ng-value="section.id">B</option>
                                <option  ng-value="section.id">C</option>
                                <option  ng-value="section.id">D</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class='col-lg-3'>
                        <md-input-container class="md-block" > 
                            <label>Subject Criteria</label>&nbsp;
                            <select ui-select2  ng-model="past.class" required >
                                <option  ng-value="section.id">Scholastic</option>
                                <option  ng-value="section.id">Co Scholastic</option>
                            </select>
                        </md-input-container>
                    </div>
                    <div class='col-lg-12 col-lg-offset-10'>
                        <span class='clearfix'>&nbsp;<br></span>
                        <a href='' class='md-button md-raised md-primary'>Search</a>
                    </div>
                </div>
            </div>
            <span class='clearfix'>&nbsp;<br></span>
            <p class='label label-info md-body-2' style="margin-left: 65px;">Scholastic </p>
            <div class='row md-padding'>
                <div class='col-lg-12'>
                    <div class='table-responsive'>
                        <table class='table table-bordered table-hover' style="width: 100%; overflow-x: scroll; display:block; text-align: center">
                            <tr class='info'>
                                <td width='10%'>Roll No [verify]</td>
                                <td width='20%'>Student Name</td>
                                <td>English</td>
                                <td>Hindi</td>
                                <td>Maths</td>
                                <td>Science</td>
                                <td>Social Studies</td>
                                <td>Sanskrit</td>
                            </tr>
                            <tr class='warning'>
                                <td><md-checkbox aria-label="Select All"
                                             ng-checked="isChecked()"
                                             md-indeterminate="isIndeterminate()"
                                             ng-click="toggleAll()">
                                <span ng-if="isChecked()">Un-</span>Select All
                            </md-checkbox></td>
                            <td >Maximum Marks</td>
                            <td>100</td>
                            <td>100</td>
                            <td>80</td>
                            <td>80</td>
                            <td>100</td>
                            <td>100</td>
                            </tr>
                            <tr ng-repeat="items in display">
                                <td>
                                    <div layout="row" layout-wrap flex>
                                        <div class="demo-select-all-checkboxes" flex="100" >
                                            <md-checkbox ng-checked="exists(items, selected)" ng-click="toggle(items, selected)">
                                                @{{ items}}
                                            </md-checkbox>
                                        </div>
                                    </div>
                                </td>

                                <td>Sanjay Kumar</td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <div class="col-lg-12 col-lg-offset-10">
                    <input type="submit" name="Submit" class="md-button md-raised md-primary">
                </div>
            </div>

            <span class='clearfix'>&nbsp;<br></span>
            <p class='label label-primary md-body-2' style="margin-left: 65px;">Co Scholastic </p>

            <div class='row md-padding'>
                <div class='col-lg-12'>
                    <div class='table-responsive'>
                        <table class='table table-bordered' style="overflow-x: scroll; display: block; text-align: center">
                            <tr>
                                <td width='10%'>Roll No [verify]</td>
                                <td width='20%'>Student Name</td>
                                <td colspan="5" class='info'>Self Awareness</td>
                                <td colspan="4" class='danger'>Problem Solving</td>
                                <td colspan="4" class='warning'>Decision Making</td>
                                <td colspan="5" class='success'>Creative Thinking</td>
                            </tr>
                            <tr >
                                <td rowspan="2"><md-checkbox aria-label="Select All"
                                                         ng-checked="isChecked()"
                                                         md-indeterminate="isIndeterminate()"
                                                         ng-click="toggleAll()">
                                <span ng-if="isChecked()">Un-</span>Select All
                            </md-checkbox></td>
                            <td rowspan="2">Maximum Marks</td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Is aware of his/her physical/social and emotional self</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Self respecting</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Aware of his/her strengths and weaknesses</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Adopts optimistic approach</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Has the confidence to face challenges</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Finds a workable solution to the problem</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x fa-2x'></i>
                                    <md-tooltip md-direction='top'>Handles various problems effectively</md-tooltip>
                                </span>
                            </td>

                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Identifies and states the problem</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Views problems as a stepping stone to success</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Is decisive and convincing</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Is able to find different alternatives to solve problems</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Is able to analyse the alternatives critically</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Takes decisions logically</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Ability to find creative and constructive solutions to problems and issues</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Is independent in thinking</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Has fluency in expression</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Has rich imagination and is able to think out of the box</md-tooltip>
                                </span>
                            </td>
                            <td>
                                <span><i class='fa fa-info-circle fa-2x'></i>
                                    <md-tooltip md-direction='top'>Can make independent judgment in crucial matters</md-tooltip>
                                </span>
                            </td>


                            </tr>
                            <tr class='warning'>

                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr ng-repeat="item in displayy">
                                <td>
                                    <div layout="row" layout-wrap flex>
                                        <div class="demo-select-all-checkboxes" flex="100" >
                                            <md-checkbox ng-checked="exists(item, selected)" ng-click="toggle(item, selected)">
                                                @{{ item}}
                                            </md-checkbox>
                                        </div>
                                    </div>
                                </td>
                                <td>Sanjay Kumar</td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                                <td><input type='text' class='form-control'></td>
                            </tr>

                        </table>

                    </div>
                </div>
                 <div class="col-lg-12 col-lg-offset-10">
                    <input type="submit" name="Submit" class="md-button md-raised md-primary">
                </div>
            </div>
            
            <span class='clearfix'>&nbsp;</span>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@endsection