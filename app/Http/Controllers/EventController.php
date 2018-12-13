<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;
use App\category;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('log', ['only' => ['fooAction', 'barAction']]);
    }

    public function index()
    {
        $data=event::all();
        return view('Admin.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = category::all();

        return view('Admin.event.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = event::create($request->all());
        $data->save();
        return redirect(route('event.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        $kategori = category::all();
        $data = event::findOrFail($event);
        return view('event.update', compact('event','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        $data = event::findOrFail($event);
        $data->fill($request->except(['_token']))->save();
        return back()->with(['alert'=>'success', 'msg'=>'Data Berhasil di DiUbah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        $data=event::where('id',$event);
        $data->delete();
        return back();
    }
}
