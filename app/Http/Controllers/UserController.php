<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\User;

class UserController extends Controller
{
    //creamos el metodo llamado index, el cual estamos haciendo referencia en el controllador

    public function index(int $id):view{

        //dd(User:: all());

        $user = User::find($id);

        //dd($user);

        
        return view('welcome',['user' => $user]);
    }
}
