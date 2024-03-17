<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function Index(){
        $data['title'] = "Testimonial List";
        return view('admin.testimonial.testimonial_view_list',$data);
    }
    public function TestimonialReload(Request $request)
    {
        $column_search = ['name', 'content'];
        $recordsTotal = Testimonial::count();
        $searchTerm = $request->input('search.value');        
        $query = Testimonial::query();
        if ($searchTerm) {
            $query->where(function($query) use ($searchTerm, $column_search) {
                foreach ($column_search as $column) {
                    $query->orWhere($column, 'like', '%' . $searchTerm . '%');
                }
            });
        }        
        $recordsFiltered = $query->count();
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $getTestimonialTableAll = $query->orderBy('id', 'desc')->offset($start)->limit($length)->get();
        
        $data = [];

        $i =  1;
        foreach ($getTestimonialTableAll as $testimonial) {

            $status = isset($testimonial->status) && $testimonial->status == 'Y' ? 'N' : 'Y';
            //$start++;
            $row = [];
            $row[] = $i;
            if ($testimonial->status == 'Y')
                $statusIs = '<a href="javascript:void(0)" class="btn btn-success btn-sm" title="Status Active" id="' . $testimonial->id . '" onclick="statusUpdate(' . "'" . $testimonial->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-info-circle"></i></a>';
            else
                $statusIs = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Status Inactive" id="' . $testimonial->id . '" onclick="statusUpdate(' . "'" . $testimonial->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-exclamation-triangle"></i></a>';
            //add html for action

            $row[] = '' . $statusIs . ' <a href="javascript:void(0)" class="btn btn-info  btn-sm" title="Edit testimonial" onclick="editTestimonialForm(' . "'" . $testimonial->id . "'" . ')"> <i class="fa fa-edit"></i></a>
                <a class="btn  btn-danger btn-sm " href="javascript:void(0)" title="Delete" onclick="deleteData(' . "'" . $testimonial->id . "'" . ')"><i class="fa fa-trash"></i> </a> ';

            if ($testimonial->user_image)
                $row[] = '<img src="' . asset('upload/testimonial/' . $testimonial->user_image) . '" class="img-responsive" style="width:100%;"/>';
            else
                $row[] = '(No photo)';
            $row[] = $testimonial->name;
            $row[] = $testimonial->profile;
            $row[] = $testimonial->content;
            $row[] = date('d-M-Y', strtotime($testimonial->created_at));
            $data[] = $row;
            $i++;
        }

        $output = [
            "draw" => $request->input('draw'),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "data" => $data,
        ];
        return response()->json($output);
    }


    public function TestimonialstatusUpdate(Request $request)
    {
        if ($request) {
            $data = array(
                "status" => $request->status
            );
            $returnData = Testimonial::where('id', $request->id)->update($data);
            echo json_encode($returnData);
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    public function TestimonialDelete(Request $request)
    {
        if ($request) {
            $id = $request->id;
            $testimonial = Testimonial::find($id);
            if (file_exists('upload/testimonial/' . $testimonial->user_image) && $testimonial->user_image)
                unlink('upload/testimonial/' . $testimonial->user_image);
            $testimonial->delete();
            echo json_encode(array("status" => TRUE));
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    private function _validate(Request $request)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($request->name == '') {
            $data['inputerror'][] = 'name';
            $data['error_string'][] = 'User is required';
            $data['status'] = FALSE;
        }
        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    private function _existCheck(Request $request, $id = null)
    {
        $data = [];
        $data['error_string'] = [];
        $data['inputerror'] = [];
        $data['status'] = TRUE;

        $res = [];
        if (is_null($id)) {
            $res = Testimonial::where('name', $request->name)->first();
        } elseif (!is_null($id)) {
            $res = Testimonial::where('name', $request->name)->where('id', $id)->first();
        }

        if (isset($res->id)) {
            $data['inputerror'][] = 'name';
            $data['error_string'][] = 'User already Exist';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function TestimonialStore(Request $request)
    {
        $this->_validate($request);
        $this->_existCheck($request, $request->id);
        $data = new Testimonial();
        $data->name = $request->name;
        $data->content = $request->content;
        $data->profile = $request->profile;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/testimonial'), $filename);
            $data->user_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }

    public function TestimonialEdit($id)
    {
        $data = Testimonial::find($id);
        echo json_encode($data);
    }

    public function TestimonialUpdate(Request $request)
    {
        $this->_validate($request);
        $data = Testimonial::find($request->id);
        $data->name = $request->name;
        $data->content = $request->content;
        $data->profile = $request->profile;
        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/testimonial'), $filename);
            if ($data->user_image) {
                unlink(public_path('upload/testimonial/' . $data->user_image));
            }
            $data->user_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }
}


