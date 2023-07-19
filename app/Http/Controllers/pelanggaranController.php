<?php

namespace App\Http\Controllers;

use App\Models\pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class pelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran=pelanggaran::all();
            
        return view('pelanggaran.index', compact('pelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = pelanggaran::all();
        return view('pelanggaran.tb_create', compact('pelanggaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        pelanggaran::create($input);

        return redirect('/dasboard/tablepelanggar')
        ->with('success', 'Student data created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('pelanggaran.tb_show', compact('pelanggaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        return view('pelanggaran.tb_edit', compact('pelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);

        Schema::disableForeignKeyConstraints();

        $pelanggaran->update($request->all());
        Schema::enableForeignKeyConstraints();
        return redirect('/dasboard/tablepelanggar')->with('success', 'data update sucecsfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggaran = pelanggaran::findOrFail($id);
        $pelanggaran->delete();
        return redirect('/dasboard/tablepelanggar');
    }
}
