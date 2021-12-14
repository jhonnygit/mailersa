<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $usuarios=Usuario::all();
        
        return view('home',compact('usuarios'));
    }

    public function create()
    {
        //
        return view('usuario.create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'celular'=>'integer|min:10',
            'cedula'=>'required|max:11',
            'fecha_nacimiento'=>'required|date',
            'codigo_ciudad'=>'required|integer',
        ]);

        $usuario= new Usuario;  
        $usuario->nombre=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->num_celular=$request->get('celular');
        $usuario->cedula=$request->get('cedula');
        $usuario->fecha_nacimiento=$request->get('fecha_nacimiento');
        $usuario->codigo_ciudad=$request->get('codigo_ciudad');

        $usuario->save();
        return redirect()->route('usuario.index'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'celular'=>'integer|min:10',
            'fecha_nacimiento'=>'required|date',
            'codigo_ciudad'=>'required|integer',
        ]);
        $usuario=Usuario::findOrFail($id);  
        $usuario->nombre=$request->get('name');
        $usuario->num_celular=$request->get('celular');       
        $usuario->fecha_nacimiento=$request->get('fecha_nacimiento');
        $usuario->codigo_ciudad=$request->get('codigo_ciudad');
        $usuario->update();
        return redirect()->route('usuario.index'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = Usuario::find($id);
        $usuario->delete();
        
        return redirect()->route('usuario.index');

    }


}
