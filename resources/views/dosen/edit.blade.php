<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Form Edit Data Dosen') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <form action="{{ route('dosen.update' , $data->id) }}" method="post">
                @csrf
                <table class="table table-dark table-striped table-bordered">
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><input type="text" name="nip" class="form-control" value="{{ $data->nip }}" ></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap" class="form-control" value="{{ $data->nama_lengkap }}" required></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><input type="text" name="nohp" class="form-control" value="{{ $data->nohp }}" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <select name="jenis_kelamin" class="form-control" id="" required>
                                @foreach($list_jenis_kelamin as $key)
                                <option value="{{ $key }}" {{ $data->jenis_kelamin == $key ? 'selected' : ''}}>{{ $key }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tgl_lahir" class="form-control" value="{{ $data->tgl_lahir }}" required></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <button type="submit" class="btn btn-outline-success">Simpan</button>

                            <a href="{{ route('dosen.index') }}" class="btn btn-outline-danger">Batal</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</x-app-layout>