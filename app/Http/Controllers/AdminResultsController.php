<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Result;
use App\Team;
use Illuminate\Http\Request;

class AdminResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = Result::all();
        return view('backend.admin.results.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::pluck('name','id')->all();

        return view('backend.admin.results.create', compact('teams'));
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
        Result::create($request->all());
        return redirect('/admin/results');
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
        $results = Result::findOrFail($id);
        $teams = Team::pluck('name', 'id')->all();
        return view('backend.admin.results.edit', compact('results', 'teams'));
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
        $results = Result::findOrFail($id);
        $results->update($request->all());
        return redirect('/admin/results');
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
        Result::findOrFail($id)->delete();
        return redirect('/admin/results');
    }
}
