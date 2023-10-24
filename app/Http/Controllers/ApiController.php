<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function traer(){

        $url = 'https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0';

        $response = Http::get($url);

        $data = $response->json();

        return view('api',['data' => $data]);


    }
}
