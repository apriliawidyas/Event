<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->all();

        if($request->hasFile('foto'))
        {
            $img = $request->file('foto');
            $fileName = uniqid() . $img->getClientOriginalName();
            $path = 'uploads/events/';
            $fullPath = $path . $fileName;
            Storage::disk('public')->putFileAs($path, $img, $fileName);
        }

        $data['foto'] = $fullPath;

        event::create($data);
        return redirect(route('event.index'));
    }

    public function simpan(Request $request)
    {
//        if ($request->foto){
//            $path = Storage::disk('public')->put('fotoevent',$request->foto);
//        }
        $makeevent = $request->all();
        if($request->hasFile('foto'))
        {
            $img = $request->file('foto');
            $fileName = uniqid() . $img->getClientOriginalName();
            $path = 'uploads/events/';
            $aa = $path . $fileName;
            Storage::disk('public')->putFileAs($path, $img, $fileName);
        }

//        $makeevent = new event();
//        $makeevent->penyelenggara = $request->input('penyelenggara');
//        $makeevent->nama_event = $request->input('nama_event');
//        $makeevent->tgl_event = $request->input('tgl_event');
//        $makeevent->waktu_event = $request->input('waktu');
//        $makeevent->tempat_event = $request->input('tempat_event');
//        $makeevent->harga = $request->input('harga');
//        $makeevent->kuota = $request->input('kuota');
//        $makeevent->deskripsi = $request->input('deskripsi');
//        $makeevent->category_id = $request->input('category_id');
//        $makeevent->foto = $request->input('foto');



//        if ($request->foto){
//            $makeevent->foto = $path;
//        }
        $makeevent['foto'] = $aa;

        event::create($makeevent);
//        $makeevent->save();

//        $data = $request->all();
//
//        if($request->hasFile('foto'))
//        {
//            $img = $request->file('foto');
//            $fileName = uniqid() . $img->getClientOriginalName();
//            $path = 'uploads/events/';
//            $fullPath = $path . $fileName;
//            Storage::disk('public')->putFileAs($path, $img, $fileName);
//        }
//
//
//        $data['foto'] = $fullPath;
//
//        event::create($data);
        return redirect(route('index'));
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

        return view('Admin.event.edit', compact('event','kategori'));
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
        $data = $request->all();

        if($request->hasFile('foto'))
        {
            $img = $request->file('foto');
            $fileName = uniqid() . $img->getClientOriginalName();
            $path = 'uploads/events/';
            $fullPath = $path . $fileName;
            Storage::disk('public')->putFileAs($path, $img, $fileName);

            if($event->foto) {
                Storage::disk('public')->delete($event->foto);
            }

            $data['foto'] = $fullPath;
        }

        $event->update($data);

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
        if($event->foto) {
            Storage::disk('public')->delete($event->foto);
        }
        $event->delete();

        return back();
    }
}
