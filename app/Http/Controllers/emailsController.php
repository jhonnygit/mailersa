<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\email;

class emailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emails=email::all();        
        //$emails=email::latest('id');        
        return view('emails.index',compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('emails.create'); 
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
        $estado=0;
        $request->validate([
            'asunto'=>'required',
            'destinatario'=>'required|email',
            'mensaje'=>'required'            
        ]);

        $emails= new email;  
        $emails->asunto=$request->get('asunto');
        $emails->destinatario=$request->get('destinatario');
        $emails->mensaje=$request->get('mensaje');

        if($request->get('enviar')){
            $estado=1;
        }else{
            $estado=2;
        }

        $emails->estado=$estado;

        $emails->usuario_id=auth()->id();

        $emails->save();
        return redirect()->route('emails.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

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
    }
}
