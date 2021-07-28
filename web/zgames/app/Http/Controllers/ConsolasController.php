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

    //registra una consola de ejemplo
    public function crearConsola(){
        //Equivalente a un insert
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anio = 2015;

        $consola->save();

        return $consola;
    }
}
