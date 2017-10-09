<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Madcoda\Youtube;
use View;


class YoutubeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.videos.index');
    }

    /**  Realiza la búsqueda y la envía a la vista.
     */
    public function search(Request $request)
    {

        $input = $request->input();

        $word = $input['search'];

        $youtube = new Youtube(array('key' => 'AIzaSyAO2s0ANXziZNtFOo86RQBtSNy_30wBO0M'));


        $params = array(
            'q'             => $word,
            'type'          => 'video',
            'part'          => 'id, snippet',
            'maxResults'    => 20
        );

        $videos = $youtube->searchAdvanced($params, true);

       // dd($videos);

        return \View::make('youtube',$videos);
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
