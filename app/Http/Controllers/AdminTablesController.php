<?php

namespace App\Http\Controllers;

use App\Standing;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $standings = Standing::all();
        return view('backend.admin.table.index', compact('standings'));
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
        return view('backend.admin.table.create', compact('teams'));
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
        Standing::create($request->all());
        Session::flash('created_table', 'Table successfully created');
        return redirect('/admin/tables');
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
        $standings = Standing::findOrFail($id);
        $teams = Team::pluck('name', 'id')->all();
        return view('backend.admin.table.edit', compact('standings','teams'));
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
        $standings = Standing::findOrFail($id);
        $standings->update($request->all());
        Session::flash('updated_table', 'Table updated successfully');
        return redirect('/admin/tables');
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
        Standing::findOrFail($id)->delete();
        Session::flash('deleted_table', 'Table successfully deleted');
        return redirect('/admin/tables');
    }
}
