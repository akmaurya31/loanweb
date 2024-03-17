<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{ 
    public function Index()
    {
        //$data['getcategoryTable'] = Category::orderBy('id', 'desc')->get();
        return view('admin.category.category_view_list');
    }

    public function CategoryReload(Request $request)
    {
        $column_search = ['name', 'content'];
        $recordsTotal = Category::count();
        $searchTerm = $request->input('search.value');        
        $query = Category::query();
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
        $getCategoryTableAll = $query->orderBy('id', 'desc')->offset($start)->limit($length)->get();
        
        $data = [];

        $i =  1;
        foreach ($getCategoryTableAll as $category) {

            $status = isset($category->status) && $category->status == 'Y' ? 'N' : 'Y';
            //$start++;
            $row = [];
            $row[] = $i;
            if ($category->status == 'Y')
                $statusIs = '<a href="javascript:void(0)" class="btn btn-success btn-sm" title="Status Active" id="' . $category->id . '" onclick="statusUpdate(' . "'" . $category->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-info-circle"></i></a>';
            else
                $statusIs = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" title="Status Inactive" id="' . $category->id . '" onclick="statusUpdate(' . "'" . $category->id . "'" . "," . "'" . $status . "'" . ')"> <i class="fa fa-exclamation-triangle"></i></a>';
            //add html for action

            $row[] = '' . $statusIs . ' <a href="javascript:void(0)" class="btn btn-info  btn-sm" title="Edit category" onclick="editCategoryForm(' . "'" . $category->id . "'" . ')"> <i class="fa fa-edit"></i></a>
            <a class="btn btn-primary btn-sm" href="' . route('category_details.category_details_view_list', $category->id) . '" title="Add Menu Details"><i class="fa fa-plus"></i></a>';


            if ($category->category_image)
                $row[] = '<img src="' . asset('upload/category/' . $category->category_image) . '" class="img-responsive" style="width:100%;"/>';
            else
                $row[] = '(No photo)';

            $row[] = $category->name;
            $row[] = date('d-M-Y', strtotime($category->created_at));

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


    public function CategorystatusUpdate(Request $request)
    {
        if ($request) {
            $data = array(
                "status" => $request->status
            );
            $returnData = Category::where('id', $request->id)->update($data);
            echo json_encode($returnData);
        } else {
            $returnData = array('No direct script access allowed');
            echo json_encode($returnData);
        }
    }



    public function CategoryDelete(Request $request)
    {
        if ($request) {
            $id = $request->id;
            $category = Category::find($id);
            if (file_exists('upload/category/' . $category->category_image) && $category->category_image)
                unlink('upload/category/' . $category->category_image);
            $category->delete();
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
            $data['error_string'][] = 'name is required';
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
            $res = Category::where('name', $request->name)->first();
        } elseif (!is_null($id)) {
            $res = Category::where('name', $request->name)->where('id', $id)->first();
        }

        if (isset($res->id)) {
            $data['inputerror'][] = 'name';
            $data['error_string'][] = 'name already Exist';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }


    public function CategoryStore(Request $request)
    {
        $this->_validate($request);
        $this->_existCheck($request, $request->id);
        $data = new Category();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/category'), $filename);
            $data->category_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }

    public function CategoryEdit($id)
    {
        $data = Category::find($id);
        echo json_encode($data);
    }

    public function CategoryUpdate(Request $request)
    {
        $this->_validate($request);
        $data = Category::find($request->id);
        $data->name = $request->name;

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $filename = date('Y-m-d') . $file->getClientOriginalName();
            $file->move(public_path('upload/category'), $filename);
            if ($data->category_image) {
                unlink(public_path('upload/category/' . $data->category_image));
            }
            $data->category_image = $filename;
        }
        $data->save();
        return response()->json(['status' => 'mess']);
    }
}
