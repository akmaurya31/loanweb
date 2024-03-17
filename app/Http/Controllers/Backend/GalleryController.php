<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function Index(){
        return view('admin.gallery.gallery_view_list');
    }

    public function GalleryReload(Request $request)
    {
        $column_search = ['heading', 'content'];
        $recordsTotal = Gallery::count();
        $searchTerm = $request->input('search.value');        
        $query = Gallery::query();
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
        $getGalleryTableAll = $query->orderBy('id', 'desc')->offset($start)->limit($length)->get();
        
        $data = [];

        $i =  1;
        foreach ($getGalleryTableAll as $gallery) {

            $status = isset($gallery->status) && $gallery->status == 'Y' ? 'N' : 'Y';
            //$start++;
            $row = [];
            $row[] = $i;
            if ($gallery->status == 'Y')
                $statusIs = '<a href="javascript:void(0)" class="btn btn-success btn-sm" title="Status Active" id="' . $gallery->id . '" onclick="statusUpdate(' . "'" . $gallery->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-info-circle"></i></a>';
            else
                $statusIs = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Status Inactive" id="' . $gallery->id . '" onclick="statusUpdate(' . "'" . $gallery->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-exclamation-triangle"></i></a>';
            //add html for action

            $row[] = '' . $statusIs . ' <a href="javascript:void(0)" class="btn btn-info  btn-sm" title="Edit gallery" onclick="editGalleryForm(' . "'" . $gallery->id . "'" . ')"> <i class="fa fa-edit"></i></a>
            <a class="btn btn-primary btn-sm" href="' . route('gallery_details.gallery_details_view_list', $gallery->id) . '" title="Add Menu Details"><i class="fa fa-plus"></i></a>';


            if ($gallery->bg_image)
                $row[] = '<img src="' . asset('upload/gallery/' . $gallery->bg_image) . '" class="img-responsive" style="width:100%;"/>';
            else
                $row[] = '(No photo)';

            $row[] = $gallery->heading;
            $row[] = $gallery->content;
            $row[] = date('d-M-Y', strtotime($gallery->created_at));

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


    public function GallerystatusUpdate(Request $request)
    {
        if ($request) {
            $data = array(
                "status" => $request->status
            );
            $returnData = Gallery::where('id', $request->id)->update($data);
            echo json_encode($returnData);
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    public function GalleryDelete(Request $request)
    {
        if ($request) {
            $id = $request->id;
            $gallery = Gallery::find($id);
            if (file_exists('upload/gallery/' . $gallery->bg_image) && $gallery->bg_image)
                unlink('upload/gallery/' . $gallery->bg_image);
            $gallery->delete();
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
            $data['error_string'][] = 'Gallery is required';
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
            $res = Gallery::where('heading', $request->heading)->first();
        } elseif (!is_null($id)) {
            $res = Gallery::where('heading', $request->heading)->where('id', $id)->first();
        }

        if (isset($res->id)) {
            $data['inputerror'][] = 'heading';
            $data['error_string'][] = 'Gallery already Exist';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function GalleryStore(Request $request)
    {
        $this->_validate($request);
        $this->_existCheck($request, $request->id);
        $data = new Gallery();
        $data->heading = $request->heading;
        $data->content = $request->content;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/gallery'), $filename);
            $data->bg_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }

    public function GalleryEdit($id)
    {
        $data = Gallery::find($id);
        echo json_encode($data);
    }

    public function GalleryUpdate(Request $request)
    {
        $this->_validate($request);
        $data = Gallery::find($request->id);
        $data->heading = $request->heading;
        $data->content = $request->content;
        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/gallery'), $filename);
            if ($data->bg_image) {
                unlink(public_path('upload/gallery/' . $data->bg_image));
            }
            $data->bg_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }
}
