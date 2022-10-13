<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Comprometidos;
use App\Http\Requests\GuardarPersona;
use App\Http\Requests\EditarPersona;


class PersonaController extends Controller
{
    public function login(){
        return view('login');
    }

    public function validar(Request $request){
        $user = $request->user;
        $pswd = $request->pswd;
        if($user=="admin"&&$pswd=="password"){
            return redirect()->route('personas.listar');
        }else{
            echo"<script type='text/javascript'>
    alert('Error: Falló al iniciar sesión');
    window.location.href='../public/login';
    </script>";
        }
    }
  
    public function listar(){
        $personas = Persona::paginate();
        return view('listar', compact('personas'));
    }

    public function buscarP(Request $request){
        $persona = Persona::find($request->id);
        if($persona){
            return view('mostrarP', compact('persona'));
        }else{
            return redirect()->route('personas.index');
        }
        
    }

    public function comprometer(){
        return view('comprometer');
    }

    public function agregarP(){
        return view('agregarP');
    }

    public function guardar(GuardarPersona $request){
        $persona = new Persona();
        $persona->id = $request->id;
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->sexo = $request->sexo;
        $persona->estadoCivil = "Soltero(a)";
        $persona->numMatrimonios = 0;
        $persona->save();
        return redirect()->route('personas.listar');
    }

    public function editarP(Persona $persona){
        return view('editarP', compact('persona'));
    }
       
    public function modificar(EditarPersona $request, Persona $persona){
        $datosPersona = Persona::find($request->id);
        $sexo = $datosPersona->sexo;


        if($sexo == "Masculino"){
            $comprometido = Comprometidos::where('idH','=',$datosPersona->id)->get();
            foreach ($comprometido as $datos) {
                $datos->nombreH = $request->nombre;
            $datos->save();
            }
            
        }elseif($sexo == "Femenino"){
            $comprometida = Comprometidos::where('idM','=',$datosPersona->id)->get();
            foreach ($comprometida as $datos) {
                $datos->nombreM = $request->nombre;
            $datos->save();
            }
        }

        $persona->id = $persona->id;
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->sexo = $persona->sexo;
        $persona->estadoCivil = $persona->estadoCivil;
        $persona->numMatrimonios = $persona->numMatrimonios;
        $persona->save();
        
        return redirect()->route('personas.listar');
    }

    public function eliminar(Persona $persona){
        $datos = Persona::find($persona->id);
        $estadoCivil = $datos->estadoCivil;

        if($estadoCivil == "Casado(a)"){
            echo"<script type='text/javascript'>
    alert('Error: La persona tiene un matrimonio');
    window.location.href='../main';
    </script>";
        }else{

        $persona->delete();
        return redirect()->route('personas.listar');
    }
    }

    
}