<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contato(){
        return view('contato');
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'telephone'=>'required',
            'message' =>'required'
        ]);

        $data = array(
            'name' =>$request->name,
            'last_name' =>$request->last_name,
            'email' =>$request->mail,
            'telephone'=>$request->telephone,
            'message' =>$request->message
        );
        Mail::to( config('mail.from.address'))
                ->send(new SendMail($data));
        return back()
        ->with('success', 'obrigado por nos contactar');
    }

}
