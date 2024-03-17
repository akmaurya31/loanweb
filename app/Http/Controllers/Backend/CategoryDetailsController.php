<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categorydetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryDetailsController extends Controller
{
    public function CategoryDetailsList($id){
        $data['allCategoryDetailsList'] = Categorydetails::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.category_details.category_details_view_list',$data);
    }

   public function CategoryDetailsCreate($id){       
        return view('admin.category_details.category_details_add');//compact('userDataList')
    }

    public function CategoryDetailsStore(Request $request ,$id){      

        $request->validate([
            'heading' =>'required',              
         ]);

        $data = new Categorydetails();
           $data->heading = $request->heading;
           $data->category_id = $id;           
           $data->content = $request->content;          
           $data->created_by = Auth::user()->id;        

          if($request->file('image')){
               $file = $request->file('image');
               if($data->image){
                unlink(public_path('upload/category/'.@$data->image));
               }
               $filename = date('Y-m-d').$file->getClientOriginalName();
               $uploadSuccess = $file->move(public_path('upload/category'),$filename);
               $data['image'] = $filename;
          }
         
          $data->save();
               $notifecation = [
                 'message' => 'Category Details  Add Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('category_details.category_details_view_list',$id)->with($notifecation);
    }


     public function CategoryDetailsEdit($category_id,$id){
         $fatchRecord  = Categorydetails::find($id);
         return view('admin.category_details.category_details_edit',compact('fatchRecord'));
     }

     

     public function CategoryDetailsUpdate(Request $request,$category_id,$id){       

        $data = Categorydetails::find($id);
        $data->heading = $request->heading;       
        $data->content = $request->content;
        

       if($request->file('image')){
            $file = $request->file('image');
            if($data->image){
             unlink(public_path('upload/category/'.@$data->image));
            }
            $filename = date('Y-m-d').$file->getClientOriginalName();
            $uploadSuccess = $file->move(public_path('upload/category'),$filename);
            $data['image'] = $filename;
       }      

          $data->save();
               $notifecation = [
                 'message' => 'Category Details  Update  Successfully',
                 'alert-type' =>'success',
              ];
              return redirect()->route('category_details.category_details_view_list',$category_id)->with($notifecation);
     }


     public function CategoryDetailsDelete($id){
        $datalist_Category  = Categorydetails::find($id);
        if($datalist_Category->image){
            unlink(public_path('upload/image/'.@$datalist_Category->image));            
           }
        $datalist_Category->delete();

        $notifecation = [
            'message' => 'Category Details Delete Successfully',
            'alert-type' =>'danger',
         ];
        return redirect()->route('category_details.category_details_view_list')->with($notifecation);
    }


    public function CategoryDetailsActive($category_id,$id){
        $datalist_category  = Categorydetails::find($id);        
        $datalist_category->status = 'N';        
        $datalist_category->save();
        $notifecation = [
            'message' => 'Category Details InActive Successfully',
            'alert-type' =>'warning',
        ];
         return redirect()->route('category_details.category_details_view_list',$category_id)->with($notifecation);
    }


    public function CategoryDetailsInactive($category_id,$id){
        $datalist_category  = Categorydetails::find($id);        
            $datalist_category->status = 'Y';       
            $datalist_category->save();
                $notifecation = [
                'message' => 'Category Details Active Successfully',
                'alert-type' =>'success',
            ];
         return redirect()->route('category_details.category_details_view_list',$category_id)->with($notifecation);
    }

}

