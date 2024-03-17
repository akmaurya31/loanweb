<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\MenuModal;
use App\Models\NewsModal;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['Allquery'] = Contact::count();
        $data['AllUser'] = User::where('is_Admin',0)->count();
        $data['AllGallery'] = Gallery::count();
        $data['AllCategory'] = Category::count();
        $data['AllMenu'] = MenuModal::count();
        $data['AllBlogs'] = NewsModal::count();
        
        return view('admin.dashboard',$data);
    }
}
