<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Form Input Data Dosen') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('dosen.store') }}" method="post">
                    @csrf
                    <table class="table table-dark table-striped table-bordered">
                        <tr align="center">
                            <td>NIP</td>
                            <td>:</td>
                            <td><input type="text" name="nip" id="nip" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td>Nomor HandPhone</td>
                            <td>:</td>
                            <td><input type="text" name="nohp" id="nohp" class="form-control"></td>
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
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"></td>
                        </tr>
                        <tr align="center">
                            <td colspan="3">
                                <button type="submit" class="btn btn-outline-success">Simpan</button>
                                &DoubleLongLeftRightArrow;
                                <a href="{{ route('dosen.index') }}" class="btn btn-outline-danger">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>