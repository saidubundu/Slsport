<?php

namespace App\Http\Controllers;

use App\LiveScore;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $scores = LiveScore::all();
        $teams = Team::pluck('name','id')->all();
        return view('backend.admin.games.index', compact('scores','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.admin.games.create');
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
        LiveScore::create($request->all());
        Session::flash('created_game', 'Live Score successfully created');
        return redirect('/admin/games');
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
        $scores = LiveScore::findOrFail($id);
        $teams = Team::pluck('name','id')->all();
        return view('backend.admin.games.edit', compact('scores', 'teams'));
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
        $scores = LiveScore::findOrFail($id);
        $scores->update($request->all());
        Session::flash('updated_game', 'Live Score updated successfully');
        return redirect('/admin/games');
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
        LiveScore::findOrFail($id)->delete();
        Session::flash('deleted_game', 'Live Score successfully deleted');
        return redirect('/admin/games');
    }
}
