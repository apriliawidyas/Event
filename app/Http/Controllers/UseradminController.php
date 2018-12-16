<?php

namespace App\Http\Controllers;

use App\useradmin;
use Illuminate\Http\Request;

class UseradminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = useradmin::all();
        return view('/Admin/User/index', [
            'item' => $item
        ]);
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
     * @param  \App\useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function show(useradmin $useradmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function edit(useradmin $useradmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, useradmin $useradmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(useradmin $useradmin)
    {
        //
    }
}
