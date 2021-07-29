<?php

namespace App\Http\Controllers;
use App\Models\Consola;
use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas = array();
        $marcas[]= "Sony";
        $marcas[]= "Microsoft";
        $marcas[]= "Nintendo";
        $marcas[]= "Sega";

        return $marcas;
    }
    //busca las consolas que existen en la bd y las retorna
    public function getConsolas(){
        //equivalente a select * from consolas  
        $consolas = Consola::all();
        return $consolas;
    }

    public function filtrarConsolas(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $consolas = Consola::where("marca", "=" ,$filtro)->get();
        // Select * from consolas where marca = $filtro
        return $consolas;
    }

    //registra una consola de ejemplo
    public function crearConsola(Request $request){
        $input = $request->all();
        //Equivalente a un insert
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();

        return $consola;
    }

    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $consola = Consola::findOrFail($id);
        $consola->delete();
        return "ok";
    }
}
