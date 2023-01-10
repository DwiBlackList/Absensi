<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
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
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
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

        $user = User::create([
            'name' => $request->nama_lengkap,
            'username' => $request->nip,
            'role' => "dosen",
            'password' => Hash::make($request->nip),
        ]);

        return redirect(route('dosen.index'));
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
        $delete = Dosen::find($id);
        DB::table('users')
        ->where('username', $delete->nip)
        ->delete();
        $delete->delete();
        return redirect(route('dosen.index'));
    }

    public function editpassword($id)
    {
        $data = Dosen::find($id);

        return view('dosen.editpassword', compact('data'));
    }
    public function updatepassword(Request $request, $id)
    {
        $datadosen = Dosen::find($id);

        DB::table('users')
            ->where('username', $datadosen->nip)
            ->update([
                'password' => Hash::make($request->password),
            ]);

        return redirect(route('dosen.index'));
    }
}
