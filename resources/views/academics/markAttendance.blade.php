@extends('layouts.app')
@section('content')
<br><br>
<style>
    md-select{
        margin: 5px;
    }
</style>
<div class="d-container">
    <div class="container-fluid">
        <div class="col-lg-12">
            <md-toolbar class="d-listing_toolbar">
                <div class="d-listing_toolbar_title pull-left"> 
                    <span>Attendance</span> 
                </div>
                <div class="d-toolbar_icon pull-right">
                    <md-button data-toggle="modal" data-target="#myModal" class="md-fab md-mini md-raised md-mini pull-right">
                        <i class="material-icons">add</i>
                        <md-tooltip md-visible="demo.add_state" md-direction="demo.add_institute">
                            Add New Record
                        </md-tooltip>
                    </md-button>
                </div>
            </md-toolbar>

            <h4 align="center"> Class: II - C  &nbsp;&nbsp;|&nbsp;&nbsp;   01 - 06 July 2017</h4>

            <table class="table table-bordered" style="text-align: center">
                <tr class="warning">
                    <td colspan="2"> Select All</td>
                    <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                </tr>
                <tr>
                    <td width="10%">Roll No</td>
                    <td width="20%">Student Name </td>
                    <td class="info">01 <br> Mon</td>
                    <td class="info">02 <br> Tue</td>
                    <td class="info">03 <br> Wed</td>
                    <td class="info">04 <br> Thu</td>
                    <td>05 <br> Fri</td>
                    <td>06 <br> Sat</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Sanjay Kumar Chaurasia</td>
                    <td >
                <md-select ng-model="ctrl.attendance1"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance2"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2" selected><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance3"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance4"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance5"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance6"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Prateek Mathur</td>
                    <td>
                <md-select ng-model="ctrl.attendanc1"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanc2"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2" ><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanc3"  name="country" id="country">
                    <md-option ng-value="1" ><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2" selected><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3" ><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanc4"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanc5"  name="country" id="country">
                    <md-option ng-value="1" ><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanc6"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Ankit Goyal</td>
                    <td >
                <md-select ng-model="ctrl.attendanceg1"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanceg2"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendanceg3"  name="country" id="country">
                    <md-option ng-value="1" selected><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td class="danger">
                <md-select ng-model="ctrl.attendanceg4"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance5"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                <td>
                <md-select ng-model="ctrl.attendance6"  name="country" id="country">
                    <md-option ng-value="1"><span class="label label-success">Present</span></md-option>
                    <md-option ng-value="2"><span class="label label-danger">Absent</span></md-option>
                    <md-option ng-value="3"><span class="label label-info">Half Day</span></md-option>
                </md-select>
                </td>
                </tr>
            </table>

        </div>
        <div class="col-lg-12 col-lg-offset-5">
            <md-button class="md-raised md-default">Cancel</md-button>
            <input type="submit" class="md-button md-raised md-primary">
        </div>

    </div>
    <ul><br><br>
        <li>-> Blue Color Indicates attendance already taken on that day</li>
        <li>-> No color indicates attendance pending on that day</li>
        <li>-> Cell with red color shows, attendance is not market for that student</li>
    </ul>
</div><br><br><br><br><br><br>
@endsection