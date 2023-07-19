<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\kelas;
use App\Models\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=siswa::all();
            
        return view('student.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = siswa::all();
        return view('student.tb_create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // siswa::create($input);

        // return redirect('/dasboard/tablesiswa')
        // ->with('success', 'Student data created successfuly');

        $input = siswa::create($request->all());
        return redirect('/dasboard/tablesiswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('student.tb_show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('student.tb_edit', compact('siswa', 'kelas', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = siswa::findOrFail($id);

        Schema::disableForeignKeyConstraints();
        $siswa->update($request->all());
        Schema::enableForeignKeyConstraints();
        return redirect('/dasboard/tablesiswa')->with('success', 'data update sucecsfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/dasboard/tablesiswa');
    }
}
