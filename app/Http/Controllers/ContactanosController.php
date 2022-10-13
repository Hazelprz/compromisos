<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function contactanos(){
        return view('emails.contacto');
    }

    public function enviar(Request $request){
        $correo = new ContactoMailable($request->all());
    Mail::to('hazelpg2000@gmail.com')->send($correo);
    echo"<script type='text/javascript'>
    alert('Correo enviado');
    window.location.href='../public/main';
    </script>";
    }
}
