<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\Materia; 

class MateriaController extends Controller
{
    public function materia($id):view{

        $id = Materia::find($id);
        //return 'hola mundo';
        return view('home',['user' => $id]);
    }
}
