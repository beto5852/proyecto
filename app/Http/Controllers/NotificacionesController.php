<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notificacion;
use App\User;
use Session;
use Redirect;

class NotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $users = User::pluck('name','id' );
        // dd($users);
        $users = User::where('id','!=',auth()->id())->get();
        $names = $users->pluck('name','id');
       // dd($users);
        return view("admin.notificaciones.index",compact('names'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       // dd($request);

        /*$id = User::where('id','=',auth()->id())->get();
        $idusuario = $id->pluck('id');*/

        //dd($idusuario);

        Notificacion::create([

          'Mensaje'   => $request->Mensaje,
         'id_usuario_envia' => auth()->id(),
         'id_usuario_recibe' =>  $request->user_id,
         
        ]);

        Session::flash('message','Tu mensaje ha sido enviado');
        return redirect::to('admin/home');

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
