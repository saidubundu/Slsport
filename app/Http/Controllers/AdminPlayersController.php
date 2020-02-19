<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Player;
use App\Position;
use App\Statistic;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminPlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::all();
        return view('backend.admin.players.index',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::pluck('name', 'id')->all();
        $positions = Position::pluck('name','id')->all();
        return view('backend.admin.players.create',compact('teams','positions'));
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
      $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images' , $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        Player::create($input);
        Session::flash('created_player', 'Player successfully created');
        return redirect('/admin/players');
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
        $player = Player::findOrFail($id);

        return view('backend.admin.players.show', compact('player'));
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
        $players = Player::findOrFail($id);
        $teams = Team::pluck('name','id')->all();
        $positions = Position::pluck('name','id')->all();
        return view('backend.admin.players.edit', compact('players', 'teams', 'positions'));
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
        $players = Player::findOrFail($id);

          $input = $request->all();

        if ($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();

            $file->move('images' , $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $players->update($input);
        Session::flash('updated_player', 'Player updated successfully');
        return redirect('/admin/players');

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
        Player::findOrFail($id)->delete();
        Session::flash('deleted_player', 'Player successfully deleted');
        return redirect('/admin/players');
    }
}
