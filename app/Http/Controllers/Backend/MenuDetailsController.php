<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menudetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuDetailsController extends Controller
{
    public function MenudetailsList($id){
        $data['title'] = "Menu Details List";
        $data['allMenuDetailsList'] = Menudetails::where('menu_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.menu_details.menu_details_view_list',$data);
    }

   public function MenudetailsCreate($id){  
    $data['title'] = "Menu Details Add";     
        return view('admin.menu_details.menu_details_add',$data);//compact('userDataList')
    }

    public function MenudetailsStore(Request $request ,$id){       

        $request->validate([
            'heading' =>'required',              
         ]);

        $data = new Menudetails();
           $data->heading = $request->heading;
           $data->menu_id = $id;           
           $data->content = $request->content;          
           $data->created_by = Auth::user()->id;        

          if($request->file('image')){
               $file = $request->file('image');
               if($data->image){
                unlink(public_path('upload/menu/'.@$data->image));
               }
               $filename = date('Y-m-d').$file->getClientOriginalName();
               $uploadSuccess = $file->move(public_path('upload/menu'),$filename);
               $data['image'] = $filename;
          }
         
          $data->save();
               $notifecation = [
                 'message' => 'Menu Details  Add Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('menu_details.menu_details_view_list',$id)->with($notifecation);
    }


     public function MenudetailsEdit($menu_id,$id){
         $title = "Menu Details Up[date";
         $fatchRecord  = Menudetails::find($id);
         return view('admin.menu_details.menu_details_edit',compact('fatchRecord','title'));
     }

     

     public function MenudetailsUpdate(Request $request,$menu_id,$id){       

        $data = Menudetails::find($id);
        $data->heading = $request->heading;       
        $data->content = $request->content;
        

       if($request->file('image')){
            $file = $request->file('image');
            if($data->image){
             //unlink(public_path('upload/menu/'.@$data->image));
            }
            $filename = date('Y-m-d').$file->getClientOriginalName();
            $uploadSuccess = $file->move(public_path('upload/menu'),$filename);
            $data['image'] = $filename;
       }      

          $data->save();
               $notifecation = [
                 'message' => 'Menu Details  Update  Successfully',
                 'alert-type' =>'success',
              ];
              return redirect()->route('menu_details.menu_details_view_list',$menu_id)->with($notifecation);
     }


     public function MenudetailsDelete($id){
        $datalist_Categorymenu  = Menudetails::find($id);
        if($datalist_Categorymenu->image){
            unlink(public_path('upload/image/'.@$datalist_Categorymenu->image));            
           }
        $datalist_Categorymenu->delete();

        $notifecation = [
            'message' => 'Menu Details Delete Successfully',
            'alert-type' =>'danger',
         ];
        return redirect()->route('menu_details.menu_details_view_list')->with($notifecation);
    }


    public function MenudetailsActive($menu_id,$id){
        $datalist_category  = Menudetails::find($id);        
        $datalist_category->status = 'N';        
        $datalist_category->save();
        $notifecation = [
            'message' => 'Menu Details InActive Successfully',
            'alert-type' =>'warning',
        ];
         return redirect()->route('menu_details.menu_details_view_list',$menu_id)->with($notifecation);
    }


    public function MenudetailsInactive($menu_id,$id){
        $datalist_category  = Menudetails::find($id);        
            $datalist_category->status = 'Y';       
            $datalist_category->save();
                $notifecation = [
                'message' => 'Menu Details Active Successfully',
                'alert-type' =>'success',
            ];
         return redirect()->route('menu_details.menu_details_view_list',$menu_id)->with($notifecation);
    }

}
