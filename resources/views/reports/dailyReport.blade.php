@extends('layouts.app')
@section('content')
<br><br>

<div class="container-d">
    <div class="container">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Daily Report</div>
                <div class="panel-body " style="font-size: 13px;" >
                    <h3 align="center">Shastri Nagar [ 15-05-2017 ]</h3>

                    <table class="table table-striped table-hover table-bordered">

                        <tr  style="font-size: 16px">
                            <td style="font-weight: 400">New Admission</td>
                            <td></td>
                            <td style="font-weight: 500" width="15%">5</td>
                        </tr>
                        
                        <tr  style="font-size: 16px">
                            <td style="font-weight: 400">Total Collection</td>
                            <td></td>
                            <td style="font-weight: 500" width="15%">2,25,000</td>
                        </tr>
                        <tr class="info">
                            <th colspan="2">Fee Collection F.O</th>
                            <th width="15%" >2,00,000</th>
                        </tr>
                        <tr>
                            <td > Cash  -  <b>1,50,000</b></td>
                            <td width="42%">Cheque [ 2 ] - <b>50,000</b></td>
                            <td></td>
                        </tr>
                    </table>

                    

                    <table class="table table-striped table-hover table-bordered" >
                       
                        
                    </table>

                    <table class="table  table-hover table-bordered">
                        <tr>
                            <td>Installment Fees</td>
                            <td width='15%'>1,30,000</td>
                            <td width='15%'></td>
                        </tr>
                        <tr>
                            <td>Late Fees</td>
                            <td width='15%'>1,000</td>
                            <td width='15%'></td>
                        </tr>
                        <tr>
                            <td>TC Fees [ 2 ]</td>
                            <td width='15%'>400</td>
                            <td width='15%'></td>
                        </tr>
                        <tr>
                            <td>Conveyance  Fees</td>
                            <td width='15%'>15,000</td>
                            <td width='15%'></td>
                        </tr>
                        <tr>
                            <td>Registration Form [ 5 x 200 ]</td>
                            <td width='15%'>1,000</td>
                            <td width='15%'></td>
                        </tr>
                        <tr>
                            <td>Cheque Bounce [ 3 ] &nbsp;&nbsp;&nbsp; CHQ123, &nbsp; CHQ253, &nbsp;C00123</td>
                            <td width='15%'> 1200</td>
                            <td width='15%'></td>
                        </tr>
                        <tr class="info">
                            <td colspan="3"> Cheque Collection Details</td>
                        </tr>
                        <tr>
                            <td>CHQ123 SBI </td>
                            <td width="15%">6800</td>
                            <td width="15%"></td>
                        </tr>
                        <tr>
                            <td>CHQ321 ICICI </td>
                            <td width="15%">5500</td>
                            <td width="15%"></td>
                        </tr>
                        <tr class="success">
                            <td colspan="2">Other Payment Mode</td>
                            <td width="15%">25,000</td>
                        </tr>
                        <tr>
                            <td>Deposited In Bank</td>
                            <td width="15%">15,000</td>
                            <td width="15%"></td>
                        </tr>
                        <tr>
                            <td>Paytm</td>
                            <td width="15%">10,000</td>
                            <td width="15%"></td>
                        </tr>
                        <tr class="danger">
                            <td>Total Expense</td>
                            <td width="15%"></td>
                            <td width="15%">15,000</td>
                        </tr>
                        <tr>
                            <td>Fee Refund | [Inst x 4] |  VII-B | S1001 | Sanjay Kumar</td>
                            <td width="15%">7,500</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bill No 1</td>
                            <td width="15%">250</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bill No 2</td>
                            <td width="15%">350</td>
                            <td></td>
                        </tr>
                        <tr class="warning">
                            <td>Final Closing Amount:</td>
                            <td></td>
                            <td width="15%" style="font-weight: 500">2,10,000</td>
                        </tr>
                        <tr class="warning">
                            <td>Fee Due by Date:</td>
                            <td></td>
                            <td width="15%" style="font-weight: 500">18,35,400</td>
                        </tr>
                    </table>

                   


                    

                    <table class="table table-bordered table-hover table-striped" style="font-size: 15px;">
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
@endsection