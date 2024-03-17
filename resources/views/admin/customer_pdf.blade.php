@extends('layouts/admin-master')
@section('admin')
<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Approval Letter</title>
    <style>
        body {
            
            font-size: 12pt;
        }

        p {
            margin: 0;
            font-size: 13pt;
            line-height: 24px;
            padding: 10px;
            
        }
        

        h1, h2, h3, h4 {
            margin: 0;
            
        }
        ul li{
            line-height: 34px;
        }

        table {
            width: 100%;            
            border-collapse: collapse;
        }

        

        table, th, td {
            border: 1px solid #e7e7e7;
            font-size: 15px;
    font-weight: 500;
    padding: 1.25rem 0.625rem;
        }

        th, td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .totals {
            text-align: right;
        }

        .items td.cost {
            text-align: center;
        }
    </style>
</head>
<body>

    <section id="print">

        <div class="container" style="padding:30px;">
    <table width="100%" >
<tr><h2 style="text-align: center">LOAN APPROVAL LETTER</h2></tr>

        <tr>
            <td style="width:50%">
                <h3 style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getAdmin->name?></h3>
                <p style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getAdmin->address?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;">Mobile: +91 <?= $getAdmin->mobile?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;">Email: <?= $getAdmin->email?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;">Web: <?= $getAdmin->website?></p>

                
                <h4 style="margin-block-start: 9px;margin-block-end: 9px;padding-top: 10px">To,</h4>
                <h4 style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getCustomer->name?></h4>
                <p style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getCustomer->address?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getCustomer->email?></p>
            </td>

            <td style="width:50%">
                <?php logo()?>
                <p style="margin-block-start: 9px;margin-block-end: 9px;text-align: right;">Phone: <?= $getCustomer->mobile?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;text-align: right;">Document: CBFL/<?= rand ( 10000 , 99999 );?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;text-align: right;">Proposal: CBFL/<?= rand ( 10000 , 99999 );?></p>
                <p style="margin-block-start: 9px;margin-block-end: 9px;text-align: right;">Dated: <?= date('d-m-Y')?></p>
            </td>
        </tr>
    </table>

    <h4 style="margin-block-start: 9px;margin-block-end: 9px;">Dear,</h4>
    <h4 style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getCustomer->name?></h4>
    <p style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getAdmin->name?> welcomes you. We are pleased to inform you that your application for a <?= @$getCustomer->loantype?> of 
        amount Rs <?= number_format($getCustomer->loanamoun) ?>        has been accepted. 
        The information provided by you has been verified by the Company team through online 
        Aadhar/PAN number. Below are the details captured in the <?= $getAdmin->name?> records:</p>

    <table width="100%" style='table'>
        <tr>
            <h3 style="text-align: center">APPLICATION DETAILS</h3>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Serial No.</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Reference No.</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Application No.</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <!-- Other application details -->
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Applicant Name </td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->name?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Applicant Address</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->address?></td>
        </tr>


        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">PAN Number</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->pancard?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Aadhaar Number</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->aadharno?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Account Holder </td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->name?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Account Number</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->bankaccountno?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">IFSC Code</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->bankifsccode?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Bank Name</td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $getCustomer->bankname?></td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <h4 style="text-align: center;margin-block-start: 9px;margin-block-end: 9px;color:#3f51b5">EMI and Loan Amount Approved</h4>
        </tr>

        <?php
                                    
                                    $amount = $getCustomer->loanamoun;
                                    $durationYears = $getCustomer->loantenure;
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
            <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">EMI: </td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Rs <?= number_format($emi)?></td>
        </tr>
        <tr>
            <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Loan Amount: </td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Rs <?= number_format($getCustomer->loanamoun) ?></td>
           
        </tr>
        <tr>
            <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Interest Rate:  </td>
            <td style="width:30%;padding: 5px;border: 1px solid #000;border-radius: 4px;">6.99%</td>
           
        </tr>
    <div>
        <img src="{{asset('backend/approved.png')}}" style="left: 450px;position: absolute;top: 871px; width: 37%;">
    </div>
    </table>

    <h2 style="padding-top: 60px">Kindly submit all documents.</h2>
    <ul>
        <li>Self-attested copy of PAN card</li>
        <li>Self-attested passport size photograph (two)</li>
        <li>Two references from your locality (with contact numbers)</li>
        <li>Copy of bank statement/cancelled cheque/bank passbook copy</li>
        <li>Processing amount - Rs <?= number_format($getCustomer->processing_free)?> (refundable within 15 days)</li>
    </ul>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Note: Cash deposits are not allowed.</p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Account Details:</p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Account Holder Name:  <?= $getAdmin->name?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Account Number:  <?= $getAdmin->account?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Account Type: Current Account</p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">IFSC: <?= $getAdmin->ifsc?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Bank Name: Bank of <?= $getAdmin->bank_name?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Bank Address: <?= $getAdmin->bank_address?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Payment Mode: NEFT/RTGS/IMPS/UPI/Net Banking</p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Note: Cash deposits are not allowed as per company rules and regulations.</p>

    <h1 style="text-align: center;">EMI Rs <?= number_format($emi)?></h1>

    <div style="text-align: center;padding-bottom: 16px">
        <img src="{{ asset('backend/chart.png')}}">
    </div>
    <table width="100%">
       
        <tr>
            <td style="border: 1px solid #0000007d;background:#8BC34A;width:3%"></td>
            <td style="border: 1px solid #0000007d;width:45%">Interest Payable: Rs <?= number_format($totalPayment-$getCustomer->loanamoun) ?></td>
            <td style="border: 1px solid #2196f3;background:#2196f3;width:3%"></td>
            <td style="border: 1px solid #0000007d;width:42%">Principal Amount: Rs <?= number_format($getCustomer->loanamoun) ?></td>
        </tr>

        <tr>
            <td colspan="3" style="text-align: center;text-align: right;padding-top: 16px"> <h4>Total Payment: Rs <?= number_format($totalPayment)?></h4></td>
        </tr>
    </table>







    <?php
    // Loan details
    $loanAmount = $getCustomer->loanamoun; // Loan amount
    $loanTenureYears = $getCustomer->loantenure; // Loan tenure in years
    $annualInterestRate = $getAdmin->annualInterestRate; // Annual interest rate
    
    // Calculate monthly interest rate
    $monthlyInterestRate = ($annualInterestRate / 100) / 12;
    
    // Calculate total number of payments (months)
    $totalPayments = $loanTenureYears * 12;
    
    // Calculate EMI using the formula
    $emi = ($loanAmount * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$totalPayments));
    
    // Round EMI to 2 decimal places
    $emi = round($emi, 2);
    
    // Monthly repayment schedule
    $monthlySchedule = [];
    $balance = $loanAmount;
    for ($i = 1; $i <= $totalPayments; $i++) {
        // Calculate interest for the current month
        $interest = $balance * $monthlyInterestRate;
    
        // Calculate principal for the current month
        $principal = $emi - $interest;
    
        // Update balance for the next month
        $balance -= $principal;
    
        // Round values to 2 decimal places
        $interest = round($interest, 2);
        $principal = round($principal, 2);
        $balance = round($balance, 2);
    
        // Store the details for the current month
        $monthlySchedule[] = [
            'Month' => date('M-Y', strtotime("+$i months")), // Format: Month-Year
            'Principle' => $principal,
            'Interest' => $interest,
            'Balance' => $balance
        ];
    }
    ?>
    
    <!-- Monthly repayment schedule table -->
    <h1 style="text-align: center;padding-top:100px ">Loan Repayment Schedule</h1>
    <table width="100%">
        <thead>
            <tr style="background:#727972">
                <th style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Month</th>
                <th style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Principle</th>
                <th style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Interest</th>
                <th style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;">Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monthlySchedule as $index => $schedule) : ?>
                <tr <?= $index % 2 == 0 ? 'style="background:#fff"' : 'style="background:#fff"' ?>>
                    <!--<td style="width:10%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?//= $index ?></td>-->
                    
                    <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $schedule['Month'] ?></td>
                    <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $schedule['Principle'] ?></td>
                    <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $schedule['Interest'] ?></td>
                    <td style="width:20%;padding: 5px;border: 1px solid #000;border-radius: 4px;"><?= $schedule['Balance'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <h3>This is a Computer Generated Document does not Require Signature</h3>






  </div>
    </section>

</body>
</html>

@endsection