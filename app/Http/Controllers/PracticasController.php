<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Practica;
use App\User;
use App\Tecnologia;
use App\Semana;
use App\Mes;
use App\Etapa;

use Storage;
use Session;
use Redirect;

class PracticasController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
            $this->middleware('admin',['only' => ['index','edit','update','create','destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //mostrar algunos Productos
        
        $practicas = Practica::Search($request->search)->orderBy('id','DESC')->paginate(4);
        return view("admin.practicas.index",['practicas' => $practicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       /* $tecnologias = Tecnologia::pluck('nombre_tecnologia','id');
        $semanas = Semana::pluck('nombre_semana','id');
        $meses = Mes::pluck('nombre_mes','id');
        $etapas = Etapa::pluck('nombre_etapa','id');
        return view('admin.practicas.create', compact('tecnologias','semanas','meses','etapas'));*/

        $tecnologias = Tecnologia::orderBy('nombre_tecnologia','ASC')->pluck('nombre_tecnologia','id');

        $tags  = Tag::orderBy('nombre_tags','ASC')->pluck('nombre_tags','id');


        return view('admin.practicas.create',compact('tecnologias','tags'));

       /* $tecnologias = Tecnologia::orderBy('nombre_tecnologia','ASC')->pluck('nombre_tecnologia','id');
        $tags  = Tag::orderBy('nombre_tags','ASC')->pluck('nombre_tags','id');
        return view('admin.practicas.create')->with('tecnologias',$tecnologias)->with('nombre_tags',$tags);*/
        
       // return view('admin.practicas.create')->with('tecnologias',$tecnologias)->with('tags',$tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $practica = new Practica($request->all());

        $practica->save();

        $practica->tags()->sync($request->pt_id_tags);


        Session::flash('message','Labor agricola registrado correctamente');
        return redirect::to('admin/practicas');
        //dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Muestra con el id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edita con id
        $practica = Practica::find($id);
        $users = User::pluck('name','id');
        $tecnologias = Tecnologia::pluck('nombre_tecnologia','id');
        $tags = Tag::pluck('nombre_tags');
        $my_tags = $practica->tags->pluck('id')->ToArray();



        return view('admin.practicas.edit',compact('users','tecnologias','practica','tags','my_tags'));
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
        //actualiza lo que se envio en edit$id


        $practica = Practica::find($id);
        $practica->fill($request->all());
        $practica->slug = null;
        $practica->update(['nombre_practica']);
       // dd($practica);
        $practica->save();

       // dd($request->pt_id_tags);

        $practica->tags()->sync($request->pt_id_tags);

        Session::flash('message','Práctica actualizado correctamente');
        return redirect::to('admin/practicas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimina la practica con el id que recibe

        $practica = Practica::find($id);
        $practica->delete();
        Session::flash('message','Práctica eliminada correctamente');
        return redirect::to('admin/practicas');
        //dd($id);
    }
}
