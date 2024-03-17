
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Approval Letter</title>
   
</head>
<body>

    <section id="print">

        <div class="container" style="padding:-130px;"> 
                <?php logo()?>
                
                <h3><?= $getAdmin->name?></h3>
               <strong>Date: <?= date('d/m/Y')?></strong>

                <br>
    <strong>Dear,
    <br><?= $getCustomer->name?></strong>

    <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Your Loan Amount Rs.
    <?= $getCustomer->loanamoun?></p>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Your transaction failed loan insurance is under Process please complete Insurance Charge Rs. <?= $getCustomer->helth_insorence_free?>
    This Payment is fully refundable within 10 Minute</p>

        <p style="margin-block-start: 9px;margin-block-end: 9px;background:#760a0a66"><?= $getAdmin->name?> Loan Protect Insurance (Individual) - Policy Wording</p>

    <strong> 1. Operative Clause</strong>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">
<?= $getAdmin->name?> General Insurance Company Limited (We, Our or Us) will provide the insurance described in 
this Policy and any endorsements thereto for the Insured Period as defined in this Policy, to the Insured
Persons detailed in the Policy Schedule and in <?= $getAdmin->name?> upon the statements contained in the Proposal 
and Declaration Form filled and signed by the Policyholder, which shall be the basis of this Policy and are
deemed to be incorporated herein in return for the payment ofthe required premium when due and compliance
with all applicable provisions of this Policy.
</p>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">The insurance provided under this Policy is only with respect to such and so many of the benefits as are
indicated by a specific amount set opposite in the Policy Schedule.</p>

   <strong> 2. Definitions</strong>
    <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">This Policy, the Schedule and any Clauses thereon shall be considered one document and any word or
expression to which a specific meaning has been attached in Definitions bears that specific meaning wherever
it appears in this Policy.</p>
<strong>Accident</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">An accident is a sudden, unforeseen and involuntary event caused by external, visible & violent mean.
</p>   <strong>Bank / Financial Institution</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means a banking company which transacts the business of banking in India or abroad and Financial
Institution engaged in activity of providing loans and duly reco gnised by appropriate authority.
</p>   <strong>Civil War</strong>
 <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">means war, whether declared or not, or any warlike activities, including use of military force by any
sovereign nation to achieve economic, geographic, nationalistic, political, racial, religious or other ends.
</p>   <strong>Dependent child</strong>

 <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means a child (natural or legally adopted), who is financially dependent on the primary insured or proposer
 and does not have his/her independent source of income. Further, the age of the child must be between 5 years
 to 21 years and who shall be unmarried.</p>
 <strong>Disclosure to information norm</strong>
 <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">The policy shall be void and all premium paid thereon shall be forfeited to the Company in the event of
 misrepresentation, miss-description or non-disclosure of any material fact</p>




 <h5 style="margin-block-start: 9px;margin-block-end: 9px;font-size:13pt; ">Grace Period</strong>
 <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Grace period means the specified period of time immediately following the premium due date during which
a payment can be made to renew or continue a policy in force without loss of continuity benefits such as
waiting periods and coverage of preexisting diseases. Coverage is not available for the period for which no
premium is received.</p>
<strong>Home / Insured Premises / Property</strong>
 <p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the building of standard construction at the address mentioned in the Schedule, which has been
constructed or purchased out of the home loan being covered under this Policy.</p>
<strong>Loan EMI</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the equated monthly instalment payable by the Insured to a financial institution for the loan.
</p>
<strong>Hospital</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">A hospital means any institution established for in-patient care and day care treatment of illness and/or injuries
and which has been registered as a hospital with the local authorities under Clinical Establishments
(Registration and Regulation) Act 2010 or under enactments specified under the Schedule of Section 56(1)
and the said act Or complies with all minimum criteria as under:</p>

<ul style="">
<li>1. has qualified nursing staff under its employment round the clock;</li>
    <li>2. has at least 10 in-patient beds in towns having a population of less than 10,00,000 and at least 15 inpatient beds in all other places;</li>
        <li>3. has qualified <strong>(s) in charge round the clock;</li>
            <li>4. has a fully equipped operation theatre of its own where surgical procedures are carried out;</li>
                <li>5. maintains daily records of patients and makes these accessible to the insurance company’s authorized
personnel;</li>
</ul>


<strong>Illness</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">
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


<strong>Injury</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;"><p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Injury means accidental physical bodily harm excluding illness or disease solely and directly caused by
external, violent, visible and evident means which is verified and certified by a <strong>.
</p><strong>Insurable/Insured event</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means an event, loss or damage for which the Insured is entitled to benefit/s under this Policy.
</p>




<strong>Insured/ Named Insured</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Insured means the persons, or his Family members, named in the Schedule.
</p></strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">
     means a person who holds a valid registration from the Medical Council of any State
or Medical Council of India or Council for Indian Medicine or for Homeopathy set up by the Government of India
or a State Government and is therebyentitled to practice medicine within its jurisdiction; and is acting within
its scope and jurisdiction of license.</p>


<strong>Notification of Claim</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Notification of claim means the process of intimating a claim to the insurer or TPA through any of therecognized
modes of communication.</p>
<strong>Outstanding e loan</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the amount outstanding on any given day to a financial institution of the principal loan and interest
thereon payable by the Insured.</p>
<strong>Permanent total Disability</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">A disability condition certified by Civil Surgeon of Government hospital stating the continuous and
permanent:</p>
<strong>loss of the sight of both eyes</strong>
<ul>
    <li>physical separation of or the loss of ability to use both hands or both feet</li>
        <li>physical separation of or the loss of ability to use one hand and one foot</li>
            <li>loss of sight of one eye and the physical separation of or the loss of ability to use either one hand or
one foot</li></ul>
    

<strong>Policy</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Policy document is a legal document which is an evidence of the contract of Insurance between the
Proposer/Insured and the Insurer and inter Alia, includes the Proposal Form, Declaration Form, the Policy
Schedule, Company’s covering letter to the Insured, any enrolment forms, endorsements, papers or riders
attaching to or forming part hereof, issued either at the inception or during the policy period.
</p><strong>Policy period/Period of insurance</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">The period between and including the start and end dates shown in the schedule
</p><strong>Pre existing disease/Condition</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Pre-Existing Disease means any condition, ailment or injury or related condition(s) for which there were
signs or symptoms, and
/ or were diagnosed, and / or for which medical advice / treatment was received within 48 months prior to
the first policy issued by the insurer and renewed continuously thereafter</p>




<strong>Renewal</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Renewal means the terms on which the contract of insurance can be renewed on mutual consent with a
provision of grace period for treating the renewal continuous for the purpose of gaining credit for preexisting diseases, time-bound exclusions and for all waiting periods.</p>
<strong>Schedule</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the document attached name so and to and the forming part of this Policy mentioning the details of
the Insured/ Insured Person/s, the Sum Insured, the period and the limits to which benefits under the
Policy are subject to.</p>
<strong>Sum Insured</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the sum as specified in the schedule, which sum represents the Company's maximum liability for
any or all claims under this Policy during the Policy period.</p>

<strong>Surgery or Surgical procedure</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Surgery or Surgical Procedure means manual and / or operative procedure (s) required for treatment of an
illness or injury, correction of deformities and defects, diagnosis and cure of diseases, relief from suffering
and prolongation of life, performed in a hospital or day care centre by a <strong></p>


<strong>Terrorism</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means activities against persons, organizations or property of any nature:
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


<strong>You, Your, Yourself/ Your Family</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Name in the schedule means the person or persons that we insure as set out in the Schedule.</p>
<strong>We, Our, US, Ours, The company</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">Means the <?= $getAdmin->name?> General Insurance Company Limited.</p>


<h4>3. PRODUCT INFORMATION</h4>
<strong>Eligibility Criteria:</strong>
This product may be obtained by any Indian Citizen / FI’s / Banks.
<strong>Age Limit:</strong>
<p style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;">
To be eligible to be covered under the Policy or get any benefits under the Policy, the Insured should have
attained the age of at least 18 years and shall not have completed the age of 65 years on the date of
commencement of the Policy Period as applicable</p>


<strong>4. Duration of Coverage:</strong>
<ul>
<li>1. The policy can be opted for 1, 2 or 3 years.</li>
    <li>2. The Cover under the policy commences from date of premium receipt.</li>
        <li>3. The cover under this Policy, for the specific Insured, shall terminate in the event of a claim under any section 
of the policy in respect of that insured becoming admissible and accepted by the Company and only
upon full sum insured being payable to the insured except under loss of job.
<li>4. Critical Illness and Unemployment cover operates after a three month waiting period from inception of the
policy</li>
</ul>
<br>
<img src="{{asset('backend/insoence.jpg')}}" style="width:99%">

<h4 style="margin-block-start: 9pt;margin-block-end: 9pt;line-height: 19pt;"><?= $getAdmin->name?></h4>
  </div>
    </section>

</body>
</html>

