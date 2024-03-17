<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($mailContent)
    {
        // print_r($mailContent);
        // die("ASdfas");
        // $this->mailContent = (object) ['name' => 'aviansh', 'age' => 22];
        $this->mailContent = $mailContent;
        
    }

    public function build()
    {
        $pdfFileName = 'corporate.pdf';
        $pdfFilePath = base_path('/public/pdf/corporate.pdf'); 

        // $rs = DB::select('SELECT * FROM email_template WHERE id = 1');
        // $arr = (object)[
        //     'stuName' => $this->mailContent->stuName,
        //     'stuEmail' => $this->mailContent->stuEmail,
        //     'refNo' => $this->mailContent->refNo,
        //     'courseName' => $this->mailContent->courseName,
        //     'courseStartDate' => date('d/m/y', strtotime($this->mailContent->courseStartDate)),
        //     'courseEndDate' => date('d/m/y', strtotime($this->mailContent->courseEndDate)),
        // ];
      
        // $emailContent = $rs[0]->email_content;
        // $emailContent = str_replace('{{ $stuName }}', $arr->stuName, $emailContent);
        // $emailContent = str_replace('{{ $stuEmail }}', $arr->stuEmail, $emailContent);
        // $emailContent = str_replace('{{ $refNo }}', $arr->refNo, $emailContent);
        // $emailContent = str_replace('{{ $courseName }}', $arr->courseName, $emailContent);
        // $emailContent = str_replace('{{ $courseStartDate }}', $arr->courseStartDate, $emailContent);
        // $emailContent = str_replace('{{ $courseEndDate }}', $arr->courseEndDate, $emailContent);
        // echo $emailContent;

        // die("Asfasf");

        return $this->view('certificate')
                    ->subject('Subject of the Email')
                    ->with([
                        'key' => 'value',
                        'stuName'=>"Avinash"
                    ])->attach($pdfFilePath, [
                        'as' => $pdfFileName,
                        'mime' => 'application/pdf',
                    ])->cc('console.avinash@gmail.com');


        // return $this->view('certificate')
        // ->subject($rs[0]->subject)
        // ->with([
        //     'stuName'=>$this->mailContent->stuName,
        //     'stuEmail'=>$this->mailContent->stuEmail,
        //     'refNo'=>$this->mailContent->refNo,
        //     'courseName'=>$this->mailContent->courseName,
        //     'courseStartDate' => date('d/m/y', strtotime($this->mailContent->courseStartDate)),
        //     'courseEndDate' => date('d/m/y', strtotime($this->mailContent->courseEndDate)),
        //     'fullBodyMail'=>$emailContent,
        // ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
