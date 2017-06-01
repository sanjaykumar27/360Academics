@extends('layouts.studentregistration')
@section('content')
<style>
    .td-text{
        font-weight: 500;
    }
</style>
<div class="container" ng-controller="onlinestudentregistration">
    <div class="row">
        <span class="clearfix">&nbsp;<br><br></span>
        <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
            <div id="wid-id-0">
                <!-- widget div-->
                <div role="content">
                    <!-- widget content -->
                    <div class="widget-body">
                        <div class="row">
                            <form id="wizard-1" novalidate="novalidate">
                                <div id="bootstrap-wizard-1" class="col-sm-12">
                                    <div class="form-bootstrapWizard">
                                        <ul class="bootstrapWizard form-wizard">
                                            <li class="active" data-target="#step1" >
                                                <a href="#tab1" data-toggle="tab" class="active"> <span class="step">1</span> <span class="title">Student Information</span> </a>
                                            </li>
                                            <li class="active" data-target="#step2">
                                                <a href="#tab2" data-toggle="tab" class="active"> <span class="step">2</span> <span class="title">Review Information</span> </a>
                                            </li>
                                            <li class="active" data-target="#step3" >
                                                <a href="#tab2" data-toggle="tab"> <span class="step">3</span> <span class="title">Registration Successful</span> </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <span class="clearfix">&nbsp<br><br><br></span>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <div class="form-actions">
                                                
                                                <p style="font-size: 16px;">Dear<b> Ram Murat</b></p>
                                                <p style="line-height: 22px;font-size: 15px;"><b>Sanjay</b> is successfully registered in our system. 
                                                    Our admission team will contact you in next 24-36 hours. You do not need 
                                                    to submit this form again at any of our campus. Please keep the following 
                                                    details safe, however, an email with these would be sent to you shortly. </p>
                                                <table class="table table-bordered" style="background-color: #f4f4f4">
                                                    <tr>
                                                        <td width="300">Student Name :</td>
                                                        <td class="td-text">Sanjay Kumar Chaurasia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father's Name :</td>
                                                        <td class="td-text">Ram Murat Chaurasia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sibling Scholar Number :</td>
                                                        <td class="td-text">S1001</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Class :</td>
                                                        <td class="td-text">II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address :</td>
                                                        <td class="td-text">Sector 21, &nbsp; 
                                                                Ashok Udyan, &nbsp;
                                                                342008, &nbsp;
                                                                Jodhpur, &nbsp;
                                                                Rajasthan, &nbsp;
                                                                India
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Campus(s) :</td>
                                                        <td class="td-text">CHB , Shastri Nagar</td>
                                                    </tr>
                                                </table>
                                                <div class="row">
                                                    <div class="col-lg-12" align="right">
                                                        <a  href="" ng-click="paynow()" class="md-raised md-button md-primary">
                                                            <i class="fa fa-print"></i>&nbsp;&nbsp;Print Registration Form</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<br><br><br><br>
@endsection