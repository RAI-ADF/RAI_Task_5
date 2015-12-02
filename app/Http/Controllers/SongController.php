<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\song;
use App\genre;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songs = \App\song::all();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Insert New Song";
        $genres = Genre::lists('name', 'id')->all();
        $default = "";
        return view('songs.create', compact('genres', 'song', 'page_title', 'default'));
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
        $input = Request::all();

        $song = new Song;
        $song->title = $input['title'];
        $song->genre_id = $input['genre_id'];
        $song->artist = $input['artist'];
        $song->save();
        return redirect('songs');
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
        $page_title = "Edit Song";
        $song = Song::findOrFail($id);
        $genres = Genre::lists('name', 'id')->all();
        $default = $song->genre->id;
        return view('songs.edit', compact('page_title', 'song', 'genres', 'default'));
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
        $song = Song::findOrFail($id);
        $song->update(Request::all());
        return redirect('songs');
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
