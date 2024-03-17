<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MenuModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    private $table = "menu_modals";
    public function Index()
    {
        $data['title'] = "Menu List";
        //$data['getMenuTable'] = MenuModal::orderBy('id', 'desc')->get();
        return view('admin.menu.menu_view_list',$data);
    }

    public function menuReload(Request $request)
    {
        $column_search = ['heading', 'content'];
        $recordsTotal = MenuModal::count();
        $searchTerm = $request->input('search.value');        
        $query = MenuModal::query();
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
        $getMenuTableAll = $query->orderBy('id', 'desc')->offset($start)->limit($length)->get();
        
        $data = [];

        $i =  1;
        foreach ($getMenuTableAll as $menu) {

            $status = isset($menu->status) && $menu->status == 'Y' ? 'N' : 'Y';
            //$start++;
            $row = [];
            $row[] = $i;
            if ($menu->status == 'Y')
                $statusIs = '<a href="javascript:void(0)" class="btn btn-success btn-sm" title="Status Active" id="' . $menu->id . '" onclick="statusUpdate(' . "'" . $menu->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-info-circle"></i></a>';
            else
                $statusIs = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Status Inactive" id="' . $menu->id . '" onclick="statusUpdate(' . "'" . $menu->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-exclamation-triangle"></i></a>';
            //add html for action

            $row[] = '' . $statusIs . ' <a href="javascript:void(0)" class="btn btn-info  btn-sm" title="Edit menu" onclick="editMenuForm(' . "'" . $menu->id . "'" . ')"> <i class="fa fa-edit"></i></a>
            <a class="btn btn-primary btn-sm" href="' . route('menu_details.menu_details_view_list', $menu->id) . '" title="Add Menu Details"><i class="fa fa-plus"></i></a>';

            if ($menu->bg_image)
                $row[] = '<img src="' . asset('upload/menu/' . $menu->bg_image) . '" class="img-responsive" style="width:100%;"/>';
            else
                $row[] = '(No photo)';

            $row[] = $menu->heading;
            $row[] = date('d-M-Y', strtotime($menu->created_at));

            $data[] = $row;
            $i++;
        }//<a class="btn  btn-danger btn-sm " href="javascript:void(0)" title="Delete" onclick="deleteData(' . "'" . $menu->id . "'" . ')"><i class="fa fa-trash"></i> </a> 

        $output = [
            "draw" => $request->input('draw'),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "data" => $data,
        ];
        return response()->json($output);
    }


    public function activeInactivestatusUpdate(Request $request)
    {
        if ($request) {
            $data = array(
                "status" => $request->status
            );
            $returnData = MenuModal::where('id', $request->id)->update($data);
            echo json_encode($returnData);
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    public function ajaxDelete(Request $request)
    {
        if ($request) {
            $id = $request->id;
            $menu = MenuModal::find($id);
            if (file_exists('upload/menu/' . $menu->bg_image) && $menu->bg_image)
                unlink('upload/menu/' . $menu->bg_image);
            $menu->delete();
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
            $res = MenuModal::where('heading', $request->heading)->first();
        } elseif (!is_null($id)) {
            $res = MenuModal::where('heading', $request->heading)->where('id', $id)->first();
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


    public function MenuStore(Request $request)
    {
        $this->_validate($request);
        $this->_existCheck($request, $request->id);
        $data = new MenuModal();
        $data->heading = $request->heading;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/menu'), $filename);
            $data->bg_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }

    public function MenuEdit($id)
    {
        $data = MenuModal::find($id);
        echo json_encode($data);
    }

    public function MenuUpdate(Request $request)
    {
        $this->_validate($request);
        $data = MenuModal::find($request->id);
        $data->heading = $request->heading;

        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/menu'), $filename);
            if ($data->bg_image) {
                unlink(public_path('upload/menu/' . $data->bg_image));
            }
            $data->bg_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }
}
