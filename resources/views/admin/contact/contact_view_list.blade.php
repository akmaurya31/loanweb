@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">




                    <div class="card-body">
                        <div class="table-responsive">

                            <div class="table-responsive">
                                <table id="example">
                                    <tr class="bg-primary" style="background: #36304a8a !important;">
                                        <th>S.no</th>
                                        <th>Date </th>
                                        <th>Customer Details</th>
                                        <th>A/P Card </th>
                                        <th>Bank Details</th>
                                        <th>Loan Type Details</th>                                      
                                        <th>Assign User</th>
                                    </tr>

                                    @foreach ($contactList as $key => $val)
                                        <tr>
                                            <td style="width: 3%;">{{ $key + 1 }}</td>
                                            <td><i class="fas fa-calendar"></i>{{ date('d/M/Y', strtotime($val->created_at)) }}  </td>

                                            <td> <i class="fa fa-user"> </i> <?= $val->name .' 
                                            <br><a class="text-danger" href="tel:'. $val->mobile.'"><i class="fa fa-mobile"> </i> '. $val->mobile  .'</a>
                                             <br> <i class="fa fa-envelope"> </i> '.  $val->email.'
                                              <br><a class="text-success" href="https://api.whatsapp.com/send?phone=91'.$val->whatsappnumber .'"> W '.  $val->whatsappnumber .'</a>
                                               <br> <i class="fa fa-map-marker"> </i> '.  $val->state .' / '.  $val->city.' / '.  $val->pincode ?> </td>
                                            
                                            <td> <?=  $val->aadharno.' <br>'. $val->pancard?> </td>
                                            <td> <?=  $val->bankname.' <br>'. $val->bankaccountno.' <br>'. $val->bankifsccode?> </td>
                                            <td> <?=  $val->loantype.' <br> ₹ '. $val->loanamoun.' <br>'. $val->loantenure.' Year <br>'. $val->itr?> </td>
                                            <td>
                                                
                                                <?php if($val->assign_emp_id==''){?>
                                                <form id="employeeForm"  method="POST">
                                                   <input type="hidden" id="cusid" value="<?= $val->id?>">
                                                    @csrf <!-- Add CSRF token for Laravel forms -->
                                                    <select name="assign_emp_id" style="width: 95%;" onchange="getAssignQuery(this.value)">
                                                        <option value="">Select User</option> 
                                                        @foreach($getUser as $val)
                                                            <option value="{{ $val->id }}"> <i class="fa fa-user"> </i> {{ $val->name }}</option> 
                                                        @endforeach
                                                    </select>
                                                   
                                                </form>
                                                <?php }else{
                                                    employeeName($val->assign_emp_id);
                                                }?>
                                            </td>
                                          
                                        </tr>
                                    @endforeach
                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function getAssignQuery(empId) {
            $.ajax({
                url: "{{ route('contact.assign') }}",
                method: "POST",
                data: {
                    emp_id: empId,
                    cusid:$("#cusid").val(),
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    //console.log(response);
                    alert('Success: Data updated successfully');
        location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endsection
