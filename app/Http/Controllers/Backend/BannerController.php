<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function Index(){
        $data['title'] = "Banner List";
        return view('admin.banner.banner_view_list',$data);
    }

    public function BannerReload(Request $request)
    {
        $column_search = ['heading', 'content'];
        $recordsTotal = Banner::count();
        $searchTerm = $request->input('search.value');        
        $query = Banner::query();
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
        $getBannerTableAll = $query->orderBy('id', 'desc')->offset($start)->limit($length)->get();
        
        $data = [];

        $i =  1;
        foreach ($getBannerTableAll as $banner) {

            $status = isset($banner->status) && $banner->status == 'Y' ? 'N' : 'Y';
            //$start++;
            $row = [];
            $row[] = $i;
            if ($banner->status == 'Y')
                $statusIs = '<a href="javascript:void(0)" class="btn btn-success btn-sm" title="Status Active" id="' . $banner->id . '" onclick="statusUpdate(' . "'" . $banner->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-info-circle"></i></a>';
            else
                $statusIs = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Status Inactive" id="' . $banner->id . '" onclick="statusUpdate(' . "'" . $banner->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-exclamation-triangle"></i></a>';
            //add html for action

            $row[] = '' . $statusIs . ' <a href="javascript:void(0)" class="btn btn-info  btn-sm" title="Edit banner" onclick="editBannerForm(' . "'" . $banner->id . "'" . ')"> <i class="fa fa-edit"></i></a>
                <a class="btn  btn-danger btn-sm " href="javascript:void(0)" title="Delete" onclick="deleteData(' . "'" . $banner->id . "'" . ')"><i class="fa fa-trash"></i> </a> ';

            if ($banner->banner_image)
                $row[] = '<img src="' . asset('upload/banner/' . $banner->banner_image) . '" class="img-responsive" style="width:100%;"/>';
            else
                $row[] = '(No photo)';

            $row[] = $banner->heading;
            $row[] = $banner->content;
            $row[] = date('d-M-Y', strtotime($banner->created_at));

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


    public function BannerstatusUpdate(Request $request)
    {
        if ($request) {
            $data = array(
                "status" => $request->status
            );
            $returnData = Banner::where('id', $request->id)->update($data);
            echo json_encode($returnData);
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    public function BannerDelete(Request $request)
    {
        if ($request) {
            $id = $request->id;
            $banner = Banner::find($id);
            if (file_exists('upload/banner/' . $banner->banner_image) && $banner->banner_image)
                unlink('upload/banner/' . $banner->banner_image);
            $banner->delete();
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

        if ($request->heading == '') {
            $data['inputerror'][] = 'heading';
            $data['error_string'][] = 'Heading is required';
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
            $res = Banner::where('heading', $request->heading)->first();
        } elseif (!is_null($id)) {
            $res = Banner::where('heading', $request->heading)->where('id', $id)->first();
        }

        if (isset($res->id)) {
            $data['inputerror'][] = 'heading';
            $data['error_string'][] = 'Heading already Exist';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function BannerStore(Request $request)
    {
        $this->_validate($request);
        $this->_existCheck($request, $request->id);
        $data = new Banner();
        $data->heading = $request->heading;
        $data->content = $request->content;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/banner'), $filename);
            $data->banner_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }

    public function BannerEdit($id)
    {
        $data = Banner::find($id);
        echo json_encode($data);
    }

    public function BannerUpdate(Request $request)
    {
        $this->_validate($request);
        $data = Banner::find($request->id);
        $data->heading = $request->heading;
        $data->content = $request->content;
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/banner'), $filename);
            /*if ($data->banner_image) {
                unlink(public_path('upload/banner/' . $data->banner_image));
            }*/
            $data->banner_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }
}

