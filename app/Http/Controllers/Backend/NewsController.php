<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NewsModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function Index(){
        $data['newsDataList'] = NewsModal::get();
        return view('admin.news.news_view_list',$data);
    }

    public function NewsCreate(){       
        return view('admin.news.news_add');//compact('userDataList')
    }

    public function NewsStore(Request $request){       

        $request->validate([
            'heading' =>'required',          
         ]);

        $data = new NewsModal();
           $data->heading = $request->heading;
           $data->content = $request->content;
           $data->days = $request->days;         
           $data->created_by = Auth::user()->id;       
          if($request->file('bg_image')){
               $file = $request->file('bg_image');
               if($data->bg_image){
                unlink(public_path('upload/category/'.@$data->bg_image));
               }
               $filename = date('Y-m-d').$file->getClientOriginalName();
               $uploadSuccess = $file->move(public_path('upload/category'),$filename);
               $data['bg_image'] = $filename;
          }
          $data->save();
               $notifecation = [
                 'message' => 'Heading  Add Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('news.news_view_list')->with($notifecation);
    }


     public function NewsEdit($id){
         $datalist_news  = NewsModal::find($id);
         return view('admin.news.news_edit',compact('datalist_news'));
     }

     

     public function NewsUpdate(Request $request ,$id){       

        $data = NewsModal::find($id);
        $data->heading = $request->heading;
        $data->content = $request->content;         

       if($request->file('bg_image')){
            $file = $request->file('bg_image');
            if($data->bg_image){
             unlink(public_path('upload/category/'.@$data->bg_image));
            }
            $filename = date('Y-m-d').$file->getClientOriginalName();
            $uploadSuccess = $file->move(public_path('upload/category'),$filename);
            $data['bg_image'] = $filename;
       }
          $data->save();
               $notifecation = [
                 'message' => 'Heading  Update  Successfully',
                 'alert-type' =>'success',
              ];
        return redirect()->route('news.news_view_list')->with($notifecation);
     }


     public function NewsDelete($id){
        $datalist_news  = NewsModal::find($id);
        
        if($datalist_news->bg_image){
            unlink(public_path('upload/bg_image/'.@$datalist_news->bg_image));
           }
        $datalist_news->delete();

        $notifecation = [
            'message' => 'News Delete Successfully',
            'alert-type' =>'danger',
         ];
        return redirect()->route('news.news_view_list')->with($notifecation);
    }


    public function NewsActive($id){
        $datalist_news  = NewsModal::find($id);        
            $datalist_news->status = 'N';        
           $datalist_news->save();
           $notifecation = [
            'message' => 'News InActive Successfully',
            'alert-type' =>'warning',
         ];
        return redirect()->route('news.news_view_list')->with($notifecation);
    }

    public function NewsInactive($id){
        $datalist_news  = NewsModal::find($id);        
            $datalist_news->status = 'Y';       
           $datalist_news->save();
           $notifecation = [
            'message' => 'News Active Successfully',
            'alert-type' =>'success',
         ];
        return redirect()->route('news.news_view_list')->with($notifecation);
    }




    
}
