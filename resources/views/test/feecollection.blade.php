
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>

        <!-- PAGE TITLE -->
        <title>360 Degree </title>

        <!-- META-DATA -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                <meta name="description" content="" >
                    <meta name="keywords" content="" >

                        <!-- CSS:: FONTS -->
                        <!-- CSS:: FONTS -->
                        <link rel="stylesheet" type="text/css" href="http://127.0.0.1/360d/assets/css/font-awesome.min.css">  
                            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500" rel="stylesheet"> 
                                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                    <link rel="shortcut icon" href="http://127.0.0.1/360d/assets/images/icon/favicon.ico" type="text/css"/>

                                    <!-- CSS:: BOOTSTRAP -->	
                                    <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/bootstrap.min.css">     

                                        <!-- CSS:: ANGULAR -->  
                                        <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/angular-material.min.css">
                                            <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/select2.css">
                                                <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/sweetalert.css">
                                                    <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/ui-cropper.css">

                                                        <!-- CSS:: -->
                                                        <link rel="stylesheet" type="text/css" href="http://127.0.0.1/360d/assets/css/reset.css">
                                                            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/360d/assets/css/main.css"> 
                                                                <link rel="stylesheet" href="http://127.0.0.1/360d/assets/css/intlTelInput.css">
                                                                    <script>
                                                                        window.Laravel = {"csrfToken": "Gqn6LxrPysbKtpEJO9Fi5NBxmGxKcUJ4iOP4hkEK"}</script> 
                                                                    </head>
                                                                    <body ng-app="app" ng-cloak> 
                                                                        <input type="text" id="path" name="path" value="http://127.0.0.1/360d" style="display: none;"/>
                                                                        <div id="loader"></div>
                                                                        <div class="d-wrapper d-master d-wrapper-popup" ng-controller="StudentInstallmntsController" ng-cloak >
                                                                            <div class="col-md-12 g-payment_process" id="main" ng-class="(student_search == 1) ? 'hide' : ''">
                                                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                                    <div class="panel-default">
                                                                                        <div class="panel-heading" role="tab" >
                                                                                            <h4 class="panel-title"> <a role="button"  aria-expanded="true" aria-controls="collapseOne"> Student Information </a> </h4>
                                                                                        </div>
                                                                                        <div class="panel-collapse collapse in"  aria-labelledby="headingOne">
                                                                                            <div class="panel-body student-info">
                                                                                                <div class="row clearfix">
                                                                                                    <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10">
                                                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                                                            <md-input-container class="md-block ng-pristine ng-untouched ng-valid md-input-has-value" ng-model="ctrl.iname" aria-invalid="false">
                                                                                                                <label for="input_9">SCHOLAR No.</label>
                                                                                                                S1002                  </md-input-container>
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                                                            <md-input-container class="md-block ng-pristine ng-untouched ng-valid md-input-has-value" ng-model="ctrl.icode" aria-invalid="false">
                                                                                                                <label for="input_10">CLASS</label>
                                                                                                                NR-A                  </md-input-container>
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                                                            <md-input-container class="md-block ng-pristine ng-untouched ng-valid md-input-has-value" ng-model="ctrl.icode" aria-invalid="false">
                                                                                                                <label for="input_10">STUDENT NAME</label>
                                                                                                                Sanjay Junior Chaurasia                  </md-input-container>
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                                                            <md-input-container class="md-block ng-pristine ng-untouched ng-valid md-input-has-value" ng-model="ctrl.icode" aria-invalid="false">
                                                                                                                <label for="input_10">FATHER'S NAME</label>
                                                                                                                Chandra                   </md-input-container>
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                                                                            <md-input-container class="md-block ng-pristine ng-untouched ng-valid md-input-has-value" ng-model="ctrl.icode" aria-invalid="false">
                                                                                                                <label for="input_10">Fee Rule(s)</label>
                                                                                                                N/A                  </md-input-container>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Fee Due </a> </h4>
                                                                                        </div>
                                                                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                                                                            <div class="panel-body"> 
                                                                                                <div class="d-pay_months">
                                                                                                    <div class="d-pay_month_single" ng-repeat="instdata in installmentdata"> 
                                                                                                        <div class="d-pay_month_forms" ng-if="instdata.paidinstallments == 0">
                                                                                                            <div class="table-responsive">
                                                                                                                <table class="table table-striped table-bordered table-hover paynow-table">
                                                                                                                    <thead>
                                                                                                                        <tr>
                                                                                                                            <th colspan="5" class="ng-binding d-unpaid" ng-class="(instdata.installmentdata.late_fee > 0) ? '' : 'd-future'" align="center">
                                                                                                                                <md-checkbox  aria-label="checkbox" ng-true-value="true" ng-false-value="false" ng-change="select_due_installment($index)" ng-model="instdata.pay_installment" >  </md-checkbox>
                                                                                                                                @{{instdata.installmentdata.month}}
                                                                                                                                <div class="d-amount_pay">
                                                                                                                                    <b>Amount:</b> @{{instdata.paymodecustomAmount}} /-
                                                                                                                                </div>
                                                                                                                                <div class="d-arrow_toggle pull-right" ng-click="togglemonth($index)">
                                                                                                                                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                                                                                                                    <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                                                                                                                                </div>
                                                                                                                            </th>
                                                                                                                        </tr>
                                                                                                                    </thead> 
                                                                                                                    <tbody ng-class="showmonth[$index] ? 'hide' : ''">
                                                                                                                        <tr class="ng-scope" style="">
                                                                                                                            <td colspan="5">
                                                                                                                                <table class="table table-striped table-bordered table-hover">
                                                                                                                                    <tbody>
                                                                                                                                        <tr ng-repeat="complistdata in (instdata.feeComDetailData)">
                                                                                                                                            <td colspan="5" >
                                                                                                                                                <table class="table table-striped table-bordered table-hover">
                                                                                                                                                    <tr>
                                                                                                                                                        <td><md-checkbox aria-label="Checkbox No Ink" ng-model="instdata.feePay.compId[complistdata.fee_structure_details_id]" ng-init="instdata.feePay.compId[complistdata.fee_structure_details_id] = false" ng-true-value="true" ng-false-value="false" class="md-primary" ng-change="update_adjust_fee(complistdata.fee_structure_details_id, $parent.$index)"> </md-checkbox></td>
                                                                                                                                                        <td><strong>@{{complistdata.component}}</strong></td>
                                                                                                                                                        <td><input type="number" min="0" ng-init="instdata.feePay.orignalfee[complistdata.fee_structure_details_id] = complistdata.amount" ng-model="instdata.feePay.orignalfee[complistdata.fee_structure_details_id]" disabled="" class="form-control" placeholder="Orignal Fee"></td>

                                                                                                                                                        <td><input ng-init="instdata.feePay.adjustfee[complistdata.fee_structure_details_id] = ''" type="number" min="0" ng-model="instdata.feePay.adjustfee[complistdata.fee_structure_details_id]" ng-disabled="instdata.feePay.compId[complistdata.fee_structure_details_id] == false" ng-change="updateTotalPayAmount($parent.$index, complistdata.fee_structure_details_id)" ng-model-options="{debounce: 600}" class="form-control" ng-value="" placeholder="Collect Fee"></td>
                                                                                                                                                    </tr> 
                                                                                                                                                    <tr ng-hide="instdata.feePay.compId[complistdata.fee_structure_details_id] == false">
                                                                                                                                                        <td><strong>Remarks</strong></td>
                                                                                                                                                        <td colspan="3" ng-class="(submitPayNow && (instdata.feePay.remarkfee[complistdata.fee_structure_details_id].trim() == '') && (instdata.feePay.compId[complistdata.fee_structure_details_id] == true)) ? 'd-validation-error' : ''" ><textarea ng-init="instdata.feePay.remarkfee[complistdata.fee_structure_details_id] = ''" ng-disabled="instdata.feePay.compId[complistdata.fee_structure_details_id] == false" class="form-control" ng-model="instdata.feePay.remarkfee[complistdata.fee_structure_details_id]" rows="2" ng-value="" placeholder="Remarks"></textarea>
                                                                                                                                                            <div ng-show="submitPayNow && (instdata.pay_installment) && (instdata.feePay.remarkfee[complistdata.fee_structure_details_id].trim() == '') && (instdata.feePay.compId[complistdata.fee_structure_details_id] == true)" class="errormessageshow ng-active">
                                                                                                                                                                <div>You can&#039;t leave this field empty</div>
                                                                                                                                                            </div>
                                                                                                                                                        </td>
                                                                                                                                                    </tr> 
                                                                                                                                                </table>
                                                                                                                                            </td>																
                                                                                                                                        </tr>
                                                                                                                                        <tr ng-repeat="sublistdata in (instdata.subjectDetailData)">
                                                                                                                                            <td colspan="5" >
                                                                                                                                                <table class="table table-striped table-bordered table-hover">
                                                                                                                                                    <tr>
                                                                                                                                                        <td><md-checkbox aria-label="Checkbox No Ink" ng-model="instdata.subPay.compId[sublistdata.class_subject_id]" ng-init="instdata.subPay.compId[sublistdata.class_subject_id] = false" ng-true-value="true" ng-false-value="false" class="md-primary" ng-change="update_adjust_subjectfee(sublistdata.class_subject_id, $parent.$index)"> </md-checkbox></td>
                                                                                                                                                        <td><strong>@{{sublistdata.subject}}</strong></td>
                                                                                                                                                        <td><input type="number" min="0" ng-init="instdata.subPay.orignalfee[sublistdata.class_subject_id] = sublistdata.amount" ng-model="instdata.subPay.orignalfee[sublistdata.class_subject_id]" disabled="" class="form-control" placeholder="Orignal Fee"></td>

                                                                                                                                                        <td><input ng-init="instdata.subPay.adjustfee[sublistdata.class_subject_id] = ''" type="number" min="0" ng-model="instdata.subPay.adjustfee[sublistdata.class_subject_id]" ng-disabled="instdata.subPay.compId[sublistdata.class_subject_id] == false" ng-change="updateTotalPayAmount($parent.$index, sublistdata.class_subject_id)" ng-model-options="{debounce: 600}" class="form-control" ng-value="" placeholder="Collect Fee"></td>
                                                                                                                                                    </tr> 
                                                                                                                                                    <tr ng-hide="instdata.subPay.compId[sublistdata.class_subject_id] == false">
                                                                                                                                                        <td><strong>Remarks</strong></td>
                                                                                                                                                        <td colspan="3" ng-class="(submitPayNow && (instdata.subPay.remarkfee[sublistdata.class_subject_id].trim() == '') && (instdata.subPay.compId[sublistdata.class_subject_id] == true)) ? 'd-validation-error' : ''" ><textarea ng-init="instdata.subPay.remarkfee[sublistdata.class_subject_id] = ''" ng-disabled="instdata.subPay.compId[sublistdata.class_subject_id] == false" class="form-control" ng-model="instdata.subPay.remarkfee[sublistdata.class_subject_id]" rows="2" ng-value="" placeholder="Remarks"></textarea>
                                                                                                                                                            <div ng-show="submitPayNow && (instdata.pay_installment) && (instdata.subPay.remarkfee[sublistdata.class_subject_id].trim() == '') && (instdata.subPay.compId[sublistdata.class_subject_id] == true)" class="errormessageshow ng-active">
                                                                                                                                                                <div>You can&#039;t leave this field empty</div>
                                                                                                                                                            </div>
                                                                                                                                                        </td>
                                                                                                                                                    </tr> 
                                                                                                                                                </table>
                                                                                                                                            </td>																
                                                                                                                                        </tr>

                                                                                                                                        <tr ng-if="instdata.installmentdata.late_fee > 0">
                                                                                                                                            <td colspan="5" >
                                                                                                                                                <table class="table table-striped table-bordered table-hover">
                                                                                                                                                    <tr>
                                                                                                                                                        <td><md-checkbox aria-label="Checkbox No Ink" ng-model="instdata.latefeepay.LateFeeId" ng-true-value="true" ng-false-value="false" class="md-primary" ng-change="update_adjust_latefee($parent.$index)"> </md-checkbox></td>
                                                                                                                                                        <td><strong>Late Fee</strong></td>
                                                                                                                                                        <td><input type="number"  min="0" ng-model="instdata.latefeepay.orignalLateFee"  disabled=""  class="form-control"  placeholder="Orignal Fee"></td>
                                                                                                                                                        <td><input type="number" min="0" ng-model="instdata.latefeepay.LateFeeAdjust" ng-disabled="instdata.latefeepay.LateFeeId == false" ng-change="updateTotalPayAmount($parent.$index)" class="form-control" placeholder="Collect Late Fee" ng-model-options="{debounce: 600}"></td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr ng-hide="instdata.latefeepay.LateFeeId == false">
                                                                                                                                                        <td><strong>Remarks</strong></td>
                                                                                                                                                        <td colspan="3" ng-class="(submitPayNow && (instdata.latefeepay.LateFeeRemark.trim() == '') && (instdata.latefeepay.LateFeeId == true)) ? 'd-validation-error' : ''"><textarea class="form-control" ng-model="instdata.latefeepay.LateFeeRemark" ng-disabled="instdata.latefeepay.LateFeeId == false" rows="2" placeholder="Remarks"></textarea>
                                                                                                                                                            <div ng-show="submitPayNow && (instdata.pay_installment) && (instdata.latefeepay.LateFeeRemark.trim() == '') && (instdata.latefeepay.LateFeeId == true)" class="errormessageshow ng-active">
                                                                                                                                                                <div>You can&#039;t leave this field empty</div>
                                                                                                                                                            </div>
                                                                                                                                                        </td>
                                                                                                                                                    </tr> 
                                                                                                                                                </table>
                                                                                                                                            </td>																
                                                                                                                                        </tr>
                                                                                                                                        <tr ng-if="instdata.installmentdata.conveyance">
                                                                                                                                            <td colspan="5" >
                                                                                                                                                <table class="table table-striped table-bordered table-hover">
                                                                                                                                                    <tr>
                                                                                                                                                        <td><md-checkbox aria-label="Checkbox No Ink" ng-model="instdata.conveyancefeepay.ConveyanceFeeId" ng-true-value="true" ng-false-value="false" class="md-primary" ng-change="update_adjust_conveyancefee($parent.$index)"> </md-checkbox></td>
                                                                                                                                                        <td><strong>Conveyance Fee</strong></td>
                                                                                                                                                        <td><input type="number"  min="0" ng-model="instdata.conveyancefeepay.orignalConveyanceFee"  disabled=""  class="form-control"  placeholder="Orignal Fee"></td>
                                                                                                                                                        <td><input type="number" min="0" ng-model="instdata.conveyancefeepay.ConveyanceFeeAdjust" ng-disabled="instdata.conveyancefeepay.ConveyanceFeeId == false" ng-change="updateTotalPayAmount($parent.$index)" class="form-control" placeholder="Collect Conveyance Fee" ng-model-options="{debounce: 600}"></td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr ng-hide="instdata.conveyancefeepay.ConveyanceFeeId == false">
                                                                                                                                                        <td><strong>Remarks</strong></td>
                                                                                                                                                        <td colspan="3" ng-class="(submitPayNow && (instdata.conveyancefeepay.ConveyanceFeeRemark.trim() == '') && (instdata.conveyancefeepay.ConveyanceFeeId == true)) ? 'd-validation-error' : ''"><textarea class="form-control" ng-model="instdata.conveyancefeepay.ConveyanceFeeRemark" ng-disabled="instdata.conveyancefeepay.ConveyanceFeeId == false" rows="2" placeholder="Remarks"></textarea>
                                                                                                                                                            <div ng-show="submitPayNow && (instdata.pay_installment) && (instdata.conveyancefeepay.ConveyanceFeeRemark.trim() == '') && (instdata.conveyancefeepay.ConveyanceFeeId == true)" class="errormessageshow ng-active">
                                                                                                                                                                <div>You can&#039;t leave this field empty</div>
                                                                                                                                                            </div>
                                                                                                                                                        </td>
                                                                                                                                                    </tr> 
                                                                                                                                                </table>
                                                                                                                                            </td>																
                                                                                                                                        </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody> 
                                                                                                                </table>
                                                                                                            </div> 
                                                                                                        </div>
                                                                                                        <div class="d-pay_month_forms" ng-if="instdata.paidinstallments == 1">
                                                                                                            <div class="table-responsive">
                                                                                                                <table class="table table-striped table-bordered table-hover paynow-table">
                                                                                                                    <thead>
                                                                                                                        <tr>
                                                                                                                            <td class="d-paid" width="25%" >Installment-@{{instdata.month}}</td>
                                                                                                                            <td class="d-paid" width="25%"><b>Amount:</b> ₹@{{instdata.orignal_amount}}</td>
                                                                                                                            <td class="d-paid" width="25%">Date: @{{instdata.pay_date}} </td>
                                                                                                                            <td class="d-paid"width="25%" >Reciept -@{{instdata.receipt_id}}</td>                                                                 
                                                                                                                        </tr>
                                                                                                                    </thead> 
                                                                                                                </table>
                                                                                                            </div> 
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Three -->
                                                                                    <div class="panel panel-default" ng-if="checkbouncecheck == 1">
                                                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">Penalties</a> </h4>
                                                                                        </div>
                                                                                        <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                                            <div class="panel-body"> 
                                                                                                <!--Start -->
                                                                                                <div class="table-responsive">
                                                                                                    <table class="table table-striped table-bordered table-hover paynow-table">                
                                                                                                        <tbody>
                                                                                                            <tr>                   
                                                                                                                <td>Other Penalties </td>
                                                                                                                <td>Cheque Bounce</td>
                                                                                                                <td><input type="number"  min="0" ng-model="chequeBounceFee"  ng-init="chequeBounceFee = checkbounce.check_bounce_amount" disabled=""  class="form-control"  placeholder="Cheque Bounce"></td>
                                                                                                            </tr>
                                                                                                        </tbody>                
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End -->
                                                                                    <!-- Four -->
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                                                            <h4 class="panel-title"> <a class="collapsed" role="button"  data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsethree">Payment Mode</a> </h4>
                                                                                        </div>
                                                                                        <div id="collapsefour" class="panel-collapse " role="tabpanel" aria-labelledby="headingTwo">
                                                                                            <div class="panel-body"> 
                                                                                                <!--Start -->
                                                                                                <div class="table-responsive">
                                                                                                    <table class="table table-striped table-bordered table-hover paynow-table">                
                                                                                                        <tbody>
                                                                                                            <tr>                   
                                                                                                                <td>Fee Mode</td>

                                                                                                                <td colspan="2">

                                                                                                                    <md-radio-group ng-model="paymode.mode_type" ng-change="change_mode_type()" name="payment_type">
                                                                                                                        <md-radio-button value="cash">Cash</md-radio-button>
                                                                                                                        <md-radio-button value="cheque"> Cheque </md-radio-button>
                                                                                                                    </md-radio-group>
                                                                                                                </td>

                                                                                                            </tr>
                                                                                                            <tr>                   
                                                                                                                <td></td>
                                                                                                                <td ng-class="(submitPayNow && (paymode.bank_number.trim() == '') && (paymode.mode_type == 'cheque')) ? 'd-validation-error' : ''">
                                                                                                                    <input type="text" class="form-control"  placeholder="Bank name"  ng-model="paymode.bank_number" ng-disabled="paymode.mode_type == 'cash'">
                                                                                                                        <div ng-show="submitPayNow && (paymode.bank_number.trim() == '') && (paymode.mode_type == 'cheque')" class="errormessageshow ng-active">
                                                                                                                            <div>You can&#039;t leave this field empty</div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td ng-class="(submitPayNow && (paymode.cheque_number.trim() == '') && (paymode.mode_type == 'cheque')) ? 'd-validation-error' : ''">
                                                                                                                    <input type="text" class="form-control"  placeholder="Cheque Number" ng-model="paymode.cheque_number" ng-disabled="paymode.mode_type == 'cash'">
                                                                                                                        <div ng-show="submitPayNow && (paymode.cheque_number.trim() == '') && (paymode.mode_type == 'cheque')" class="errormessageshow ng-active">
                                                                                                                            <div>You can&#039;t leave this field empty</div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr>                   
                                                                                                                <td>Remarks</td>
                                                                                                                <td colspan="2"><textarea class="form-control" rows="2" ng-model="paymode.remarks" placeholder="Remarks"></textarea></td>
                                                                                                            </tr>
                                                                                                            <tr>                   
                                                                                                                <td>Amount Payable</td>
                                                                                                                <td colspan="2"><input ng-model="totalSelectedAmount" type="number" min="0" disabled="" class="form-control" placeholder="Amount Payable" ></td>
                                                                                                            </tr>
                                                                                                        </tbody>                
                                                                                                    </table>
                                                                                                </div>

                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 

                                                                                                    <button class="md-raised md-primary md-button md-ink-ripple" type="button" ng-click="installmentPayNow()"><span class="ng-scope">Pay Now</span><div class="md-ripple-container"></div></button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End -->
                                                                                </div>

                                                                            </div> 

                                                                            <div class="col-md-12 g-payment_process" id="main" ng-class="(student_search == 0) ? 'hide' : ''">


                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                                                        <h4 class="panel-title searct-student-part"> Search Student</h4>
                                                                                    </div>
                                                                                    <div id="collapsefour" class="panel-collapse " role="tabpanel" aria-labelledby="headingTwo">
                                                                                        <div class="panel-body searct-student-body"> 
                                                                                            <!--Start -->
                                                                                            <md-autocomplete md-selected-item="selectedItem" md-search-text="searchText" md-items="item in (allStuscholarList)" md-item-text="item.scholar_number" md-selected-item-change="studentupdate(item.id,item.class_id)" md-search-text-change="searchStudata(searchText)" ng-model-options="{debounce: 700}" >
                                                                                                <span md-highlight-text="searchText">@{{item.scholar_number}}|@{{item.student_name}}</span>
                                                                                            </md-autocomplete>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div> 
                                                                        </div>
                                                                        <!-- JQUERY:: BOOTSTRAP.JS --> 
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/jquery.min.js"></script>   
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/bootstrap.min.js"></script>   

                                                                        <!-- ANGULAR:: ANGULAR MATERIAL PACKAGE -->
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular-animate.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular-aria.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular-messages.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular-material.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/angular-sanitize.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/select2.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/select2_src.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/sweetalert.min.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/ui-cropper.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/intlTelInput.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/betsol-ng-intl-tel-input.js"></script>
                                                                        <script src="http://127.0.0.1/360d/assets/js/moment.min.js"></script>

                                                                        <!-- CUSTOM:: CUSTOM.JS -->
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/custom.min.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_login.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_module.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_role.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_country.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_state.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_city.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_locality.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_user.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_errorlog.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_institute.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_branch.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_header.js"></script>

                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_class.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_section.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_subject.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_collectiontype.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_collection.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_academicsession.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_class_structure.js"></script>

                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_classsubjectassoc.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_feecomponent.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_feeothercharge.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_feerule.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_student.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_fee_structure.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_home.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_reports.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_fees.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_studentservices.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/html2canvas.min.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/saveHtmlToPdf.min.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/jspdf.debug.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/FileSaver.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/pdfmake.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/vfs_fonts.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_sublocality.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_driver.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_vehicle.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_pickuppoint.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_mileage_entry.js"></script>
                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_fuel_entry.js"></script>

                                                                        <script type="text/javascript" src="http://127.0.0.1/360d/assets/js/controllers_route.js"></script>


                                                                        <script>
                                                                        </script>
                                                                    </body>
                                                                    </html> 	