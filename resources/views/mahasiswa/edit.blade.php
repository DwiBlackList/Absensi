<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Form Edit Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <form action="{{ route('mahasiswa.update' , $data->id) }}" method="post">
                @csrf
                <table class="table table-dark table-striped table-bordered">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}"></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="text" name="nim" id="nim" class="form-control" value="{{ $data->nim }}"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><input type="text" name="kelas" id="kelas" class="form-control" value="{{ $data->kelas }}"></td>
                    </tr>
                    <tr>
                        <td>Nomor HandPhone</td>
                        <td>:</td>
                        <td><input type="number" name="nohp" id="nohp" class="form-control" value="{{ $data->nohp }}"></td>
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
                        <td colspan="3">
                            <button type="submit" class="btn btn-outline-success">Simpan</button>

                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-danger">Batal</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</x-app-layout>