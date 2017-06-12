<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <!-- PAGE TITLE -->
        <title>360 Degree </title>
        <!-- CSS:: FONTS -->
        <!-- CSS:: FONTS -->
        <script type="text/javascript" src="http://localhost/360academic/assets/js/jquery.min.js"></script>   
        <link rel="stylesheet" type="text/css" href="http://localhost/360academic/assets/css/font-awesome.min.css"/>  
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500" rel="stylesheet"/> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
        <link rel="stylesheet" href="http://localhost/360academic/assets/css/bootstrap.min.css"/>     

        <!-- CSS:: ANGULAR -->  
        <link rel="stylesheet" href="http://localhost/360academic/assets/css/angular-material.min.css"/>

        <!-- CSS:: -->
        <link rel="stylesheet" type="text/css" href="http://localhost/360academic/assets/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="http://localhost/360academic/assets/css/main.css"/> 
        <link rel="stylesheet" type="text/css" href="http://localhost/360academic/assets/css/angular-timeline.css"/> 
    </head>

    <body>  
        <style>
            .tb-cell{
                background-color: #eeeeee;
                color: #000;
            }

            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                border-top: 0px;
            }
            hr.style16 { 
                border-top: 1px dashed #8c8b8b; 
            } 
            hr.style16:after { 
                content: '\002702'; 
                display: inline-block; 
                position: relative; 
                top: -16px; 
                left: 380px; 
                padding: 0 3px; 
                background: #f0f0f0; 
                color: #8c8b8b; 
                font-size: 22px; 
            }
            page {
                background: white;
                display: block;
                margin: 0 auto;
                margin-bottom: 0.5cm;
                box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            page[size="A4"] {  
                width: 21cm;
                height: 29.7cm; 
            }
            page[size="A4"][layout="portrait"] {
                width: 29.7cm;
                height: 21cm;  
            }
            page[size="A3"] {
                width: 29.7cm;
                height: 42cm;
            }
            page[size="A3"][layout="portrait"] {
                width: 42cm;
                height: 29.7cm;  
            }
            page[size="A5"] {
                width: 14.8cm;
                height: 21cm;
            }
            page[size="A5"][layout="portrait"] {
                width: 21cm;
                height: 14.8cm;  
            }
            @media print {
                body, page {
                    margin: 0;
                    box-shadow: 0;
                }
            }
        </style>
        <page size="A4" class="md-padding">

            <!---------------- Registration Form Slip Heading --------------->
            <table class="table" style="background-color: #E67014;">
                <tr>
                    <td width="15%" align="right"></td>
                    <td align="center"><img style="height: 60px;" src="{{url('assets/images/logo_school.png')}}">

                            <span class="clearfix" style="color: #000;">&nbsp;An ISO 9001:2000 Accredited Institute</span></td>
                    <td align="left"><img style="width: 90px;" src="{{url('assets/images/2central-academy-shastri-nagar-ca_logo.png')}}"></td>
                </tr>
            </table>
            <!---------------- Registration Form Slip Heading Data --------------->
            <table class="table md-caption">
                <tr>
                    <td width="21%">Your Registration no is: </td>
                    <td style="border-bottom: 1px #000 solid">ca263256</td>
                    <td width="3%"></td>
                    <td width="18%">Campus Preference: </td>
                    <td style="border-bottom: 1px #000 solid" >CHB, Shastri</td>
                    <td width="5%"></td>
                    <td width="7%">Date:</td>
                    <td style="border-bottom: 1px #000 solid">20 March 2017</td>
                </tr>
            </table>

            <!---------------- Registration Form Slip Information --------------->
            <table style="font-size: 14px;" class="table table-condensed">
                <tr>
                    <td>Dear <b>Ram Murat</b></td>
                </tr>
                <tr>
                    <td><b>Sanjay Kumar Chaurasia</b></td>
                </tr>
                <tr>
                    <td>has been successfully registered. </td>
                </tr>
                <tr>
                    <td align="justify">
                        Please take the printed & signed form to the campus of your preference on nominated day.
                        You should have already received the email on <b>abcd@gmail.com</b>, please read it carefully. 
                        Further instructions are provided in the email, including date & time, assessment criteria etc. 
                    </td>
                </tr>
                <tr>
                    <td><b>Thank you and Good luck! </b></td>
                </tr>
                <tr>
                    <td><b>Central Academy Web Registration Team</b></td>
                </tr>
                <tr>
                    <td>Please remember to bring all the documents required, here's a list for you reference:</td>
                </tr>
                <tr>
                    <td><ul style="list-style: disc">
                            <li>Birth Certificate (Self Attested)</li>
                            <li>Passport Size photo <br>(<small>
                                        Size of photo: 2 x 2 inch or 35 x 45 mm or 35 x 35 mm. Color of background: white or off-white.
                                    </small>)
                            </li>
                            <li>Marksheet / Report Card of previous School (if applicable).</li>
                            <li>Transfer Certificate</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <hr class="style16"/>
            <!-- -------------- Registration Form Slip End Here ------------- -->
        </page>
        <page size="A4" class="md-padding">
            <span><br></span>

            <h4 align="center">Registration Form</h4>
            <table class="table" style="background-color: #E67014;">
                <tr>
                    <td width="15%" align="right"></td>
                    <td align="center"><img style="height: 60px;" src="{{url('assets/images/logo_school.png')}}">

                            <span class="clearfix" style="color: #000;">&nbsp;An ISO 9001:2000 Accredited Institute</span></td>
                    <td align="left"><img style="width: 90px;" src="{{url('assets/images/2central-academy-shastri-nagar-ca_logo.png')}}"></td>
                </tr>
            </table>
            <table class="table md-caption">
                <td width="12%">Admitted to:</td>
                <td style="border-bottom: 1px #000 solid"></td>
                <td width="6%"></td>
                <td width="13%">Admission No:</td>
                <td style="border-bottom: 1px #000 solid" ></td>
                <td width="6%"></td>
                <td width="7%">Date:</td>
                <td style="border-bottom: 1px #000 solid"></td>
            </table>
            <table class="table table-bordered md-caption">
                <tr>
                    <td class="h5" colspan="4" style="background-color: #f4f4f4"><b>General Details</b></td>
                </tr>
                <tr>
                    <td>Student Name: </td><td><b>Sanjay Kumar Chaurasia</b></td>
                    <td>Gender: </td><td><b>Male</b></td>
                </tr>
                <tr>
                    <td>Branch Opted: </td><td><b>CHB</b></td>
                    <td>Class Opted :</td><td><b>II</b></td>
                </tr>
                <tr>
                    <td>Sibling Sch No: </td><td><b>S1001</b></td>
                    <td>Sibling Branch:</td><td><b>CHB</b></td>
                </tr>
                <tr>
                    <td>Passport No :</td><td><b>A123546</b></td>
                    <td>Date of Birth: </td><td><b>20 April 1992</b></td>
                </tr>
                <tr>
                    <td>Category: </td><td><b>GEN</b></td>
                    <td>Religion: </td><td><b>Hindu</b></td>
                </tr>
                <tr>
                    <td>Primary Mobile : </td><td><b>9876543210</b></td>
                    <td>Conveyance Opted : </td><td><b>Ashok Udyan</b></td>
                </tr>
                <tr>
                    <td>Current School : </td><td><b>St. Pauls</b></td>
                    <td>Current Class : </td><td><b>I</b></td>
                </tr>
                <tr>
                    <td>Current Result : </td><td colspan="3"><b>Passed</b></td>
                </tr>
                <tr>
                    <td colspan="4"  class="h5" style="background-color: #f4f4f4"><b>Father's Details</b></td>
                </tr>
                <tr>
                    <td>Name : </td><td ><b>Ram Murat Chaurasia</b></td>
                    <td>Email : </td><td><b>abcd@gmail.com</b></td>
                </tr>
                <tr>
                    <td>Landline : </td><td><b>21745163</b></td>
                    <td>Mobile : </td><td><b>9876543210</b></td>
                </tr>
                <tr>
                    <td>Qualification : </td><td><b>Graduate</b></td>
                    <td>Occupation : </td><td><b>Private Service</b></td>
                </tr>
                <tr>
                    <td>Business/Org. Name </td><td><b></b></td>
                    <td>Designation : </td><td><b></b></td>
                </tr>
                <tr>
                    <td>Office Phone No : </td><td><b></b></td>
                    <td>Office Address : </td><td><b></b></td>
                </tr>
                <tr>
                    <td class="h5" colspan="4" style="background-color: #f4f4f4"><b>Mother's Details</b></td>
                </tr>
                <tr>
                    <td>Name : </td><td style="font-size: 14px"><b>Chandravati</b></td>
                    <td>Email : </td><td><b>abcd@gmail.com</b></td>
                </tr>
                <tr>
                    <td>Landline : </td><td><b>2712536</b></td>
                    <td>Mobile : </td><td><b>9876543210</b></td>
                </tr>
                <tr>
                    <td>Qualification : </td><td><b>Graduate</b></td>
                    <td>Occupation : </td><td><b>Housewife</b></td>
                </tr>
                <tr>
                    <td>Business/Org. Name </td><td><b></b></td>
                    <td>Designation : </td><td><b></b></td>
                </tr>
                <tr>
                    <td>Office Phone No : </td><td><b></b></td>
                    <td>Office Address : </td><td ><b></b></td>
                </tr>
            </table>
        </page>

        <page size ="A4" class="md-padding">
            <br><br>
                    <table class="table table-bordered md-caption">
                        <tr>
                            <td colspan="4"  class="h5" style="background-color: #f4f4f4"><b>Guardian's Detail</b></td>
                        </tr>
                        <tr>
                            <td>Name : </td><td><b>Sultan Singh</b></td>
                            <td>Phone : </td><td><b>27145632</b></td>
                        </tr>
                        <tr>
                            <td>Mobile : </td><td><b>9876543210</b></td>
                            <td>Qualification : </td><td ><b>Graduate</b></td>
                        </tr>
                        <tr>
                            <td>Address : </td><td colspan="3"><b>Sector 21</b></td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="h5" style="background-color: #f4f4f4"><b>Current Address</b></td>
                        </tr>
                        <tr>
                            <td>Address 1 : </td>
                            <td colspan="3"><b>Sector 21</b></td>
                        </tr>
                        <tr>
                            <td>Address 2 : </td>
                            <td colspan="3"><b>Chopasni Housing Board</b></td>
                        </tr>
                        <tr>
                            <td>Suburb : </td><td><b>Ashok Udyan</b></td>
                            <td>Pincode : </td><td><b>342008</b></td>
                        </tr>
                        <tr>
                            <td>City : </td><td><b>Jodhpur</b></td>
                            <td>State : </td><td><b>Rajasthan</b></td>
                        </tr>
                        <tr>
                            <td>Country: </td><td colspan="3"><b>India</b></td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="h5" style="background-color: #f4f4f4"><b>Permanent Address</b></td>
                        </tr>
                        <tr>
                            <td>Address 1 : </td>
                            <td colspan="3"><b>Sector 21</b></td>
                        </tr>
                        <tr>
                            <td>Address 2 : </td>
                            <td colspan="3"><b>Chopasni Housing Board</b></td>
                        </tr>
                        <tr>
                            <td>Suburb : </td><td><b>Ashok Udyan</b></td>
                            <td>Pincode : </td><td><b>342008</b></td>
                        </tr>
                        <tr>
                            <td>City : </td><td><b>Jodhpur</b></td>
                            <td>State : </td><td><b>Rajasthan</b></td>
                        </tr>
                        <tr>
                            <td>Country: </td><td colspan="3"><b>India</b></td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="h5" style="background-color: #f4f4f4"><b>Details of two known local contacts</b></td>
                        </tr>
                        <tr>
                            <td>Name : </td><td><b>Sultan Singh Bhati</b></td>
                            <td>Contact No : </td><td><b>9876543210</b></td>
                        </tr>
                        <tr>
                            <td>Address : </td><td colspan="3"><b>Sector 21</b></td>
                        </tr>
                        <tr>
                            <td>Name : </td><td><b>Sultan Singh Bhati</b></td>
                            <td>Contact No : </td><td><b>9876543210</b></td>
                        </tr>
                        <tr>
                            <td>Address : </td><td colspan="3"><b>Sector 21</b></td>
                        </tr>
                    </table>



                    <h4 align="center" style="font-weight: 400;text-decoration: underline">FOR OFFICE USE</h4>
                    <span class="clearfix">&nbsp;</span>
                    <table class="table table-striped md-caption">
                        <tr>
                            <td width="20%">Admitted to standard</td>
                            <td ></td>
                            <td width="6%">Section</td>
                            <td ></td>
                            <td width="6%">Stream</td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td width="18%">Campus Offered</td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td width="16%">Fee Reciept No</td>
                            <td ></td>
                            <td width="5%">Dated</td>
                            <td ></td>
                            <td width="7%">for Rs</td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td colspan="6">issued to the Parents/Gaurdian and certified that the name has been entered
                                in the Class Attendance Register.</td>
                        </tr>
                        <tr style="height: 50px;">
                            <td  width="25%" style="border-bottom: 1px #000 solid;"></td>
                            <td colspan="4"></td>
                            <td  width="25%"  style="border-bottom: 1px #000 solid;"></td>
                        </tr>
                        <tr>
                            <td align="center">Accountant</td>
                            <td colspan="4"></td>
                            <td align="center">Principal</td>
                        </tr>
                    </table>
                    </page>




                    <!-- JQUERY:: BOOTSTRAP.JS --> 
                    <script type="text/javascript" src="http://localhost/360academic/assets/js/jquery.min.js"></script>   
                    <script type="text/javascript" src="http://localhost/360academic/assets/js/bootstrap.min.js"></script>   

                    <!-- ANGULAR:: ANGULAR MATERIAL PACKAGE -->
                    <script src="http://localhost/360academic/assets/js/angular.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/angular-animate.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/angular-aria.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/angular-messages.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/angular-material.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
                    <script src="http://localhost/360academic/assets/js/select2.js"></script>
                    <script src="http://localhost/360academic/assets/js/select2_src.js"></script>
                    <script src="http://localhost/360academic/assets/js/sweetalert.min.js"></script>

                    </body>
                    </html> 	    