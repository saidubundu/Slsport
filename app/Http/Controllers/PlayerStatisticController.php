<?php

namespace App\Http\Controllers;

use App\Player;
use App\Statistic;
use Illuminate\Http\Request;

class PlayerStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $statistic = Statistic::all();

        return view('backend.admin.playerstat.index', compact('statistic'));
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
        // $data = [
        //            'post_id' => $request->post_id,
        //            'author' => $user->name,
        //            'email' => $user->email,
        //            'photo' => $user->photo->file,
        //            'body' => $request->body,
        //        ];

        $data = [
            'player_id' => $request->player_id,
            'season' => $request->season,
            'goal'=> $request->goal,
            'assist'=> $request->assist,
            'yellow' => $request->yellow,
            'red' => $request->red,
        ];

        Statistic::create($data);
        return redirect()->back();
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
        $statistics = Statistic::findOrFail($id);

        return view('backend.admin.playerstat.show',compact('statistics'));
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
