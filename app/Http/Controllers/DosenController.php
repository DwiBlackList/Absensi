<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Dosen;
        $dosen->nip = $request->nip;
        $dosen->nama_lengkap = $request->nama_lengkap;
        $dosen->nohp = $request->nohp;
        $dosen->jenis_kelamin = $request->jenis_kelamin;
        $dosen->tgl_lahir = $request->tgl_lahir;
        $dosen->save();

        return view(redirect('dosen.index'));
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

        $data = Dosen::find($id);
        return view('dosen.edit', compact('data', 'list_jenis_kelamin'));
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
        $update = Dosen::find($id);
        $update->nip = $request->nip;
        $update->nama_lengkap = $request->nama_lengkap;
        $update->nohp = $request->nohp;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->tgl_lahir = $request->tgl_lahir;
        $update->update();

        return redirect(route('dosen.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Dosen::find($id)->delete();
        return redirect(route('dosen.index'));
    }
}
