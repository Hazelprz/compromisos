<?php

namespace App\Http\Controllers;

use App\Models\Comprometidos;
use App\Models\Persona;
use Illuminate\Http\Request;


class ComprometidosController extends Controller
{
    public function index(){
        $comprometidos = Comprometidos::paginate();
        return view('index', compact('comprometidos'));
    }

    public function casar(Request $request){
        $persona1 = Persona::find($request->id1);
        $persona2 = Persona::find($request->id2);

        $sexo1 = $persona1->sexo;
        $sexo2 = $persona2->sexo;

        $estadoCivil1 = $persona1->estadoCivil;
         $estadoCivil2 = $persona2->estadoCivil;

        if(($estadoCivil1==="Casado(a)"||$estadoCivil2==="Casado(a)")){
            $mensaje = "Al menos una de las personas ya tiene un matrimonio";
            return view('error', compact('mensaje'));
        }elseif ($sexo1==="Masculino"&&$sexo2==="Masculino") {
            $mensaje = "Ambos son hombres";
            return view('error', compact('mensaje'));
        }elseif ($sexo1==="Femenino"&&$sexo2==="Femenino") {
            $mensaje = "Ambas son mujeres";
            return view('error', compact('mensaje'));
        }else{

            if(($sexo1==="Femenino")){
                $aux = $persona1;
                $persona1 = $persona2;
                $persona2 = $aux;
            }else{}
               
        $persona1->estadoCivil = "Casado(a)";
        $persona2->estadoCivil = "Casado(a)";
        $persona1->numMatrimonios = $persona1->numMatrimonios+1;
        $persona2->numMatrimonios = $persona2->numMatrimonios+1;
       
        $comprometidos = new Comprometidos();
        $comprometidos->idH = $persona1->id;
        $comprometidos->nombreH = $persona1->nombre;
        $comprometidos->idM = $persona2->id;
        $comprometidos->nombreM = $persona2->nombre;
        $comprometidos->save();
        $persona1->save();
        $persona2->save();
        return redirect()->route('comprometidos.index');
        }
    
    }

    public function anular(Comprometidos $compromiso){
        $persona1 = Persona::find($compromiso->idH);
        $persona2 = Persona::find($compromiso->idM);

        $persona1->estadoCivil = "Soltero(a)";
        $persona2->estadoCivil = "Soltero(a)";
        $persona1->save();
        $persona2->save();

        $compromiso->delete();
        return redirect()->route('comprometidos.index');
    }

    public function detalles(Comprometidos $compromiso){
        $persona1 = Persona::find($compromiso->idH);
        $persona2 = Persona::find($compromiso->idM);

         return view('detalles', compact('persona1', 'persona2'));

    }

    
}
