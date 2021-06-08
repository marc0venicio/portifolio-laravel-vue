<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{

    private $name;
    private $last_name;
    private $telephone;
    private $email;
    private $message;

    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->last_name = $request->last_name;
        $this->telephone = $request->telephone;
        $this->email = $request->email;
        $this->message = $request->message;
    }

    public function sendMail()
    {
        
        $data = array(
            'name' =>$this->name,
            'last_name' =>$this->last_name,
            'email' =>$this->email,
            'telephone'=>$this->telephone,
            'message' =>$this->message
        );
        Mail::to(config('mail.from.address'))->send(new SendMail($data));
    }
}
