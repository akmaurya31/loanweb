@extends('layouts/admin-master')
@section('admin')
<!DOCTYPE html>

<center>
    <p>
    </p>
    <button class="d-none d-sm-inline-block btn  btn-success shadow-sm pull-right" onclick="PrintDiv()" id="btnPrint"><i class="glyphicon glyphicon-plus"></i><i class="fa fa-user fa-sm text-white-50"></i> Print</button>
    <p></p>

</center>
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

           
                <?php logo()?>
                <h4 style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getAdmin->name?></h4>
                <p style="margin-block-start: 9px;margin-block-end: 9px;">Date: <?= date('d/m/Y')?></p>

                <br>
    <h3 style="margin-block-start: 9px;margin-block-end: 9px;">Dear,</h3>
    <h3 style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getCustomer->name?></h3>
<br>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Your Loan Amount Rs.
    <?= $getCustomer->loanamoun?></p>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">Your transaction failed loan insurance is under Process please complete Insurance Charge Rs. <?= $getCustomer->helth_insorence_free?>
    This Payment is fully refundable within 10 Minute</p>

        <p style="margin-block-start: 9px;margin-block-end: 9px;background:#760a0a66"><?= $getAdmin->name?> Loan Protect Insurance (Individual) - Policy Wording</p>

    <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt"> 1. Operative Clause</h5>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">
<?= $getAdmin->name?> General Insurance Company Limited (We, Our or Us) will provide the insurance described in 
this Policy and any endorsements thereto for the Insured Period as defined in this Policy, to the Insured
Persons detailed in the Policy Schedule and in <?= $getAdmin->name?> upon the statements contained in the Proposal 
and Declaration Form filled and signed by the Policyholder, which shall be the basis of this Policy and are
deemed to be incorporated herein in return for the payment ofthe required premium when due and compliance
with all applicable provisions of this Policy.
</p>
<p style="margin-block-start: 9px;margin-block-end: 9px;">The insurance provided under this Policy is only with respect to such and so many of the benefits as are
indicated by a specific amount set opposite in the Policy Schedule.</p>

   <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt"> 2. Definitions</h5>
    <p style="margin-block-start: 9px;margin-block-end: 9px;">This Policy, the Schedule and any Clauses thereon shall be considered one document and any word or
expression to which a specific meaning has been attached in Definitions bears that specific meaning wherever
it appears in this Policy.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Accident</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">An accident is a sudden, unforeseen and involuntary event caused by external, visible & violent mean.
</p>   <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Bank / Financial Institution</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means a banking company which transacts the business of banking in India or abroad and Financial
Institution engaged in activity of providing loans and duly reco gnised by appropriate authority.
</p>   <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Civil War</h5>
 <p style="margin-block-start: 9px;margin-block-end: 9px;">means war, whether declared or not, or any warlike activities, including use of military force by any
sovereign nation to achieve economic, geographic, nationalistic, political, racial, religious or other ends.
</p>   <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Dependent child</h5>

 <p style="margin-block-start: 9px;margin-block-end: 9px;">Means a child (natural or legally adopted), who is financially dependent on the primary insured or proposer
 and does not have his/her independent source of income. Further, the age of the child must be between 5 years
 to 21 years and who shall be unmarried.</p>
 <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Disclosure to information norm</h5>
 <p style="margin-block-start: 9px;margin-block-end: 9px;">The policy shall be void and all premium paid thereon shall be forfeited to the Company in the event of
 misrepresentation, miss-description or non-disclosure of any material fact</p>




 <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt; ">Grace Period</h5>
 <p style="margin-block-start: 9px;margin-block-end: 9px;">Grace period means the specified period of time immediately following the premium due date during which
a payment can be made to renew or continue a policy in force without loss of continuity benefits such as
waiting periods and coverage of preexisting diseases. Coverage is not available for the period for which no
premium is received.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Home / Insured Premises / Property</h5>
 <p style="margin-block-start: 9px;margin-block-end: 9px;">Means the building of standard construction at the address mentioned in the Schedule, which has been
constructed or purchased out of the home loan being covered under this Policy.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Loan EMI</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means the equated monthly instalment payable by the Insured to a financial institution for the loan.
</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;">Hospital</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">A hospital means any institution established for in-patient care and day care treatment of illness and/or injuries
and which has been registered as a hospital with the local authorities under Clinical Establishments
(Registration and Regulation) Act 2010 or under enactments specified under the Schedule of Section 56(1)
and the said act Or complies with all minimum criteria as under:</p>

<ul style="padding-top:70px">
<li>1. has qualified nursing staff under its employment round the clock;</li>
    <li>2. has at least 10 in-patient beds in towns having a population of less than 10,00,000 and at least 15 inpatient beds in all other places;</li>
        <li>3. has qualified <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">(s) in charge round the clock;</li>
            <li>4. has a fully equipped operation theatre of its own where surgical procedures are carried out;</li>
                <li>5. maintains daily records of patients and makes these accessible to the insurance company’s authorized
personnel;</li>
</ul>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;">Illness</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">
Illnessmeans a sickness or a disease or pathological condition leading to the impairment of normal
physiological function and requires medical treatment</p>
<ul>
<li>1. Acute condition - Acute condition is a disease, illness or injury that is likely to respond quickly to treatment
which aims to return the person to his or her state of health immediately before suffering the
disease/ illness/ injury which leads to full recovery</li>
<li>2. Chronic condition - A chronic condition is defined as a disease, illness, or injury that has one or more
of the following characteristics:
<ul>
<li>1. it needs ongoing or long-term monitoring through consultations, examinations, check-ups, and
/or tests</li>
<li>2. it needs ongoing or long-term control or relief of symptoms</li>
    <li>3. it requires rehabilitation for the patient or for the patient to be specially trained to cope with it
    </li><li>4. it continues indefinitely</li>
            <li>5. it recurs or is likely to recur</li>
        </ul>
</ul>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Injury</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;"><p style="margin-block-start: 9px;margin-block-end: 9px;">Injury means accidental physical bodily harm excluding illness or disease solely and directly caused by
external, violent, visible and evident means which is verified and certified by a <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">.
</p><h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Insurable/Insured event</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means an event, loss or damage for which the Insured is entitled to benefit/s under this Policy.
</p>




<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;">Insured/ Named Insured</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Insured means the persons, or his Family members, named in the Schedule.
</p></h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">
     means a person who holds a valid registration from the Medical Council of any State
or Medical Council of India or Council for Indian Medicine or for Homeopathy set up by the Government of India
or a State Government and is therebyentitled to practice medicine within its jurisdiction; and is acting within
its scope and jurisdiction of license.</p>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Notification of Claim</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Notification of claim means the process of intimating a claim to the insurer or TPA through any of therecognized
modes of communication.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Outstanding e loan</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means the amount outstanding on any given day to a financial institution of the principal loan and interest
thereon payable by the Insured.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Permanent total Disability</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">A disability condition certified by Civil Surgeon of Government hospital stating the continuous and
permanent:</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">loss of the sight of both eyes</h5>
<ul>
    <li>physical separation of or the loss of ability to use both hands or both feet</li>
        <li>physical separation of or the loss of ability to use one hand and one foot</li>
            <li>loss of sight of one eye and the physical separation of or the loss of ability to use either one hand or
one foot</li></ul>
    

<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Policy</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Policy document is a legal document which is an evidence of the contract of Insurance between the
Proposer/Insured and the Insurer and inter Alia, includes the Proposal Form, Declaration Form, the Policy
Schedule, Company’s covering letter to the Insured, any enrolment forms, endorsements, papers or riders
attaching to or forming part hereof, issued either at the inception or during the policy period.
</p><h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Policy period/Period of insurance</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">The period between and including the start and end dates shown in the schedule
</p><h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Pre existing disease/Condition</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Pre-Existing Disease means any condition, ailment or injury or related condition(s) for which there were
signs or symptoms, and
/ or were diagnosed, and / or for which medical advice / treatment was received within 48 months prior to
the first policy issued by the insurer and renewed continuously thereafter</p>




<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;">Renewal</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Renewal means the terms on which the contract of insurance can be renewed on mutual consent with a
provision of grace period for treating the renewal continuous for the purpose of gaining credit for preexisting diseases, time-bound exclusions and for all waiting periods.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;padding-top:70px">Schedule</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means the document attached name so and to and the forming part of this Policy mentioning the details of
the Insured/ Insured Person/s, the Sum Insured, the period and the limits to which benefits under the
Policy are subject to.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Sum Insured</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means the sum as specified in the schedule, which sum represents the Company's maximum liability for
any or all claims under this Policy during the Policy period.</p>

<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt;">Surgery or Surgical procedure</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Surgery or Surgical Procedure means manual and / or operative procedure (s) required for treatment of an
illness or injury, correction of deformities and defects, diagnosis and cure of diseases, relief from suffering
and prolongation of life, performed in a hospital or day care centre by a <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt"></p>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Terrorism</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means activities against persons, organizations or property of any nature:
</p>
<ul>
    <li>1. That involve the following or preparation for the following:</li>
        <li>1. Use or threat of force or violence; or</li>
            <li>2. Commission or threat of a dangerous act; or</li>
                <li>3. Commission or threat of an act that interferes with or disrupts an electronic, communication,
information or mechanical system; and</li>
<li>2. When one or both of the following applies:</li>
    <li>1. The effect is to intimidate or coerce a government or the civilian population or any segment thereof,
or to disrupt any segment of the economy; or</li>
<li>2. It appears that the intent is to intimidate or coerce a government, or to further political, ideological,
religious, social or economic objectives or to express (or express opposition to) a philosophy or
ideology.</li>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">You, Your, Yourself/ Your Family</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Name in the schedule means the person or persons that we insure as set out in the Schedule.</p>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">We, Our, US, Ours, The company</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">Means the <?= $getAdmin->name?> General Insurance Company Limited.</p>


<h4>3. PRODUCT INFORMATION</h4>
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Eligibility Criteria:</h5>
This product may be obtained by any Indian Citizen / FI’s / Banks.
<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">Age Limit:</h5>
<p style="margin-block-start: 9px;margin-block-end: 9px;">
To be eligible to be covered under the Policy or get any benefits under the Policy, the Insured should have
attained the age of at least 18 years and shall not have completed the age of 65 years on the date of
commencement of the Policy Period as applicable</p>


<h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt">4. Duration of Coverage:</h5>
<ul>
<li>1. The policy can be opted for 1, 2 or 3 years.</li>
    <li>2. The Cover under the policy commences from date of premium receipt.</li>
        <li>3. The cover under this Policy, for the specific Insured, shall terminate in the event of a claim under any section 
of the policy in respect of that insured becoming admissible and accepted by the Company and only
upon full sum insured being payable to the insured except under loss of job.
<li>4. Critical Illness and Unemployment cover operates after a three month waiting period from inception of the
policy</li>
</ul>
<img src="{{asset('backend/insoence.jpg')}}">

<p style="margin-block-start: 9px;margin-block-end: 9px;"><?= $getAdmin->name?></p>
  </div>
    </section>

</body>
</html>





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