<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class Auth extends Controller
{
    public function register_post(Request $request)
    {

        // validacion de camposvocales acentuadas,letras y espacios
        // $validarInfo = $request->validate([
        //     'nombreCompleto'           => ['required', 'string', 'max:120', 'regex:/^[A-Z,a-z,ñ,Ñ,á,é,í,ó,ú, ]*$/'], // acepta letras mayusculas y minusculas, vocales acentuadas,y espacios.
        //     'telefono' => ['required', 'string', 'min:3', 'max:80', 'regex:/^[A-Z,a-z,á,é,í,ó,ú,ñ,Ñ]*$/'], // acepta letras mayusculas y minusculas, vocales acentuadas,sin espacios.
        //     'correo'            => ['required', 'email', 'indisposable', 'unique:users,email'],
        //     'password'         => ['required', 'string', 'min:6', 'max:16', 'regex:/^[A-Z,a-z,0-9,á,é,í,ó,ú,ñ,Ñ,@,-,_,#,!,¡]*$/'], // acepta letras mayusculas y minusculas, vocales acentuadas con caracteres especiales
        //     //'g-recaptcha-response'      => ['recaptcha']

        // ]);

        //crear un nuevo registro
        $usu = Usuarios::create(array(
            'nombreCompleto' => $request->input('nombreCompleto'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
            'password' => $request->input('password'),
            'estatus' => "Inactivo",
            'aviso' => 'aceptado',

            //'id_tipo'=>$request->input('id_tipo'), 
            'img' => "",
        ));

        if ($usu) { // vereifica si guardo el registro
            // Mail::to($guardar->email)->send(new VerificarEmail($guardar)); // realiza el envio de correo de restablecimiento
            // Log::info("$guardar->email Realizo su registro");
            return redirect()->route('admin');
        } else {
            Log::info("Intento de registro fallido");
            return redirect()->route('register');
            // si no me redireciona a un registro fallido
        }
    }
    public function login_post(Request $request){
         $validarInfo=$request->validate(
             [
                'correo'         => ['required', 'email', ],
                'password'      => ['required'],// acepta letras mayusculas y minusculas, vocales acentuadas con caracteres especiales
             'g-recaptcha-response'   => ['required']
             ]
             );
        $user=Usuarios::query() //busca al ususuario
                  ->where('correo',$request->correo)
                  ->first();
        if($user){ // si encuentra al usuario
            //$passwordDecripted = Crypt::decrypt($user->password); //desencripta la contraseña
            if($request->password == $user->password){// si la contraseña ingresada se guarda en la contraseña encriptada
                Log::info("$user->correo inicio sesion"); //log de informacion
                //$remember=($request->has('checkbox_remember'))?true:false;
                //Auth::login($user,$remember);
                return redirect()->route('admin');
            }else{
                Log::info("Intento de ingreso fallido");
                return back()->with('message-warning', "Licencias de acceso incorrectas");// si no encuentra al usuario me redirecciona un mensaje de licencias de acceso incorrectas
            }
        }else{
            Log::info("Intento de ingreso fallido");
            return back()->with('message-warning', "Licencias de acceso incorrectas"); //si no se guardo la contraseña me redirecciona un mensaje de licencias de acceso incorrectas
        }
    }
}
