<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminFixturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fixtures = Fixture::all();

        return view('backend.admin.fixtures.index', compact('fixtures'));
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

        return view('backend.admin.fixtures.create', compact('teams'));
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
        Fixture::create($request->all());


        return redirect('/admin/fixtures');
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
        $fixtures = Fixture::findOrFail($id);
        $teams = Team::pluck('name', 'id')->all();

        return view('backend.admin.fixtures.edit', compact('teams','fixtures'));
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
        $fixtures = Fixture::findOrFail($id);
        $fixtures->update($request->all());

        return redirect('/admin/fixtures');
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
        Fixture::findOrFail($id)->delete();
        return  redirect('/admin/fixtures');
    }
}
