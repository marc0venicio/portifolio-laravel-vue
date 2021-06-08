<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Blog;
use Exception;
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
        $contato = new ContactForm($request);
        try {
        $contato->sendMail();
            
        } catch (\Exception $error) {
            return back()->with("error", "ocorreu um erro inesperado: {$error->getMessage()}");
        }
        return back()
        ->with('success', 'obrigado por nos contactar');
    }

}
