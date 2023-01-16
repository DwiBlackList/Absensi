<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <div class="btn-group">
                <a type="button" href="{{ route('mahasiswa.create') }}" class="btn btn-outline-primary">Tambah</a>
                <a type="button" href="#" class="btn btn-outline-warning">Import Excel</a>
                <a type="button" href="#" class="btn btn-outline-success">Export Excel</a>
                <a type="button" href="#" class="btn btn-outline-danger ">Export PDF</a>
            </div>

            <hr>
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2">Nama Lengkap</th>
                            <th rowspan="2">NIM</th>
                            <th rowspan="2">Kelas</th>
                            <th rowspan="2">Nomor HandPhone</th>
                            <th rowspan="2">Jenis Kelamin</th>
                            <th colspan="4">Absensi</th>
                            <th colspan="2" rowspan="2" >Actions</th>
                        </tr>
                        <tr>
                            <th>Hadir</th>
                            <th>Ijin</th>
                            <th>Sakit</th>
                            <th>Absen</th>
                        </tr>
                    </thead>
                    @if(!is_null($data))
                    @foreach($data as $x)
                    <tr>
                        <td>{{ $x->nama }}</td>
                        <td>{{ $x->nim }}</td>
                        <td>{{ $x->kelas }}</td>
                        <td>{{ $x->nohp }}</td>
                        <td>{{ $x->jenis_kelamin }}</td>
                        <td>{{ $x->j_hadir }}</td>
                        <td>{{ $x->j_ijin }}</td>
                        <td>{{ $x->j_sakit }}</td>
                        <td>{{ $x->j_absen }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit' , $x->id) }}" class="btn btn-outline-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('mahasiswa.destroy' , $x->id) }}" method="post">
                                @csrf
                                <button class="btn btn-outline-danger" onclick="return confirm('Yang Bener Mau Dihapus ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="13">Data Tidak Ada</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</x-app-layout>