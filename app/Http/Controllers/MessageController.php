<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(){
       
        $message = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required'=>__('I need your name'),
            'email.required'=>'Necesitamos un correo de contacto',
            'subject.required'=>'¿Cual es el Asunto de tu correo?',
            'content.required'=>'¿Cual es tu mensaje?',
        ]);
        // Enviar los mails
        Mail::to('eltrebol@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 hrs.'); 
     }
}
