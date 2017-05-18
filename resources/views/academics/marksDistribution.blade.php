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
                    <input  type="search" ng-model="search" ng-model-options="{
                                debounce: 700
                            }">
                </md-input-container>
            </div>
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Co Scholastic Association</span> 
            </div>
            <div class="d-toolbar_icon pull-right">
                <button ng-click="showme = true"  class="md-fab md-mini md-button md-ink-ripple" aria-label="Search  Co Scholastic Association">
                    <i class="material-icons">search</i>
                    <md-tooltip md-visible="demo.search" md-direction="demo.search">
                        Search Marks Distribution
                    </md-tooltip>
                </button>&nbsp; 

                <a aria-label="edit" on-click="" href="{{url('create_marks_distribution')}}" class="md-button md-fab md-mini md-raised md-mini pull-right">
                    <i class="material-icons">add</i>
                    <md-tooltip md-visible="demo.add_collectiontype" md-direction="demo.add_collectiontype">
                        Create Marks Distribution
                    </md-tooltip>
                </a>
            </div>
        </md-toolbar>
        <div class="clearfix row">
            <div class="col-lg-3 d-search_side">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="post" name="frmsearch" id="frmsearch" novalidate="novalidate" >
                            <div class="col-lg-12">
                                <md-input-container class="md-block" >
                                    <label>Select Term</label>&nbsp;
                                    <select ui-select2 ng-model="ctrl.term">
                                        <option value="term1">Term 1</option>
                                        <option value="term2">Term 2</option>
                                    </select>
                                </md-input-container>
                            </div>
                            <div class="col-lg-12">
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
                            <div class="col-lg-12">
                                <md-input-container class="md-block ">
                                    <label>Class</label>&nbsp;
                                    <select ui-select2 ng-model="singledata.Class"   required >
                                        <option ng-value="class.id">I</option>
                                        <option ng-value="class.id">II</option>
                                        <option ng-value="class.id">III</option>
                                        <option ng-value="class.id">IV</option>
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
                <div class="panel panel-primary">
                    <div class="panel-heading" ng-click="showSubjectMarks = !showSubjectMarks">Subject Marks
                        <span style="float: right"><i class="fa fa-chevron-down"></i></span></div>
                    <div class="panel-body" ng-show="showSubjectMarks">
                        <div class="table-responsive">
                            <table class="table table-hover table-hover table-bordered">
                                <tr class="info">
                                    <td>S.no</td>
                                    <td>Subject</td>
                                    <td>Code</td>
                                    <td>Marks</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>English</td>
                                    <td>E101</td>
                                    <td>100</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Hindi</td>
                                    <td>H100</td>
                                    <td>100</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Science</td>
                                    <td>S114</td>
                                    <td>80</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading" ng-click="showCoSubjectMarks = !showCoSubjectMarks">Co Scholastic Marks
                        <span style="float: right"><i class="fa fa-chevron-down"></i></span></div>
                    <div class="panel-body" ng-show="showCoSubjectMarks">
                        <div class="table-responsive">
                            <table class="table table-hover table-hover table-bordered">
                                <tr>
                                    <td width="10%">S.no</td>
                                    <td>Heads</td>
                                    <td>Remarks</td>
                                    <td>Marks</td>

                                </tr>

                                <tr class="info">
                                    <td>1</td>
                                    <td>Thinking Skills </td>
                                    <td>Test</td>
                                    <td></td>

                                </tr>
                                <tr >
                                    <td align="right" >i.</td>
                                    <td  colspan="2">Knows his/her strengths and weaknesses</td>
                                    <td> 5 </td>
                                </tr>
                                <tr >
                                    <td align="right" >ii.</td>
                                    <td colspan="2">demonstrates internal/external locus of control</td>
                                    <td> 5 </td>
                                </tr>
                                <tr >
                                    <td align="right" >iii.</td>
                                    <td colspan="2">Knows her/his way of dealing with people, events, and things</td>
                                    <td> 5 </td>
                                </tr>
                                <tr  class="info">
                                    <td>2</td>
                                    <td>Social Skills </td>
                                    <td>Test</td>
                                    <td></td>
                                </tr>
                                <tr >
                                    <td align="right" >i.</td>
                                    <td  colspan="2">Actively listens and pays attention to others.</td>
                                    <td> 5 </td>
                                </tr>
                                <tr>
                                    <td align="right"  >ii.</td>
                                    <td  colspan="2">Sees and appreciates others' point of view.</td>
                                    <td> 5 </td>
                                </tr>
                                <tr  >
                                    <td align="right" >iii.</td>
                                    <td  colspan="2">Draw attention of others when speaking in the class, school assembly and other occasions</td>
                                    <td> 5 </td>
                                </tr>
                                <tr  class="info">
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
    </div>
</div>

<br><br>
@endsection