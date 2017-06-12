@extends('layouts.app')
@section('content')
<div class="d-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" >
                <md-card style="border-top: #5382fe solid 4px; ">
                    <!--------- Header: Profile Picture ----------------->
                    <md-card-header >
                        <img style="height: 170px; width: 140px;" src="{{url('assets/images/profile.jpg')}}">
                    </md-card-header>

                    <!---- Header: Profile Name and Class ------------>
                    <md-card-title>
                        <md-card-title-text>
                            <span class="md-headline" >Sanjay Kumar Chaurasia</span>
                            <span class="h3">Class : XI -  C</span>
                        </md-card-title-text>
                    </md-card-title>

                    <!---- Header: Profile Teacher remark and rating ------------>
                    <md-card-content>
                        <span class="h5">Teacher Remark:</span><br><br>
                        <p align='justify' class="md-body-1"> Puts evident effort into his work as he completes assignments
                            with quality in mind.</p><p align='right'><b>-- Mr. Pankaj Bhargav</b>
                        </p>
                        <table class='table table-striped'>
                            <tr>
                                <td>Status</td>
                                <td><span class="label label-success md-body-1">active</span></td>
                            </tr>
                            <tr>
                                <td>Student Rating</td>
                                <td>
                                    <i class="fa fa-star fa-fw" style="color: orange"></i>
                                    <i class="fa fa-star fa-fw" style="color: orange"></i>
                                    <i class="fa fa-star fa-fw" style="color: orange"></i>
                                    <i class="fa fa-star fa-fw" style="color: gray"></i>
                                    <i class="fa fa-star fa-fw" style="color: gray"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Joined On</td>
                                <td>3<sup>rd</sup> March, 2008</td>
                            </tr>
                        </table>
                    </md-card-content>
                </md-card>
                <!-- --------------------- Parent Card ----------------------------------->
                <md-card>
                    <md-card-header >
                        <i class="fa fa-users md-headline"></i>
                        <span class="md-headline">&nbsp;Parents</span>
                    </md-card-header>
                    <md-card-header>
                        <p><a href=''>
                                <img class="parent-icon " src="{{url('assets/images/profile_pic.jpg')}}"></a>
                        <md-tooltip md-direction="top">Mother</md-tooltip></p> &nbsp;&nbsp;
                        <p><a href=''><img class="parent-icon " src="{{url('assets/images/father.jpg')}}">
                            </a>
                        <md-tooltip md-direction="top">Father</md-tooltip></p>
                        <md-button aria-label="edit" class="md-fab md-mini md-raised md-mini">
                            <i class="material-icons">add</i>
                            <md-tooltip >
                                Add Parent
                            </md-tooltip>
                        </md-button>
                    </md-card-header>

                </md-card>

                <!-- -------------- Sibling Card ----------------------------------->
                <md-card>
                    <md-card-header >
                        <i class="fa fa-user-plus md-headline"></i>
                        <span class="md-headline">&nbsp;Siblings</span>
                    </md-card-header>
                    <md-card-header>
                        <p><a href=''><img class="parent-icon " src="{{url('assets/images/brother.jpg')}}">
                            </a>
                        <md-tooltip md-direction="top">Brother</md-tooltip></p>
                        <md-button aria-label="edit" ng-click="editrecords(data)" class="md-fab md-mini md-raised md-mini">
                            <i class="material-icons">add</i>
                            <md-tooltip  >
                                Add Sibling
                            </md-tooltip>
                        </md-button>
                    </md-card-header>
                </md-card>
            </div><!-------------- Profile Div ends Here ----------------------->

            <!-- ------------ Tab start from here ---------------------------->
            <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12" >
                <md-content>
                    <md-tabs md-dynamic-height md-border-bottom>

                        <!------------ ------------ Tab:: Profile ---------------------->
                        <md-tab label="Profile" >
                            <md-content class="md-padding">
                                <md-button style="float: right" class='md-raised md-warn'><i class="fa fa-pencil-square-o"></i> 
                                    Edit</md-button><br><br><br>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" >
                                        <i class="fa fa-user-circle md-title" ></i>
                                        <span class="h4"> &nbsp;About</span>
                                    </div>
                                    <div class="panel-body" >
                                        <table class="table table-hover table-borderless">
                                            <tr>
                                                <td><b>Scholar No:</b></td>
                                                <td>S1001</td>
                                                <td><b>Student name:</b></td>
                                                <td>Sanjay Kumar Chaurasia</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Gender:</strong></td>
                                                <td>Male</td>
                                                <td><b>Class:</b></td>
                                                <td>XI - C</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Date of birth:</strong></td>
                                                <td>20-04-1992</td>
                                                <td><strong>Date of joining:</strong></td>
                                                <td>03-03-2008</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Fathers name:</strong></td>
                                                <td>Ram Murat Chaurasia</td>
                                                <td><strong>Mothers name:</strong></td>
                                                <td>Chandravati</td>

                                            </tr>
                                            <tr> <td><b>Email:</b></td>
                                                <td>abcd@gmail.com</td>
                                                <td><b>Mobile:</b></td>
                                                <td>9856932563</td>
                                            </tr>
                                            <tr>
                                                <td><b>Conveyance opted:</b></td>
                                                <td colspan="3">Ashok udyan</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <!------------------- Profile -------------------------------->                         
                                <div class="panel panel-primary ">
                                    <div class="panel-heading" ng-click="showProf = !showProf">
                                        <i class="fa fa-user md-title" aria-hidden="true"></i>
                                        <span class="h4">&nbsp;Profile</span>
                                        <i style="float: right" class='fa fa-angle-double-up'></i>
                                        <i style="float: right"class='fa fa-angle-double-down'></i>
                                    </div>
                                    <div class="panel-body" ng-show="showProf">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><b>Aadhar Card No:</b></td>
                                                <td>2563 2365 1425 8569</td>
                                                <td><b>Passport No:</b></td>
                                                <td>A123456</td>
                                            </tr>
                                            <tr> <td><b>Category:</b></td>
                                                <td>OBC</td>
                                                <td><strong>Religion:</strong></td>
                                                <td>Hindu</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Previous School Name:</strong></td>
                                                <td>St. Pauls</td>
                                                <td><b>Previous Class Attended:</b></td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Previous Result:</strong></td>
                                                <td>Passed</td>
                                                <td><b>Percentage:</b></td>
                                                <td>82</td>
                                            </tr>
                                            <tr>

                                                <td><strong>Grade:</strong></td>
                                                <td>A</td>
                                                <td><strong>Reference by:</strong></td>
                                                <td>Mr. Ashok Tiwari</td>
                                            </tr>
                                            <tr>
                                                <td><b>House:</b></td>
                                                <td colspan="3">Red</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!--------------------- communication section --------------------------------->

                                <div class="panel panel-primary">
                                    <div class="panel-heading" ng-click="showComm = !showComm">
                                        <i class="fa fa-phone md-title" aria-hidden="true"></i>
                                        <span class="h4">&nbsp;Contact</span>
                                        <i style="float: right" class='fa fa-angle-double-up'></i>
                                        <i style="float: right"class='fa fa-angle-double-down'></i>
                                    </div>
                                    <div class="panel-body" ng-show="showComm">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><b>Email:</b></td>
                                                <td>abcd@gmail.com
                                                    <a href="">&nbsp;<i class="fa fa-envelope fa-2x "></i></a></td>
                                                <td><strong>Phone (landline):</strong></td>
                                                <td>2710235
                                                    <a href="">&nbsp;<i class="fa fa-phone-square fa-2x "></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><b>Mobile 1:</b></td>
                                                <td>9856932563
                                                    <a href="">&nbsp;<i class="fa fa-phone-square fa-2x "></i></a></td>
                                                <td><strong>Mobile 2:</strong></td>
                                                <td>9876543210
                                                    <a href="">&nbsp;<i class="fa fa-phone-square fa-2x "></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><b>Fax 1:</b></td>
                                                <td>022-0125-01236</td>
                                                <td><strong>Fax 2:</strong></td>
                                                <td>091-0253-12563</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!--------------------- Address section ------------------>

                                <div class="panel panel-primary">
                                    <div class="panel-heading" ng-click="showAdd = !showAdd">
                                        <i class="fa fa-home md-title" aria-hidden="true"></i>
                                        <span class="h4">&nbsp;Address</span>
                                        <i style="float: right" class='fa fa-angle-double-up'></i>
                                        <i style="float: right"class='fa fa-angle-double-down'></i>
                                    </div>
                                    <div class="panel-body" ng-show="showAdd">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><b>Current Address 1:</b></td>
                                                <td>Sector 21, House No 508</td>
                                                <td><strong>Current Address 2:</strong></td>
                                                <td>Chopasni Housing Board</td>
                                            </tr>
                                            <tr>
                                                <td><b>Current Suburb:</b></td>
                                                <td>CHB</td>
                                                <td><strong>Current Pincode:</strong></td>
                                                <td>342008</td>
                                            </tr>
                                            <tr>
                                                <td><b>Current City 1:</b></td>
                                                <td>Jodhpur</td>
                                                <td><strong>Current State:</strong></td>
                                                <td>Rajasthan</td>
                                            </tr>
                                            <tr>
                                                <td><b>Current Country:</b></td>
                                                <td>India</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr><td colspan="4"></td></tr>
                                            <tr>
                                                <td><b>Permanent Address 1:</b></td>
                                                <td>B road, Shivalik complex</td>
                                                <td><strong>Permanent Address 2:</strong></td>
                                                <td>Mansarovar</td>
                                            </tr>
                                            <tr>
                                                <td><b>Permanent Suburb:</b></td>
                                                <td>Mansarovar</td>
                                                <td><strong>Permanent Pincode:</strong></td>
                                                <td>302020</td>
                                            </tr>
                                            <tr>
                                                <td><b>Permanent City 1:</b></td>
                                                <td>Jaipur</td>
                                                <td><strong>Permanent State:</strong></td>
                                                <td>Rajasthan</td>
                                            </tr>
                                            <tr>
                                                <td><b>Permanent Country:</b></td>
                                                <td>India</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!--------------------- Emergancy section ------------------>
                                <div class="panel panel-primary">
                                    <div class="panel-heading " ng-click="showEmer = !showEmer">
                                        <i class="fa fa-ambulance md-title" aria-hidden="true"></i>
                                        <span class="h4">&nbsp;Emergancy Contact</span>
                                        <i style="float: right" class='fa fa-angle-double-up'></i>
                                        <i style="float: right"class='fa fa-angle-double-down'></i>
                                    </div>
                                    <div class="panel-body" ng-show='showEmer'>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><b>Name:</b></td>
                                                <td>Rajesh Kumar</td>
                                                <td><b>Phone No:</b></td>
                                                <td>9876543210</td>
                                            </tr>
                                            <tr>
                                                <td><b>Address:</b></td>
                                                <td>21/508 CHB Jodhpur</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>

                        <!------------------- Academics tab----------------------- Academics tab ------------------------Academics tab-------------------->
                        <md-tab label="Academics" id="academics">
                            <md-content class="md-padding">
                                <div class="row">
                                    <div class="panel panel-primary" >
                                        <div class="panel-heading" >Academic Performance: Scholastic Areas
                                            <i style="float: right" class='fa fa-angle-double-up'></i>
                                            <i style="float: right"class='fa fa-angle-double-down'></i></div>
                                        <div class="panel-body" style="padding: 10px 1px 1px 1px;" >
                                            <div class="col-lg-12">
                                                <table class="table table-bordered md-caption" style="text-align: center">
                                                    <tr class="info">
                                                        <td rowspan="2">SUBJECT CODE AND NAME</td>
                                                        <td colspan="3">TERM I - GRADE</td>
                                                        <td colspan="3">TERM II - GRADE</td>
                                                        <td colspan="2">OVERALL - TERM I + TERM II</td>
                                                    </tr>
                                                    <tr class="danger">
                                                        <td>PA 1</td>
                                                        <td>Half Yearly</td>
                                                        <td>TOT-1</td>
                                                        <td>PA 2</td>
                                                        <td>Annual</td>
                                                        <td>TOT-2</td>
                                                        <td>Overall Grade</td>
                                                        <td>Grade Point (GP)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(101) English</td>
                                                        <td>A1</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>B2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A1**</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(002) HINDI</td>
                                                        <td>A1</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>9</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(041) MATHEMATICS</td>
                                                        <td>B1</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>A2</td>
                                                        <td>B2</td>
                                                        <td>A2</td>
                                                        <td>A2**</td>
                                                        <td>9</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="panel panel-primary" >
                                        <div class="panel-heading" ng-click="showCo = ! showCo">Academic Performance: Co-Scholastic Areas
                                            <i style="float: right" class='fa fa-angle-double-up'></i>
                                            <i style="float: right"class='fa fa-angle-double-down'></i></div>
                                        <div class="panel-body" ng-show="showCo" style="padding: 10px 1px 1px 1px;" >
                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
                                                    <p align='center' class='h5'>Co-Scholastic Areas: on a 3-point [ A - C ] grading scale</p>
                                                    <tr class="info">
                                                        <td align="center" colspan="2">Term 1</td>
                                                        <td align="center" colspan="2">Term 2</td>
                                                    </tr>
                                                    <tr class="danger">
                                                        <td>
                                                            SELF AWARENESS
                                                        </td>
                                                        <td>Grade</td>
                                                        <td >
                                                            SELF AWARENESS
                                                        </td>
                                                        <td>Grade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Is aware of his/her physical/social and emotional self</td>
                                                        <td>A</td>
                                                        <td>Is aware of his/her physical/social and emotional self</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Self respecting</td>
                                                        <td>A</td>
                                                        <td>Self respecting</td>
                                                        <td>A</td>
                                                    </tr>
                                                    <tr class="danger">
                                                        <td >
                                                            PROBLEM SOLVING
                                                        </td>
                                                        <td>Grade</td>
                                                        <td >
                                                            PROBLEM SOLVING
                                                        </td>
                                                        <td>Grade</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Finds a workable solution to the problem</td>
                                                        <td>A</td>
                                                        <td>Finds a workable solution to the problem</td>
                                                        <td>B</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-primary"  ng-controller="attendanceCtrl">
                                        <div class="panel-heading" ng-click="showAtten = ! showAtten">Attendance</div>
                                        <div class="panel-body" ng-show="showAtten">
                                            <div class="col-lg-6">
                                                <canvas  id="line" class="chart chart-line" chart-data="data"
                                                         chart-labels="labels" chart-series="series" chart-options="options"
                                                         chart-dataset-override="datasetOverride" chart-click="onClick">
                                                </canvas><br><br>
                                                <a href="" class="md-button md-raised md-primary">Show in Detail</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <table class="table">
                                                    <tr>
                                                        <td class="md-headline" style="color: #008000">95
                                                            <p class="md-body-1">Attendance Total</p>
                                                        </td>
                                                        <td class="md-display-2" >12
                                                            <p class="md-body-1">Attendance This Month</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="md-headline" style="color: #d02763">215
                                                            <p class="md-body-1">Total Working days</p>
                                                        </td>
                                                        <td class="md-display-2">15
                                                            <p class="md-body-1">Working days this month</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="md-subhead">Minimum required: 75 %</td>
                                                        <td class="md-title" style="color: #008000">Current: 81 %</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" ng-click="showTime = !showTime">Time Table
                                            <i style="float: right" class='fa fa-angle-double-up'></i>
                                            <i style="float: right"class='fa fa-angle-double-down'></i></div>
                                        <div class="panel-body" ng-show="showTime">
                                            <div class="col-lg-12" >
                                                <table class="table table-bordered">
                        <tr class="info">
                            <td>Period / Day</td>
                            <td>Time</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>[ 8:00 - 8:45 ]</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>II</td>
                            <td>[ 8:45 - 9:30 ]</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                        </tr>
                        <tr>
                            <td>III</td>
                            <td>[ 9:30 - 10:15 ]</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                            <td>Maths</td>
                        </tr>
                        <tr >
                            <td>IV</td>
                            <td>[ 10:15 - 11:00 ]</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                            <td>S.St</td>
                        </tr>
                        <tr class="success">
                            <td>Recess</td>
                            <td>[ 11:00 - 11:20 ]</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>V</td>
                            <td>[ 11:20 - 12:00 ]</td>
                            <td>Drawing</td>
                            <td>Activity</td>
                            <td>F.L</td>
                            <td>Activity</td>
                            <td>Drawing</td>
                            <td>Activity</td>
                        </tr>
                        <tr>
                            <td>VI</td>
                            <td>[ 12:00 - 12:40 ]</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                            <td>Science</td>
                        </tr>
                        <tr>
                            <td>VII</td>
                            <td>[ 12:40 - 13:20 ]</td>
                            <td>Games</td>
                            <td>Library</td>
                            <td>Music</td>
                            <td>Games</td>
                            <td>Library</td>
                            <td>Games</td>
                        </tr>
                    </table>
					
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6" style="padding-left: 0px; padding-right: 2px;" ng-controller="LineCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showAverage = !showAverage">Class average comparison
                                                <i style="float: right" class='fa fa-angle-double-up'></i>
                                                <i style="float: right"class='fa fa-angle-double-down'></i></div>
                                            <div class="panel-body" ng-show="showAverage">
                                                <canvas  id="line" class="chart chart-line" chart-data="data"
                                                         chart-labels="labels" chart-series="series" chart-options="options"
                                                         chart-dataset-override="datasetOverride" chart-click="onClick">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="padding-left: 2px; padding-right: 0px;" ng-controller="BarCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showSchol = !showSchol">
                                                Non Scholastic Performance
                                                <i style="float: right" class='fa fa-angle-double-up'></i>
                                                <i style="float: right"class='fa fa-angle-double-down'></i></div>
                                            <div class="panel-body" ng-show="showSchol">
                                                <canvas id="base" class="chart-horizontal-bar"
                                                        chart-data="data" chart-labels="labels" >
                                                </canvas> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4" ng-controller="DoughnutCtrl" style="padding-left: 0px; padding-right: 2px;">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showSubject = !showSubject">
                                                Subject Wise Performance
                                                <i style="float: right" class='fa fa-angle-double-up'></i>
                                                <i style="float: right"class='fa fa-angle-double-down'></i>
                                            </div>
                                            <div class="panel-body" ng-show="showSubject">
                                                <canvas id="doughnut" class="chart chart-doughnut"
                                                        chart-data="data" chart-labels="labels">
                                                </canvas>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8" style="padding-left: 2px; padding-right: 0px;">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showNotice = !showNotice">
                                                Notices / Remark
                                                <i style="float: right" class='fa fa-angle-double-up'></i>
                                                <i style="float: right"class='fa fa-angle-double-down'></i>
                                            </div>
                                            <div class="panel-body" ng-show="showNotice">
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td>Period / Day</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <md-tab label="Fees">
                            <md-content class="md-padding">
                                <div class="row">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Fees Details</div>
                                        <div class="panel-body">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
												<thead>
                                                    <tr>
                                                        <th>Installments</th>
                                                        <th >Amount</th>
														<th>Due Date</th>
                                                        <th width="25%">Action</th>
                                                    </tr>
													</thead>
                                                    
                                                    <tr>
                                                        <td><b>April(I)</b></td>
                                                        <td>&#8377 9860</td>
                                                        <td>10-04-2016</td>
                                                        <td><md-button  class="md-raised md-primary" >View Reciept</md-button></td>

                                                    </tr>
                                                    <tr>
                                                        <td><b>July(II)</b></td>
                                                        <td>&#8377 2860</td>
                                                        <td>10-07-2016</td>
                                                        <td><md-button class="md-raised md-primary"  >View Reciept</md-button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>August(III)</b></td>
                                                        <td>&#8377 2860</td>
                                                        <td>10-08-2016</td>
                                                        <td><md-button  class="md-raised md-primary" >Pay Now</md-button></td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>September(IV)</b></td>
                                                        <td>&#8377 2860</td>
                                                        <td>10-09-2016</td>
                                                        <td><md-button  class="md-raised md-primary" >Pay Now</md-button></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
													
                                                    <tr>
                                                        <td class="md-headline" >
                                                            <p class="md-body-1">Total Fees Due - <span class="md-title" style="color: #d02763">&#8377 18320</span></p>
                                                        </td>
                                                        <td class="md-subhead" align="right" >
                                                            <p class="md-subhead">Total Fees Collected - <span style="color: #008000" align="right" class="md-title">&#8377 14820</span></p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="md-headline" style="color: #d02763" colspan="2">
                                                            <p class="md-subhead"> Fee Rule(s) -  <span class="md-title" >Third Child  <md-button class="md-raised md-primary" style="float:right">Apply Rule (s)</md-button></span></p>

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6" style="padding-left: 0px; padding-right: 2px;" ng-controller="FeeLineCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showFee = !showFee">Average Fee Collection comparison
                                                <i style="float: right" class="fa fa-angle-double-up"></i>
                                                <i style="float: right" class="fa fa-angle-double-down"></i>
                                            </div>
                                            <div class="panel-body" ng-show="showFee">
                                                <canvas  id="line" class="chart chart-line" chart-data="data"
                                                         chart-labels="labels" chart-series="series" chart-options="options"
                                                         chart-dataset-override="datasetOverride" chart-click="onClick">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="padding-left: 10px; padding-right: 0px;" ng-controller="OtherFeePieCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showotherFee = !showotherFee">Other Fee Collection
                                                <i style="float: right" class="fa fa-angle-double-up"></i>
                                                <i style="float: right" class="fa fa-angle-double-down"></i>
                                            </div>
                                            <div class="panel-body" ng-show="showotherFee" >
                                                <canvas id="pie" class="chart chart-pie" style="height: 152px;"
                                                        chart-data="data" chart-labels="labels" chart-options="options">
                                                </canvas> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <md-tab label="Documents">
                            <md-content class="md-padding">
                                <div class="row">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" style='padding-bottom: 25px;'>Documents Detail
                                            <button class="md-fab md-mini md-raised md-mini md-button md-ink-ripple" style="float:right" type="button" aria-label="edit">
                                                <i class="material-icons ng-scope">add</i>
                                                <md-tooltip md-direction="top">Upload new document</md-tooltip></p> &nbsp;&nbsp;
                                                <div class="md-ripple-container"></div></button>
                                        </div>
                                        <div class="panel-body" ng-controller="subjectteacherassoc">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Document Type</th>
                                                        <th>Preview</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aadhar Card</td>
                                                        <td><img class="imgzoom"  data-toggle="modal" data-target="#myModal" style="height: 70px; width: 110px;" src="{{url('assets/images/aadhar-card22.jpg')}}" ></td>

                                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{url('assets/images/aadhar-card22.jpg')}}" class="img-responsive">
                                                                </div>
                                                                <div class="modal-footer"><md-button class='md-raised md-primary'>Download</md-button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <td><md-button class="md-raised md-primary">Update</md-button></td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Birth Certificate</td>
                                                        <td><img class="imgzoom" data-toggle="modal" data-target="#myModal2"  style="height: 70px; width: 110px;" src="{{url('assets/images/Birth_certificate(sample).png')}}" ></td>
                                                        <td><md-button class="md-raised md-primary">Update</md-button></td>
                                                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{url('assets/images/Birth_certificate(sample).png')}}" class="img-responsive">
                                                                </div>
                                                                <div class="modal-footer"><md-button class='md-raised md-primary'>Download</md-button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Transfer Certificate(T.C)</td>
                                                        <td><img class="imgzoom"  data-toggle="modal" data-target="#myModal3" style="height: 70px; width: 110px;" src="{{url('assets/images/TC.jpg')}}" ></td>
                                                        <td><md-button class="md-raised md-primary">Update</md-button></td>
                                                    <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{url('assets/images/TC.jpg')}}" class="img-responsive">
                                                                </div>
                                                                <div class="modal-footer"><md-button class='md-raised md-primary'>Download</md-button></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Character Certificate</td>
                                                        <td><img class="imgzoom"   data-toggle="modal" data-target="#myModal4" style="height: 70px; width: 110px;" src="{{url('assets/images/ch_certificate.png')}}" ></td>
                                                        <td><md-button  class="md-raised md-primary">Update</md-button></td>
                                                    <div id="myModal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{url('assets/images/ch_certificate.png')}}" class="img-responsive">
                                                                </div>
                                                                <div class="modal-footer"><md-button class='md-raised md-primary'>Download</md-button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <!-- ------ Activity Tab------------- Activity Tab--------------------------->                       
                        <md-tab label="Activity">
                            <md-content class="md-padding">
                                <div class="row">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Syllabus</div>
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <md-select placeholder="Exams" ng-model="ctrl.Exams" name="Exams"> 
                                                    <md-option value="Formative Assesment-I" selected> Formative Assesment-I</md-option>
                                                    <md-option value="Formative Assesment-II"> Formative Assesment-II </md-option>
                                                    <md-option value="Submative Assesment-I"> Submative Assesment-I </md-option>
                                                    <md-option value="Formative Assesment-III"> Formative Assesment-III </md-option>
                                                    <md-option value="Formative Assesment-IV"> Formative Assesment-IV </md-option>
                                                    <md-option value="Submative Assesment-II"> Submative Assesment-II </md-option>
                                                </md-select> 
                                            </div>

                                            <div class="col-lg-6">
                                                <md-select placeholder="Subjects" ng-model="ctrl.Subjects" name="Subjects"> 
                                                    <md-option value="English" > English</md-option>
                                                    <md-option value="Hindi"> Hindi </md-option>
                                                    <md-option value="Mathematics" selected> Mathematics </md-option>
                                                    <md-option value="Life Science"> Life Science </md-option>
                                                    <md-option value="G.K"> G.K </md-option>
                                                    <md-option value="History"> History </md-option>
                                                </md-select> 
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="panel-heading">FA - I (Mathematics)</div><br><br>
                                                <p> <b>Chapter 1</b> - Boolean Algebra, Liner equation in one variable, Statistical Plotting....</p>
                                                <p> <b>Chapter-2</b> - Bar Graphs, Line Graphs, Pie Charts, Plotting the graphs.....</p>    
                                                <p> <b>Chapter-3</b> - Trignometry, Coordinates in graphs &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href=''>Load more....</a> </p> 
                                            </div>

                                            <md-button style='float:right' class='md-raised md-primary' >Download</md-button>
                                        </div>
                                    </div>
                                </div>

                                <div class='row' >
                                    <div class="col-lg-6" style="padding-left: 2px; padding-right: 0px;" ng-controller="NonSchoalsticBarCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="nonschoperformance = !nonschoperformance">Non Scholastic Performance
                                                <i style="float: right" class="fa fa-angle-double-up"></i>
                                                <i style="float: right" class="fa fa-angle-double-down"></i> 
                                            </div>
                                            <div class="panel-body" ng-show="nonschoperformance">
                                                <canvas id="base" class="chart-horizontal-bar"
                                                        chart-data="data" chart-labels="labels" >
                                                </canvas> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" style="padding-left: 0px; padding-right: 2px;" ng-controller="ScholasticLineCtrl">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" ng-click="showFee = !showFee">Scholastic Performance
                                                <i style="float: right" class="fa fa-angle-double-up"></i>
                                                <i style="float: right" class="fa fa-angle-double-down"></i>
                                            </div>
                                            <div class="panel-body" ng-show="showFee">
                                                <canvas  id="line" class="chart chart-line" chart-data="data"
                                                         chart-labels="labels" chart-series="series" chart-options="options"
                                                         chart-dataset-override="datasetOverride" chart-click="onClick">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>

                        <!----------- Communication Tab ----------------------------------------------->
                        <md-tab label='Communication'>
                            <md-content class="md-padding" >
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><i class="fa fa-list md-subhead" ></i>
                                        &nbsp;Notice / Remark Log
                                    </div>
                                    <div class="panel-body" ng-controller="timeline">
                                        <div class='col-lg-12'>
                                            <div class='row'>
                                                <div class='col-lg-6'>
                                                    <p class="md-title">Refine Log:</p>
                                                    <p>
                                                        <a href=""><span class="md-body-2 label label-warning">#Notice</span></a>
                                                        <a href=""><span class="md-body-2 label label-warning">#warning</span></a>
                                                        <a href=""><span class="md-body-2 label label-warning">#Bad behavior</span></a>
                                                        <a href=""><span class="md-body-2 label label-success">#Congratulation</span></a>
                                                        <a href=""><span class="md-body-2 label label-info">#info</span></a>
                                                    </p>
                                                </div>
                                                <div class='col-lg-3'>
                                                    <md-datepicker name="dob" ng-model="datefrom"  md-placeholder="Date From" md-min-date="minDate" 
                                                                   md-max-date="maxDate" required>
                                                    </md-datepicker>
                                                </div>
                                                <div class='col-lg-3'>
                                                    <md-datepicker name="dob" ng-model="dateto"  md-placeholder="Date To" md-min-date="minDate" 
                                                                   md-max-date="maxDate" required>
                                                    </md-datepicker>
                                                </div>
                                            </div>
                                            <div class='row' style="float: right">
                                                <md-button class='md-raised md-primary'>Submit</md-button>
                                            </div><br><br>
                                            <hr>
                                            <timeline>
                                                <timeline-event ng-repeat="event in events" side="alternate">
                                                    <timeline-badge ng-class="event.alert">
                                                        <i class="fa fa-check"></i>
                                                    </timeline-badge>
                                                    <timeline-panel>
                                                        <timeline-heading>
                                                            <p class="h4">
                                                                <img class="timeline-icon" src='{{url('assets/images/profile.jpg')}}'/>
                                                                &nbsp;@{{event.user}} <span class="md-caption">[ @{{event.profile}} ]</span></p>
                                                        </timeline-heading>
                                                        <a href=""><span class="md-body-2 label label-warning">@{{event.tag}}</span>
                                                        </a><span style="float: right">@{{event.date}}</span><br>
                                                        <br><p class="md-body-1">@{{event.content}}</p>
                                                    </timeline-panel>
                                                </timeline-event>
                                            </timeline>
                                        </div>
                                    </div>
                                </div>
                                <!--- ---------------- Phone Log Panel ---------------------------------------------->
                                <div class="panel panel-primary" ng-controller="control as ctrl">
                                    <div class="panel-heading" ng-click="showLog = !showLog" >
                                        <i class="fa fa-phone md-title" ></i>
                                        &nbsp;Phone log</div>
                                    <div class="panel-body"  style="padding: 5px 0px 0px 0px;" ng-show="showLog" >
                                        <div class="col-lg-12">
                                            <table class="table table-hover table-borderless">
                                                <thead>
                                                <th>S.no</th>
                                                <th>Dialer</th>
                                                <th>Spoken to</th>
                                                <th>Subject</th>
                                                <th>Case</th>
                                                <th>More</th>
                                                </thead>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Vikash Sharma [Teacher]</td>
                                                    <td>Mr. Rajesh [Principle]</td>
                                                    <td>Short Attendance </td>
                                                    <td>Closed</td>
                                                    <td>
                                                <md-button ng-click="showModal()" class="md-icon-button md-accent" aria-label="Favorite">
                                                    <i class="fa fa-desktop md-title">
                                                        <md-tooltip md-direction="bottom">Show Thread</md-tooltip>
                                                    </i>
                                                </md-button>
                                                </td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Ravi Kumar[Teacher]</td>
                                                    <td>Mr. Rajesh [Father]</td>
                                                    <td>Bad Behavior in class </td>
                                                    <td>Open</td>
                                                    <td> <md-button ng-click="showModal()" class="md-icon-button md-accent" aria-label="Favorite">
                                                    <i class="fa fa-desktop md-title">
                                                        <md-tooltip md-direction="bottom">Show Thread</md-tooltip>
                                                    </i>

                                                </md-button>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" colspan="8"><md-button ng-click="showModal()"  class="md-raised md-primary">
                                                    <i class="fa fa-phone-square md-subhead" </i>
                                                    &nbsp;Insert new Record
                                                </md-button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--------- Appointment Panel ----------------------->
                                <div class="panel panel-primary"  ng-controller="control as ctrl">
                                    <div class="panel-heading" ng-click="showAppoint = ! showAppoint">Appointment List</div>
                                    <div class="panel-body" ng-show="showAppoint">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table" style="text-align: center">
                                                    <tr>
                                                        <td>S.no</td>
                                                        <td>Appointment By</td>
                                                        <td>Date/Time</td>
                                                        <td>Case</td>
                                                        <td>More</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Ashok Kumar [Principle]</td>
                                                        <td class="h5">15-02-2017 11:00 AM - 11:30 AM</td>
                                                        <td>Open</td>
                                                        <td>
                                                    <md-button ng-click="showModal()" class="md-icon-button md-accent" aria-label="Favorite">
                                                        <i class="fa fa-desktop md-title">
                                                            <md-tooltip md-direction="bottom">Show Thread</md-tooltip>
                                                        </i>
                                                    </md-button>
                                                    </td>

                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <!--------- Communication Tab end here ----------------------------------------->
                    </md-tabs>
                </md-content>
            </div>
        </div>

        <!-- -------------------- Phone Log Model ------------------------------->
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog" style="max-width: 80%">
                <div class="modal-content"> 
                    <div class="modal-body clearfix">
                        <div class="panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title d-no_padding">Phone Log [ID: 406]</h3> 
                            </div> 
                        </div>
                        <div class="clearfix well">

                            <table class="table table-striped md-caption" style="text-align: center">
                                <tr>
                                    <td>Dialer</td>
                                    <td>Contact No</td>
                                    <td>Spoken To</td>
                                    <td>Remark</td>
                                    <td>Date / Time</td>
                                    <td>Rating</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="h5">Vikash Sharma <br><span class="md-caption">[ Admin ]</span></p>
                                    </td>
                                    <td>9876543210</td>
                                    <td>Ramesh Sharma</td>
                                    <td width='420' align='justify' style="padding: 10px; color: #9c4019">
                                        Student was caught misbehaving in class, issue has been discussed with parents 
                                        and they are called for meeting with principle.
                                    </td>
                                    <td><strong>02-12-2017 11:45 AM</strong></td>
                                    <td>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="h5">Ashok Tiwari <br><span class="md-caption">[ Principle ]</span></p>
                                    </td>
                                    <td>9876543210</td>
                                    <td>Ramesh Sharma</td>
                                    <td width='420' align='justify' style="padding: 10px; color: #9c4019">
                                        Student was caught misbehaving in class, issue has been discussed with parents 
                                        and they are called for meeting with principle.
                                    </td>
                                    <td><strong>03-12-2017 11:45 AM</strong></td>
                                    <td>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                        <i class="fa fa-star fa-fw" style="color: orange"></i>
                                    </td>
                                </tr>
                            </table>

                            <!-------------- Enter New Log Form -------------------------->

                            <hr>
                            <span class='md-title'>Enter new log</span>
                            <div class='row'>
                                <div class='col-lg-3'>
                                    <md-input-container>
                                        <label>User Name</label>
                                        <input ng-model="user.username" value="sanjay Kumar"  type="text">
                                    </md-input-container>
                                </div>
                                <div class='col-lg-4'>
                                    <md-input-container>
                                        <label>Remarks</label>
                                        <input ng-model="user.remarks" type="text">
                                    </md-input-container>
                                </div>
                                <div class='col-lg-3'>
                                    <md-input-container>
                                        <label>Date</label>
                                        <input type='date' >
                                    </md-input-container>
                                </div>
                                <div class='col-lg-2'>
                                    <md-input-container >
                                        <md-select ng-model="rating" placeholder='Rating*'>
                                            <md-option>1</md-option>
                                            <md-option>2</md-option>
                                            <md-option>3</md-option>
                                            <md-option>4</md-option>
                                            <md-option>5</md-option>
                                        </md-select>
                                    </md-input-container>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" >
                                    <md-button class="md-raised md-button">Cancel</md-button>
                                    &nbsp;&nbsp;<input  class="md-button md-raised md-primary" type="submit" value="Submit">
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- -------------------- Phone Log Model Ends------------------------------->
        </div>
    </div>

    <br><br><br><br><br><br>
    @endsection