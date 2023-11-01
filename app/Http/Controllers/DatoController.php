<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\Dato;


classuse Illuminate\Support\Js;

class DatoController extends Controller
{
    public function index():view{

        $datos = Dato::all();
        return view('vista',['dato' => $datos]);

        //return $datos;
    }

    public function add():view{
        return view('add_persona');
    }

    public function edit($id):view{
        $datos = Dato::find($id);
        return view('edit_persona',compact('datos'));
    }


    public function update(Request $request, $id) {
        $datos = Dato::find($id);

        $datos->update($request->all());
        return redirect()->route('home')
            ->with('success','Post created successfully.');
    }

    public function delete($id) {
        $datos = Dato::find($id);

        $datos->delete();
        return redirect()->route('home')
            ->with('success','Post created successfully.');
    }

    public function store(request $request){
        Dato::create($request->all());
        //Route::get('/home',[DatoController::class,'index'])->name('home');

        return redirect()->route('home')
            ->with('success','Post created successfully.');
    }


    public function dato(){
        $datos = Dato::all();

        return response()->json($datos, 200);
    }
