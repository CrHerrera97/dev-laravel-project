<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class ApiController extends Controller
{
    public function traer(){

        $url = 'https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0';

        $response = Http::get($url);

        $data = $response->json();

        return view('api',['data' => $data]);


    }

    public function mostrar($nombre){

        return view('api_view',['nombre' => $nombre]);
    }

    public function consumir(){

        $url = 'http://localhost:8000/json/tu_archivo.json';

        $response = Http::get($url);

        $data = $response->json();

        return view('vista_api',['data' => $data]);


    }

    public function formato(){

        $datos_json = [
            'dato1' => 'hola',
            'dato2' => 'como estas'
        ];

        $json = json_encode($datos_json);

        /*

        $url = 'https://pokeapi.co/api/v2/pokemon/ditto';

        $response = file_get_contents($url);

        $data = json_decode($response,true);

        return $data;
        */
        File::put(storage_path('app\json\tu_archivo.json'), $json);

        return 'JSON generado y guardado con éxito';


    }



}
