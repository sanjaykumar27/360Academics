@extends('layouts.app')
@section('content')
<br>

<div class="container-d" ng-controller="examination">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <md-toolbar class="d-listing_toolbar">
                    <div class="d-listing_toolbar_title pull-left"> 
                        <span>Exam Blueprint</span> 
                    </div>
                    <div class="d-toolbar_icon pull-right">
                        &nbsp;
                        <md-button  class="md-fab md-mini md-raised md-mini pull-right">
                            <a href="{{url('exam_blueprint')}}">
                                <i class="material-icons">add</i>
                                <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                    Create Exam Blueprint
                                </md-tooltip> </a>
                        </md-button>&nbsp;&nbsp;

                        <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                            <i class="material-icons">search</i>
                            <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                                Search Exam Blueprint
                            </md-tooltip>
                        </md-button>
                    </div>
                </md-toolbar>
                <div class="panel-body">
                    <h4 align="center">Half Yearly Question Paper Design<br>[ 2017-18 ]</h4>
                    <table class="table table-bordered">

                        <tr class="info">
                            <td>S.no</td>
                            <td>Typology of Question</td>
                            <td>Topics / Points</td>
                            <td>Very Short Answer [1 Mark]</td>
                            <td>Short Answer [2 Mark]</td>
                            <td>Short Answer II [3 Mark]</td>
                            <td>Long Answer [4 Mark]</td>
                            <td>Total Marks</td>
                            <td>% Weightage (approx.)</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Remembering</td>
                            <td align="justify">Knowledge based-
                                Simple recall questions, to know
                                specific facts, terms, concepts,
                                principles or theories; Identify,
                                define, or recite, information.
                            </td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>20</td>
                            <td>25 %</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Understanding</td>
                            <td align="justify">Comprehensionto
                                be familiar with meaning and
                                to understand conceptually, interpret,
                                compare, contrast, explain,
                                paraphrase, or interpret
                                information
                            </td>
                            <td>2</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>23</td>
                            <td>29 %</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Application</td>
                            <td align="justify">Use abstract information
                                in concrete situation, to
                                apply knowledge to new situation;
                                Use given content to interpret
                                a situation, provide an example,
                                or solve a problem
                            </td>
                            <td>2</td>
                            <td>2</td>
                            <td>3</td>
                            <td>1</td>
                            <td>19</td>
                            <td>24 %</td>
                        </tr>
                        <tr >
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>6 x 1</td>
                            <td>6 x 2</td>
                            <td>10 x 3</td>
                            <td>8 x 4</td>
                            <td>80</td>
                            <td>100 %</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-body clearfix">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Search Exam Blueprint</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <md-input-container class="md-block">
                                        <label>Select Class</label>&nbsp;
                                        <select ui-select2 ng-model="ctrl.term">
                                            <option value="term1">I</option>
                                            <option value="term2">II</option>
                                            <option value="term2">III</option>
                                            <option value="term2">IV</option>
                                        </select>
                                    </md-input-container>
                                </div>
                                <div class="col-lg-3">
                                    <md-input-container class="md-block">
                                        <label>Select Subject</label>&nbsp;
                                        <select ui-select2 ng-model="ctrl.term">
                                            <option value="term1">English</option>
                                            <option value="term2">Hindi</option>
                                            <option value="term2">Maths</option>
                                            <option value="term2">Science</option>
                                        </select>
                                    </md-input-container>
                                </div>
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
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <md-button class="md-raised md-default">Cancel</md-button>
                                    <input type="submit" class="md-button md-raised md-primary" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<br><br><br><br>
@endsection