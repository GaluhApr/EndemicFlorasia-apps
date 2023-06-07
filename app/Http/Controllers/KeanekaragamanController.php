<?php

namespace App\Http\Controllers;

use App\Models\Keanekaragaman;
use Illuminate\Http\Request;

class KeanekaragamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keanekaragaman = Keanekaragaman::all();
        return view('admin.keanekaragaman.index', compact('keanekaragaman', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keanekaragaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_keanekaragaman' => 'required|max:50|unique:keanekaragamans,keanekaragaman',
            'tahun' => 'required|numeric|min:1900|max:2099',

        ]);

        Keanekaragaman::create($validate);

        return redirect('/keanekaragaman');
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
        $keanekaragaman = Keanekaragaman::find($id);
        return view('admin.keanekaragaman.edit', compact('keanekaragaman'));
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
        $validate = $request->validate([
            'nama_habitat' => 'required|max:50',
            'deskripsi_habitat' => 'required|max:255',

        ]);
        $keanekaragaman = Keanekaragaman::FindOrFail($id);
        $keanekaragaman->update($validate);

        return redirect('/keanekaragaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $keanekaragaman = Keanekaragaman::find($id);
        $keanekaragaman->delete();
        return redirect('/keanekaragaman');
    }
}
