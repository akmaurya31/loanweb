<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{

    public function generatePDF()
{  
    $mobile = decrypt($_GET['mob']);
    $getAdmin = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
    $getCustomer = Contact::where('mobile', $mobile)->first(); 

    $data = [
        'title' => 'PDF',
        'date' => date('m/d/Y'),
        'getAdmin' => $getAdmin,
        'getCustomer' => $getCustomer,
    ];       

    $pdf = PDF::loadView('pdf.usersPdf', $data);  
    
    $tempPath = storage_path('app\temp');
    $fileName = $mobile . '_processing.pdf';
    $pdf->save($tempPath . $fileName);

    $publicPath = public_path('pdf/');
    if (!file_exists($publicPath)) {
        mkdir($publicPath, 0755, true);
    }
    $filePath = $publicPath . $fileName;
    rename($tempPath . $fileName, $filePath);

    // Provide download link to the user
    return response()->download($filePath);
}

     
   
    
    
    public function generateInsoPDF()
    {  
        $mobile = decrypt($_GET['mob']);
        $getAdmin = User::where('is_Admin', 1)->orderBy('id', 'desc')->first(); 
        $getCustomer = Contact::where('mobile',$mobile)->first(); 

        $data = [
            'title' => 'PDF',
            'date' => date('m/d/Y'),
            'getAdmin' => $getAdmin,
            'getCustomer' => $getCustomer,
        ];       
        set_time_limit(1800);
        $pdf = PDF::loadView('pdf.helthcustomer_pdf', $data);  

        $tempPath = storage_path('app\temp');
        $fileName = $mobile . '_insurance.pdf';
        $pdf->save($tempPath . $fileName);
    
        $publicPath = public_path('pdf/');
        if (!file_exists($publicPath)) {
            mkdir($publicPath, 0755, true);
        }
        $filePath = $publicPath . $fileName;
        rename($tempPath . $fileName, $filePath);
    
        // Provide download link to the user
        return response()->download($filePath);
        
        
    }



    
    
   
}
