@extends('layouts.app')
@section('content')

<br>

<div class="d-container">
    <div class="container">
        <md-toolbar class="d-listing_toolbar"> 
            <div class="d-listing_toolbar_title pull-left"> 
                <span>Fee Rule</span> 
            </div>
            <div class="d-toolbar_icon pull-right"> 
                <md-button aria-label="edit" ng-href="{{ url('/add_fee_rule')}}" class="md-fab md-mini md-raised md-mini pull-right">
                    <i class="material-icons">add</i>
                    <md-tooltip md-visible="demo.add_fee_rule" md-direction="@{{demo.add_fee_rule}}">
                        Add Fee Rule
                    </md-tooltip>
                </md-button> 
            </div>
        </md-toolbar>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>SNo.</th>
                        <th>Fee Rule Name</th> 
                        <th>More Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $feecomp = array();
                    foreach ($result as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td> 
                                <a data-toggle="modal" href='#modal-id<?php echo $i; ?>'><?php echo $value['feerulename']; ?></a>
                                <div class="modal fade" id="modal-id<?php echo $i; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content"> 
                                            <div class="modal-body">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Fee Component</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($value->FeeRuleDetail as $k => $val) {
                                                            ?>
                                                            <tr><td><?php echo $val->FeeComponent['feecomponent'] ?></td></tr>
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
                            <td width="20%">
                                <div ng-controller="ActionsForm as action" layout="column" ng-cloak> 
                                    <div class="lock-size" layout="row" layout-align="center center">
                                        <md-fab-speed-dial md-open="action.isOpen" md-direction="@{{action.selectedDirection}}"
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
                        <?php $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    </div>
</div>
</div>

@endsection