@extends('layouts/admin-master')
@section('admin')

    <div class="container-fluid">

        <div class="row">          
            <div class="col-12">
                <div class="card">
                    <div class="card-header">                       
                        <a href="{{ route('news.news_add') }}" class="btn btn-rounded btn-info"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                        </span>Create News </a>
                    </div>



                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example">                              
                                    <tr style="background: #f5eaea !important;">
                                        <th>S.no</th> 
                                        <th>Action</th>
                                        <th>News Image</th>
                                        <th> Heading</th> 
                                        <th>Days</th> 
                                        <th>Content</th> 
                                        <th>Date</th>
                                       
                                    </tr>
                                
                                    @foreach($newsDataList as $key=>$val)                             
                                    <tr>
                                        <td style="width: 3%;">{{ $key+1 }}</td>
                                        <td style="width: 15%;">
                                            <a href="{{ route('news.news_edit', $val->id) }}" class="btn btn-secondary shadow sharp "><i class="fas fa-pencil-alt"></i></a>
                                           <?php if($val->status=='Y'){?>
                                            <a href="{{ route('news.news_active',$val->id)}}" class="btn btn-success shadow sharp" ><i class="fa fa-toggle-on"></i></a>
                                           
                                            <?php } else{?>
                                            <a href="{{ route('news.news_inactive',$val->id)}}" class="btn btn-warning shadow sharp" ><i class="fa fa-ban"></i></a>
                                           <?php } ?>
                                            
                                        </td>
                                        <td style="width: 15%;"><img style="width: 100%;" src="{{ (!empty($val->bg_image))? url('upload/category/'.$val->bg_image): url('upload/no-image.jpg') }}" alt=""> </td>
                                        <td> {{ $val->heading }} </td>
                                        <td> {{ $val->days }} </td>
                                        <td> <?= $val->content ?> </td>
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