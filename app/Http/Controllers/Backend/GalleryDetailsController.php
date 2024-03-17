<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallerydetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryDetailsController extends Controller
{
    public function GalleryDetailsList($id){
        $data['allGalleryDetailsList'] = Gallerydetails::where('gallery_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.gallery_details.gallery_details_view_list',$data);
    }

   public function GalleryDetailsCreate($id){       
        return view('admin.gallery_details.gallery_details_add');//compact('userDataList')
    }

    public function GalleryDetailsStore(Request $request, $id)
{   
    $request->validate([
        'heading' =>'required',              
        //'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for each image
    ]);

    
    $imageNames = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = date('Y-m-d_H-i-s') . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/gallery'), $filename);
            $imageNames[] = $filename;
        }
    }

   
    foreach ($imageNames as $imageName) {
        $data = new Gallerydetails();
        $data->heading = $request->heading;
        $data->gallery_id = $id;           
        $data->created_by = Auth::user()->id;  
        $data->image = $imageName; 
        $data->save();
    }

   
    return redirect()->route('gallery_details.gallery_details_view_list', $id)->with([
        'message' => 'Gallery Details Added Successfully',
        'alert-type' => 'success',
    ]);
}



     public function GalleryDetailsEdit($gallery_id,$id){
         $fatchRecord  = Gallerydetails::find($id);
         return view('admin.gallery_details.gallery_details_edit',compact('fatchRecord'));
     }

     

     public function GalleryDetailsUpdate(Request $request,$gallery_id,$id){       

        $data = Gallerydetails::find($id);
        $data->heading = $request->heading;  
       if($request->file('image')){
            $file = $request->file('image');
            if($data->image){
             unlink(public_path('upload/gallery/'.@$data->image));
            }
            $filename = date('Y-m-d').$file->getClientOriginalName();
            $uploadSuccess = $file->move(public_path('upload/gallery'),$filename);
            $data['image'] = $filename;
       }      

          $data->save();
               $notifecation = [
                 'message' => 'Gallery Details  Update  Successfully',
                 'alert-type' =>'success',
              ];
              return redirect()->route('gallery_details.gallery_details_view_list',$gallery_id)->with($notifecation);
     }


     public function GalleryDetailsDelete($id){
        $datalist_gallery  = Gallerydetails::find($id);
        if($datalist_gallery->image){
            unlink(public_path('upload/gallery/'.@$datalist_gallery->image));            
           }
        $datalist_gallery->delete();

        $notifecation = [
            'message' => 'Gallery Details Delete Successfully',
            'alert-type' =>'danger',
         ];
        return redirect()->route('gallery_details.gallery_details_view_list')->with($notifecation);
    }


    public function GalleryDetailsActive($gallery_id,$id){
        $datalist_gallery  = Gallerydetails::find($id);        
        $datalist_gallery->status = 'N';        
        $datalist_gallery->save();
        $notifecation = [
            'message' => 'Gallery Details InActive Successfully',
            'alert-type' =>'warning',
        ];
         return redirect()->route('gallery_details.gallery_details_view_list',$gallery_id)->with($notifecation);
    }


    public function GalleryDetailsInactive($gallery_id,$id){
        $datalist_gallery  = Gallerydetails::find($id);        
            $datalist_gallery->status = 'Y';       
            $datalist_gallery->save();
                $notifecation = [
                'message' => 'Gallery Details Active Successfully',
                'alert-type' =>'success',
            ];
         return redirect()->route('gallery_details.gallery_details_view_list',$gallery_id)->with($notifecation);
    }

}

