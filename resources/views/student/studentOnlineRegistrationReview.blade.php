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
                                            <li>
                                                <a> <span class="step">3</span> <span class="title">Registration Successful</span> </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <span class="clearfix">&nbsp<br><br><br></span>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <div class="form-actions">
                                                <p style="font-size: 26px;">Review Student Information</p>
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td class="info h4" colspan="6">General Details</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Student Name </td>
                                                        <td class="td-text">Sanjay Kumar Chaurasia</td>
                                                        <td>Sibling Sch No </td>
                                                        <td class="td-text">S1001</td>
                                                        <td>Sibling Branch </td><td>CHB</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Branch Opted </td><td class="td-text">CHB</td>
                                                        <td>Gender </td><td class="td-text">Male</td>
                                                        <td>Class Opted </td><td class="td-text">II</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Passport No </td>
                                                        <td class="td-text">A12345</td>
                                                        <td>Date of Birth </td><td class="td-text">20-04-1992</td>
                                                        <td>Category </td><td class="td-text">GEN</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Religion </td><td class="td-text">Hindi</td>
                                                        <td>Primary Mobile </td><td class="td-text">9876543210</td>
                                                        <td>Conveyance Opted  </td><td class="td-text">Ashok Udyan</td>
                                                    </tr>.

                                                    <tr>
                                                        <td>Current School </td><td class="td-text">St. Pauls</td>
                                                        <td>Current Class </td><td class="td-text">I</td>
                                                        <td>Current Result </td><td class="td-text">Passed</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6"  class="info h4">Father's Details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name </td><td class="td-text">Ram Murat Chaurasia</td>
                                                        <td>Email </td><td class="td-text">abcd@gmail.com</td>
                                                        <td>Phone </td><td class="td-text">9876543210</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mobile </td><td class="td-text">9875432100</td>
                                                        <td>Qualification </td><td class="td-text">Graduate</td>
                                                        <td>Occupation </td><td class="td-text">Private</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Business/Organisation Name</td><td class="td-text"></td>
                                                        <td>Designation </td><td class="td-text"></td>
                                                        <td>Office Phone No </td><td class="td-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Office Address  </td><td colspan="5"></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6"  class="info h4">Mother's Details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name  </td><td class="td-text">Chandravati</td>
                                                        <td>Email  </td><td class="td-text"></td>
                                                        <td>Phone </td><td class="td-text"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Mobile  </td><td class="td-text">9876543210</td>
                                                        <td>Qualification  </td><td class="td-text"></td>
                                                        <td>Occupation  </td><td class="td-text">Housewife</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Business/Organisation Name</td><td class="td-text"></td>
                                                        <td>Designation </td><td class="td-text"></td>
                                                        <td>Office Phone </td><td class="td-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Office Address </td><td colspan="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6"  class="info h4">Guardian Details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name  </td><td class="td-text">Sultan Singh</td>
                                                        <td>Phone  </td><td class="td-text">9876543210</td>
                                                        <td>Mobile  </td><td class="td-text">9876543210</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address  </td><td colspan="2">Sector 21</td>
                                                        <td>Qualification </td><td  colspan="2">Graduate</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6"  class="info h4">Current Address</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address line 1  </td><td colspan="2">Sector 21</td>
                                                        <td>Address line 2  </td><td colspan="2">Chopasni Housing Board</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suburb </td><td class="td-text">Sector 21</td>
                                                        <td>Pincode </td><td class="td-text">342008</td>
                                                        <td>City </td><td class="td-text">Jodhpur</td>
                                                    </tr>
                                                    <tr>
                                                        <td>State </td><td class="td-text">Rajasthan</td>
                                                        <td>Country </td><td colspan="3">India</td>
                                                    </tr>


                                                    <tr>
                                                        <td colspan="6"  class="info h4">Permanent Address</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address line 1 </td><td colspan="2">Sector 21</td>
                                                        <td>Address line 2  </td><td colspan="2">Chopasni Housing Board</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suburb  </td><td class="td-text">Sector 21</td>
                                                        <td>Pincode </td><td class="td-text">342008</td>
                                                        <td>City  </td><td class="td-text">Jodhpur</td>
                                                    </tr>
                                                    <tr>
                                                        <td>State </td><td class="td-text">Rajasthan</td>
                                                        <td>Country </td><td colspan="3">India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6"  class="info h4">Details of two known local contacts </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name </td><td class="td-text">abcd</td>
                                                        <td>Contact No </td><td class="td-text">9876543210</td>
                                                        <td>Address </td><td class="td-text">Sector 11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name </td><td class="td-text">abcd</td>
                                                        <td>Contact No </td><td class="td-text">9876543210</td>
                                                        <td>Address  </td><td class="td-text">Sector 11</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6">
                                                            <p style="font-size: 24px;"><input type="checkbox" checked="true">
                                                                I confirm all inputs provided in the form are valid and correct,
                                                                to best of my knowledge.</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-lg-offset-4">
                                        <ul class="pager wizard no-margin">
                                            <li class="previous">
                                                <a href="{{url('student_registration')}}" class="md-button md-raised md-default"> Previous </a>
                                            </li>
                                            <li class="next">
                                                <a href="{{url('student_registration_confirmation')}}" class="md-button md-raised md-primary md-ripple-visible"> Save </a>
                                            </li>
                                        </ul>
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