@extends('frant/layouts/frant-master')
@section('webfrant')
    <div id="wptb-page-title-default">
        <div class="wptb-page-title-default-bg"
            style="background-image:url({{ asset('frantend/img/background/bg-pagetitle.jpg') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="wptb-page-title"></h1>

                </div>
            </div>
        </div>
    </div>

    <style>
        table {
            width: 100%;        
            margin-top: 40px;
        
        }

        #htmlContent {
            text-align: center;
        }

        td,
        th,
        button {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        button {
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .iam {
            width: 50%;
            height: 80px;
            display: inline;
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem;
            list-style: none;
        }

        .lisk {
            font-size: 17px;
            font-weight: 600px;

        }


        .code {
            width: 100px;
            height: 100px;

        }
    </style>

    <section id="print">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <a href="/" class="logo-default">
                        <h1 class="text-white;"
                            style="text-transform: uppercase;
                    background: #ff0000;
                    color: #fff;
                    font-size: 32px;">
                            <?= $getAdmin->name ?></h1>
                    </a>
                </div>


                <div class="col-lg-12 lisk">
                    <ul>
                        <li><b>Address:</b> <?= $getAdmin->address ?></li>
                        <li><b>Phone No:</b> <?= $getAdmin->mobile ?></li>
                        <li><b>Email Id:</b> <?= $getAdmin->email ?></li>
                    </ul>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h2 style="color:orange;font-weight:700;text-align:center;">Pending</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>To<br> Dear <b> <?= $getUser->name ?></b><br> Greeting !<br>Email Id: <b>
                            <?= $getUser->email ?></b><br>Mobile No: <b> <?= $getUser->mobile ?></b>
                    </p>
                </div>
                <div class="col-lg-12">

                    <p><?= $getAdmin->name ?> Welcome you. We are Please to Inform You That Your ApplicationFor Personal
                        Loan of Amount
                        <b> <?= $getUser->loanamoun ?></b> has been Accepted.The Information Mentioned By you has been
                        Investigation Secretly by
                        the Company Team through Online Aadhar/Pan no based given below are the details as
                        capture in the <?= $getAdmin->name ?> Recorded with us. please go through the carefully
                        and inimate to us immediately in case of any Discrepancy.
                        your Application Details Below:
                    </p>
                    <h2 style="font-weight:600;" class="mb-4 mt-4 text-warning text-center">Application Details</h2>


                    <div class="offset-lg-1 col-lg-10 offset-lg-1">
                        <div id="htmlContent loveyou">

                            <table>
                                <tbody>

                                    <tr>
                                        <th>Application No.</th>
                                        <th>PN08561058<?= $getUser->id ?></th>
                                    </tr>
                                    <tr>
                                        <th>Aadhar No.</th>
                                        <th><?= $getUser->aadharno ?></th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
       
            <div class="row">
                <div class="col-lg-12">
                    <div class="offset-lg-1 col-lg-10 offset-lg-1">
                        <div id="htmlContent loveyou">

                            <table style="margin-top:40px;">
                                <tbody>

                                    <tr>
                                        <th>Bank Name.</th>
                                        <th><?= $getUser->bankname ?></th>
                                    </tr>
                                    <tr>
                                        <th>Account No.</th>
                                        <th><?= $getUser->bankaccountno ?></th>

                                    </tr>
                                    <tr>
                                        <th>IFSC Code.</th>
                                        <th><?= $getUser->bankifsccode ?></th>
                                    </tr>
                                    <tr>
                                        <th>PAN Card No.</th>
                                        <th><?= $getUser->pancard ?></th>
                                    </tr>
                                    <tr>
                                        <th>City.</th>
                                        <th><?= $getUser->city ?></th>
                                    </tr>
                                    <tr>
                                        <th>Pin Code.</th>
                                        <th><?= $getUser->pincode ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="row">



                <div class="col-lg-12 lisk">
                    <ul>

                        <li>self Attested Copy of Voter Card / Aadhar Card</li>
                        <li>self Attested Copy of PAN Card</li>
                        <li>self Attested Passport Size Photograph (Two)</li>
                        <li>Two References From Your Locality (Having Good Good will in the Soceity) With Full Details
                            Including Contact Numbers Copy of Bank Statement / Cancel Cheque / Banck Passbook Copy
                            Processing amount is INR <b>₹ <?= $getAdmin->processing_free ?> /- </b>You Can Make Payment
                            Through NEFT/RTGS/IMPS/UPI Net Banking.</li>
                        <b>Note: </b>Cash Deposite Are Not Allowed as per Company Rule and Regulations.
                    </ul>

                </div>
            </div>
       
            <div class="row">
                <div class="col-lg-12">
                    <div class="offset-lg-1 col-lg-10 offset-lg-1">
                        <div id="htmlContent">
                            <h2 style="font-weight:600;" class="mb-4 mt-4 text-warning">Account Details</h2>

                            <table>
                                <tbody>

                                    <tr>
                                        <th>Bank Name.</th>
                                        <th> <?= $getAdmin->bank_name ?></th>
                                    </tr>
                                    <tr>
                                        <th>Account No.</th>
                                        <th> <?= $getAdmin->account ?></th>

                                    </tr>
                                    <tr>
                                        <th>IFSC Code.</th>
                                        <th> <?= $getAdmin->ifsc ?></th>
                                    </tr>
                                    <tr>
                                        <th>Gpay No.</th>
                                        <th> <?= $getAdmin->google_pay ?></th>
                                    </tr>
                                    <tr>
                                        <th>Holder Name</th>
                                        <th> <?= $getAdmin->holder_name ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="offset-lg-1 col-lg-10 offset-lg-1">
                        <div id="htmlContent">
                            <h2 style="font-weight:600;" class="mb-4 mt-4 text-warning">Loan Details</h2>
                            <table>
                                <tbody>

                                    <?php
                                    
                                    $amount = $getUser->loanamoun;
                                    $durationYears = $getUser->loantenure;
                                    $months = $durationYears * 12;
                                    
                                    $annualInterestRate = $getAdmin->annualInterestRate; // 5% annual interest rate
                                    $monthlyInterestRate = $annualInterestRate / 100 / 12; // Monthly interest rate in decimal
                                    
                                    // Calculate EMI using the formula
                                    $emi = ($amount * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$months));
                                    
                                    // Total payment is EMI multiplied by the number of months
                                    $totalPayment = $emi * $months;
                                    
                                    // Round EMI and Total Payment to 2 decimal places
                                    $emi = round($emi, 2);
                                    $totalPayment = round($totalPayment, 2);
                                    
                                    ?>
                                    <tr>
                                        <th>EMI</th>
                                        <th id="">₹<?= $emi ?>/ Montly</th>
                                    </tr>
                                    <tr>
                                        <th>Loan Amount</th>
                                        <th>₹ <?= $getUser->loanamoun ?></th>

                                    </tr>
                                    <tr>
                                        <th>Interest Payable</th>
                                        <th id="amount2"></th>
                                    </tr>
                                    <tr>
                                        <th>Loan Tenure</th>
                                        <th id="time"> <?= $getUser->loantenure ?> Year</th>
                                    </tr>
                                    <tr>
                                        <th>Interest Rate</th>
                                        <th id="rate">₹ 10</th>
                                    </tr>
                                    <tr>
                                        <th>Total Payable Amount</th>
                                        <th id="amount4">₹<?= $totalPayment ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="editor"></div>
    <center>
        <p>
        </p>
        <button class="d-none d-sm-inline-block btn  btn-success shadow-sm pull-right" onclick="PrintDiv()" id="btnPrint"><i class="glyphicon glyphicon-plus"></i><i class="fa fa-user fa-sm text-white-50"></i> Print</button>
        <p></p>

    </center>

 
    <script>
      function PrintDiv() {
        var divToPrint = document.getElementById('print');
        var popupWin = window.open('');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
      }
    </script>

@endsection
