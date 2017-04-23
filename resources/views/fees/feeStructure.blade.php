@extends('layouts.app')
@section('content')

<br>

<body ng-app="app">  
    <div class="d-container">
        <div class="container">
            <md-toolbar class="d-listing_toolbar"> 
                <div class="d-listing_toolbar_title pull-left"> 
                    <span>Add Fee Structure</span> 
                </div>
                <div class="d-toolbar_icon pull-right">  
                    <md-button aria-label="edit" ng-href="{{ url('/add_fee_structure')}}" class="md-fab md-mini md-raised md-mini pull-right">
                        <i class="material-icons">add</i>
                        <md-tooltip md-visible="demo.add_fee_structure" md-direction="demo.add_fee_structure">
                            Add Fee Structure
                        </md-tooltip>
                    </md-button>
                </div>
            </md-toolbar>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Class</th> 
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($feearray as $key => $value) {  ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td> 
                                    <a data-toggle="modal" href='#modal-id<?php echo $i ?>'><?php echo $value['classname'] ?></a>
                                    <div class="modal fade" id="modal-id<?php echo $i ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content"> 
                                                <div class="modal-body">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th> Fee Component</th>
                                                                <th> Installments</th>
                                                                <th> Amount</th>
                                                                <th> Actions</th>
                                                            </tr>
                                                        </thead>   
                                                        <tbody>
                                                          <?php foreach($feearray[$key]['componentname'] as $k => $val) { ?>
                                                            <tr>
                                                                <td><a href="#"><?php echo $k ?></a></td>
                                                                <td><a href="#">1 </a></td>
                                                                <td><a href="#">₹ <?php echo $val ?></a></td>
                                                                <td>
                                                                    <div ng-controller="ActionsForm as action" layout="column" ng-cloak> 
                                                                        <div class="lock-size" layout="row" layout-align="center center">
                                                                            <md-fab-speed-dial md-open="action.isOpen" md-direction="action.selectedDirection"
                                                                                               ng-class="action.selectedMode">
                                                                                <md-fab-trigger>
                                                                                    <md-button aria-label="menu" class="md-fab md-mini md-warn d-action_button">
                                                                                        <i class="material-icons">more_vert</i>
                                                                                    </md-button>
                                                                                </md-fab-trigger> 
                                                                                <md-fab-actions>
                                                                                    <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini">
                                                                                        <i class="material-icons">mode_edit</i>
                                                                                    </md-button>
                                                                                    <md-button aria-label="Facebook" class="md-fab md-mini md-raised md-mini">
                                                                                        <i class="material-icons">delete</i>
                                                                                    </md-button> 
                                                                                </md-fab-actions>
                                                                            </md-fab-speed-dial>
                                                                        </div>   
                                                                    </div>
                                                                </td>
                                                           </tr>   
                                                          <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td> 
                                <td>
                                    <a data-toggle="modal" href='#modal-id<?php echo $i ?>'><?php echo $value['total']; ?></a>
                                </td>

                            </tr>  
                        <?php  $i++; } ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
    <br><br><br><br>
</body>
@endsection