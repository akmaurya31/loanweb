
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Approval Letter</title>
  
</head>
<body>

    <section id="print">

        <div class="container" style="padding:-250px;">
            
             <h2 style="text-align: center;margin-block-start: 1pt;margin-block-end: 1pt;line-height: 1pt;">LOAN APPROVAL LETTER</h2>
             
    <table width="100%" >
        <tr>
            <td style="width:50%">
            
                <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;"><strong><?= $getAdmin->name?></strong><br><?= $getAdmin->address?>
                <br>Mobile: +91 <?= $getAdmin->mobile?>
                <br>Email: <?= $getAdmin->email?>
                <br>Web: <?= $getAdmin->website?></p>

                
                <strong style="margin-block-start: 9pt;margin-block-end: 9pt;padding-top: 10px;line-height: 19pt;">To,
                <br><?= $getCustomer->name?></strong>
                <p style="margin-block-start: 9pt;margin-block-end: 9pt;"> <?= $getCustomer->address?>
                <br><?= $getCustomer->email?></p>
            </td>

            <td style="width:50%">
                <?php logo()?>
                <p style="margin-block-start: 9pt;margin-block-end: 9pt;text-align: right;line-height: 19pt;">Phone: <?= $getCustomer->mobile?>
                <br>Document: CBFL/<?= rand ( 10000 , 99999 );?>
                <br>Proposal: CBFL/<?= rand ( 10000 , 99999 );?>
                <br>Dated: <?= date('d-m-Y')?></p>
            </td>
        </tr>
    </table>

    <strong style="margin-block-start: 9pt;margin-block-end: 9pt;">Dear,
    <br><?= $getCustomer->name?></strong>
    
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;"><?= $getAdmin->name?> welcomes you. We are pleased to inform you that your application for a <?= @$getCustomer->loantype?> of 
        amount Rs <?= number_format($getCustomer->loanamoun) ?>        has been accepted. 
        The information provided by you has been verified by the Company team through online 
        Aadhar/PAN number. Below are the details captured in the <?= $getAdmin->name?> records:</p>
        
        <h3 style="text-align: center">APPLICATION DETAILS</h3>

    <table width="100%" style='table'>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Serial No.</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Reference No.</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Application No.</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">CBFL/<?= rand ( 10000 , 99999 );?></td>
        </tr>
        <!-- Other application details -->
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Applicant Name </td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->name?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Applicant Address</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->address?></td>
        </tr>


        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">PAN Number</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->pancard?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Aadhaar Number</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->aadharno?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Account Holder </td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->name?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Account Number</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->bankaccountno?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">IFSC Code</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->bankifsccode?></td>
        </tr>
        <tr>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Bank Name</td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $getCustomer->bankname?></td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <h4 style="text-align: center;margin-block-start: 9pt;margin-block-end: 9pt;color:#3f51b5">EMI and Loan Amount Approved</h4>
        </tr>

        <?php
                                    
                                    $amount = $getCustomer->loanamoun;
                                    $durationYears = $getCustomer->loantenure;
                                    $months = $durationYears * 12;
                                    
                                    $annualInterestRate = 6.99; // 5% annual interest rate
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
            <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">EMI: </td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Rs <?= number_format($emi)?></td>
        </tr>
        <tr>
            <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Loan Amount: </td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Rs <?= number_format($getCustomer->loanamoun) ?></td>
           
        </tr>
        <tr>
            <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Interest Rate:  </td>
            <td style="width:30%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">6.99%</td>
           
        </tr>
    <div>
        <img src="{{asset('backend/approved.png')}}" style="left: 400px;position: absolute;top: 751px; width: 50%;">
    </div>
    </table>
    
    

    <h2>Kindly submit all documents.</h2>
    <ul>
        <li>Self-attested copy of PAN card</li>
        <li>Self-attested passport size photograph (two)</li>
        <li>Two references from your locality (with contact numbers)</li>
        <li>Copy of bank statement/cancelled cheque/bank passbook copy</li>
        <li>Processing amount - Rs <?= number_format($getCustomer->processing_free)?> (refundable within 15 days)</li>
    </ul>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Note: Cash deposits are not allowed.</p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Account Details:</p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Account Holder Name:  <?= $getAdmin->name?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Account Number:  <?= $getAdmin->account?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Account Type: Current Account</p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">IFSC: <?= $getAdmin->ifsc?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Bank Name: Bank of <?= $getAdmin->bank_name?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Bank Address: <?= $getAdmin->bank_address?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Payment Mode: NEFT/RTGS/IMPS/UPI/Net Banking</p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;">Note: Cash deposits are not allowed as per company rules and regulations.</p>

    <h1 style="text-align: center;">EMI Rs <?= number_format($emi)?></h1>

    <div style="text-align: center;padding-bottom: 16px">
        <img src="{{ asset('backend/chart.png')}}" style="width:60%">
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
    $annualInterestRate = 6.99; // Annual interest rate
    
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
    <h1 style="text-align: center;">Loan Repayment Schedule</h1>
    <table width="100%">
        <thead>
            <tr style="background:#727972">
                <th style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Month</th>
                <th style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Principle</th>
                <th style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Interest</th>
                <th style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt">Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monthlySchedule as $index => $schedule) : ?>
                <tr <?= $index % 2 == 0 ? 'style="background:#fff"' : 'style="background:#fff"' ?>>
                    <!--<td style="width:10%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?//= $index ?></td>-->
                    
                    <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $schedule['Month'] ?></td>
                    <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $schedule['Principle'] ?></td>
                    <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $schedule['Interest'] ?></td>
                    <td style="width:20%;padding: 4px;border: 1px solid #000;border-radius: 4px;font-size:10pt"><?= $schedule['Balance'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <h3>This is a Computer Generated Document does not Require Signature</h3>






  </div>
    </section>

</body>
</html>

