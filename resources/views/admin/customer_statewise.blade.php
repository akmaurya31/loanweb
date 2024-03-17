@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">


                    
                    <div class="card-body">
                        <div class="table-responsive">
                                <table id="example">
                                    <tr class="bg-primary" style="background: #36304a8a !important;">
                                        <th>S.no</th>
                                        <th>Date <br> Assign User</th>
                                        <th>Customer Details</th>
                                       <!-- <th>A/P Card </th>
                                        <th>Bank Details</th>-->
                                        <th>Loan Type Details</th>
                                      
                                        <th>Feedback</th>
                                        <th>Pro / Inso Fee</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($contactList as $key => $val)
                                        <tr>
                                            <td style="width: 3%;">{{ $key + 1 }}</td>
                                            <td><i class="fas fa-calendar"></i> {{ date('d/M/Y', strtotime($val->created_at)) }}
                                            <br>
                                              <?php if($val->assign_emp_id){}else{ employeeName(@$val->assign_emp_id); }?>
                                                
                                            </td>

                                            <td> <i class="fa fa-user"> </i> <?= $val->name .' 
                                                <br><a class="text-danger" href="tel:'. $val->mobile.'"><i class="fa fa-mobile"> </i> '. $val->mobile  .'</a>
                                                 <br> <i class="fa fa-envelope"> </i> '.  $val->email.'
                                                  <br><a class="text-success" href="https://api.whatsapp.com/send?phone=91'.$val->whatsappnumber .'"> W '.  $val->whatsappnumber .'</a>
                                                   <br> <i class="fa fa-map-marker"> </i> '.  $val->state .' / '.  $val->city.' / '.  $val->pincode ?> </td>
                                               
                                            
                                            <!--<td> <?=  $val->aadharno.' <br>'. $val->pancard?> </td>
                                            <td> <?=  $val->bankname.' <br>'. $val->bankaccountno.' <br>'. $val->bankifsccode?> </td>
                                            --><td> <?=  $val->loantype.' <br> ₹ '. $val->loanamoun.' <br>'. $val->loantenure.'Year <br>'. $val->itr?> </td>
                                            
                                            <td>
                                                <form  id="employeeForm"  method="POST" style="height: 2.5rem;">
                                                    <input type="hidden" id="cusid_<?= $val->id?>" value="<?= $val->id?>">
                                                     @csrf <!-- Add CSRF token for Laravel forms -->
                                                <select name="assign_loan_id" class="update_select"   onchange="getAssignFeedback(this.value,<?=$val->id?>)">
                                                <option value="" <?php if($val->assign_loan_id=='0'){ echo "selected";}?>>Not Interested</option>
                                                <option value="1" <?php if($val->assign_loan_id==1){ echo "selected";}?>>Interested</option> 

                                                <!--<option value="Paid Agreement">Paid Agreement</option> -->
                                                <!--<option value="Paid Transaction">Paid Transaction</option>-->
                                                <option value="2" <?php if($val->assign_loan_id==2){ echo "selected";}?>>Paid Approval</option>                                              
                                                <option value="3" <?php if($val->assign_loan_id==3){ echo "selected";}?>>Paid Insurance</option>                                                 
                                                <option value="4" <?php if($val->assign_loan_id==4){ echo "selected";}?>>Pay Today</option>
                                                <option value="5" <?php if($val->assign_loan_id==5){ echo "selected";}?>>Pay Tommorow</option>
                                                <option value="6" <?php if($val->assign_loan_id==6){ echo "selected";}?>>Within Seven Days</option>
                                                </select>
                                               
                                                 </form>

                                                 <?php if($val->assign_loan_id==0){
                                                    echo "Not Interested";
                                                 }else if($val->assign_loan_id==1){
                                                    echo "Interested";
                                                 }else if($val->assign_loan_id==2){
                                                    echo "Paid Approval";
                                                 }else if($val->assign_loan_id==3){
                                                    echo "Paid Insurance";
                                                 }else if($val->assign_loan_id==4){
                                                    echo "Pay Today";
                                                 }else if($val->assign_loan_id==5){
                                                    echo "Pay Tommorow";
                                                 }else if($val->assign_loan_id==6){
                                                    echo "Within Seven Days";
                                                 }?>
                                            </td>

                                            <td style="">Rs <?= $val->processing_free?>
                                                <br>
                                               Rs <?= $val->helth_insorence_free?>
                                            </td>
                                            <td style="">
                                                
                                                <?php 
                                                $encryptedMobile = encrypt($val->mobile);
                                                //if(Auth::user()->id!=1){?>
                                                <a href="{{ route('user.edit_customer', ['id' => $val->id]) }}" class="btn btn-success btn-sm" title="Edit Customer"><i class="fas fa-edit "></i></a>
                                                
                                                <a class="btn btn-danger btn-sm" title="Download PDF" href="{{ route('user.generate-pdf',['mob' => $encryptedMobile]) }}">
                                                <img style="margin-top:0px;height:20px" src="{{asset('backend/copy.png')}}"></a>
                                                
                                                
                                                 <a class="btn btn-info btn-sm" title="Download PDF" href="{{ route('user.insorence-pdf',['mob' => $encryptedMobile]) }}">
                                                <img style="margin-top:0px;height:20px" src="{{asset('backend/copy.png')}}"></a>
                                               
                                                <?php // }?>
                                                
                                                <a href="{{ route('contact.sendTestEmail',['mob' => '435345345']) }}" class="btn btn-warning btn-sm" title="Send Mail" ><i class="fas fa-envelope "></i></a>
                                              
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>                           
                        </div>
                    </div>
                    
                    <div class="card-body">

                        <form id="form" class="" method="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Select</label>
                                    <select name="search_options_id" id="search_options_id" class="form-control border-input">
                                        <option value="" <?php if(@$_GET['search_options_id']==''){ echo "selected";}?>>All</option>
                                        <option value="0" <?php if(@$_GET['search_options_id']=='0'){ echo "selected";}?>>Not Interested</option>
                                        <option value="1" <?php if(@$_GET['search_options_id']==1){ echo "selected";}?>>Interested</option>

                                        <!--<option value="Paid Agreement">Paid Agreement</option> -->
                                        <!--<option value="Paid Transaction">Paid Transaction</option>-->
                                        <option value="2" <?php if(@$_GET['search_options_id']==2){ echo "selected";}?>>Paid Approval</option>
                                        <option value="3" <?php if(@$_GET['search_options_id']==3){ echo "selected";}?>>Paid Insurance</option>
                                        <option value="4" <?php if(@$_GET['search_options_id']==4){ echo "selected";}?>>Pay Today</option>
                                        <option value="5" <?php if(@$_GET['search_options_id']==5){ echo "selected";}?>>Pay Tommorow</option>
                                        <option value="6" <?php if(@$_GET['search_options_id']==6){ echo "selected";}?>>Within Seven Days</option>

                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Starting Date</label>
                                        <input type="date" name="starting_date" class="form-control border-input"
                                            value="<?= @$_GET['starting_date']?>" >
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="ending_date" class="form-control border-input"
                                            value="<?= @$_GET['ending_date']?>">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>.</label>
                                        <input type="submit" class="btn btn-primary form-control-"
                                            style="width:100%;    padding: 13px;" name="submit" value="Submit">
                                    </div>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
/*

function getInsorence(helth_insorence_free,id){            
            var cusid =  $("#cusid_"+id).val();      
            $.ajax({           
                url: "{{ route('contact.insorence') }}",
                method: 'POST',
                data: {
                    helth_insorence_free: helth_insorence_free,
                    cusid:cusid,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    console.log('Processing fee inserted successfully.');
                },
                error: function(xhr, status, error) {
                    console.error('Error inserting processing fee:', error);
                }
            });
        }

   function getProcessing(processingFree,id){            
            var cusid =  $("#cusid_"+id).val();      
            $.ajax({           
                url: "{{ route('contact.processing') }}",
                method: 'POST',
                data: {
                    processing_free: processingFree,
                    cusid:cusid,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    console.log('Processing fee inserted successfully.');
                },
                error: function(xhr, status, error) {
                    console.error('Error inserting processing fee:', error);
                }
            });
        }*/

       /* function getAssignFeedback(feedback_id,id) {
           var catid =  $("#cusid_"+id).val();            
            $.ajax({
                url: "{{ route('contact.feedback') }}",
                method: "POST",
                data: {
                    feedback_id: feedback_id,
                    cusid:catid,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    //console.log(response);
                    alert('Success: Feedback updated successfully');
                   location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }*/
        
        
        function getAssignFeedback(feedback_id, id) {
    var url = "{{ Auth::user()->id == 1 ? route('contact.feedback') : route('user.feedback') }}";
    var catid = $("#cusid_" + id).val();

    $.ajax({
        url: url,
        method: "POST",
        data: {
            feedback_id: feedback_id,
            cusid: catid,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            alert('Success: Feedback updated successfully');
            location.reload();
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

        
        
    </script>

@endsection
