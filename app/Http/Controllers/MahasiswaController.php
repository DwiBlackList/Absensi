<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->nohp = $request->nohp;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->j_hadir = "0";
        $mahasiswa->j_ijin = "0";
        $mahasiswa->j_sakit = "0";
        $mahasiswa->j_absen = "0";
        $mahasiswa->save();

        return redirect(route('mahasiswa.index'));
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
        $list_jenis_kelamin = ['Laki - Laki', 'Perempuan'];

        $data = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('data', 'list_jenis_kelamin'));
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
        $update = mahasiswa::find($id);
        $update->nama = $request->nama;
        $update->nim = $request->nim;
        $update->kelas = $request->kelas;
        $update->nohp = $request->nohp;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->update();

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = mahasiswa::find($id);
        $delete->delete();
        return redirect(route('mahasiswa.index'));
    }
}
