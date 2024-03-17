@extends('layouts/admin-master')
@section('admin')
    <div class="container-fluid">
        <div class="row">          
            <div class="col-12">
                <div class="card">
                    <div class="card-header">                       
                        <a href="{{ route('gallery_details.gallery_details_add', ['id' => request('id')]) }}" class="btn btn-rounded btn-info"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                        </span>Create Gallery Details</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example">                              
                                    <tr>
                                        <th>S.no</th> 
                                        <th>Action</th>
                                        <th>Gallery Name</th>
                                        <th>Image</th>
                                        <th>Heading</th>  
                                        
                                        <th>Date</th>                                       
                                    </tr>                                
                                    @foreach($allGalleryDetailsList as $key=>$val)                             
                                    <tr>
                                        <td style="width: 3%;">{{ $key+1 }}</td>
                                        <td style="width: 10%;">
                                            <a href="{{ route('gallery_details.gallery_details_edit', ['gallery_id' => request('id'),'id' => $val->id]) }}" class="btn btn-secondary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <?php if($val->status=='Y'){?>
                                                <a href="{{ route('gallery_details.gallery_details_active',['gallery_id' => request('id'),'id' => $val->id]) }}" class="btn btn-success btn-sm" ><i class="fa fa-toggle-on"></i></a>
                                               <?php } else{?>
                                                <a href="{{ route('gallery_details.gallery_details_inactive',['gallery_id' => request('id'),'id' => $val->id]) }}" class="btn btn-warning btn-sm" ><i class="fa fa-ban"></i></a>
                                               <?php } ?>
                                            </td>
                                            <td> <?=  $val->gallery_id ?> </td> 
                                        <td style="width: 15%;">
                                            <img class="img-thumbnail" style="width: 50%;" src="{{ (!empty($val->image))? url('upload/gallery/'.$val->image): url('upload/no-image.jpg') }}" alt="">
                                             <td> {{ $val->heading }} </td> 
                                          
                                        <td><i class="fas fa-calendar"></i> {{ date('d/M/Y',strtotime($val->created_at)) }}</td> 
                                    </tr>
                                    @endforeach                         
                            </table>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    @endsection