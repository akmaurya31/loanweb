<?php

namespace App\Http\Controllers\Frantend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Categorydetails;
use App\Models\Contact;
use App\Models\Menudetails;
use App\Models\MenuModal;
use App\Models\User;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function Index()
    {    
        $data['getother'] = Menudetails::where('menu_id',27)->where('status','Y')->get();
        return view('frant.service',$data);
    }

    
 
}
