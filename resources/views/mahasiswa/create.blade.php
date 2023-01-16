<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Form Input Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('mahasiswa.store') }}" method="post">
                    @csrf
                    <table class="table table-dark table-striped table-bordered">
                        <tr align="center">
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" id="nama" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nim" id="nim" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>Kelas</td>
                            <td>:</td>
                            <td><input type="text" name="kelas" id="kelas" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>Nomor HandPhone</td>
                            <td>:</td>
                            <td><input type="number" name="nohp" id="nohp" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <select name="jenis_kelamin" class="form-select" id="">
                                    <option value="Laki - laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="3">
                                <button type="submit" class="btn btn-outline-success">Simpan</button>
                                &DoubleLongLeftRightArrow;
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-danger">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>