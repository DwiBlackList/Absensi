<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Data Dosen') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <div class="btn-group">
                <a type="button" href="{{ route('dosen.create') }}" class="btn btn-outline-primary">Tambah</a>
                <a type="button" href="#" class="btn btn-outline-success">Export Excel</a>
                <a type="button" href="#" class="btn btn-outline-danger ">Export PDF</a>
            </div>

            <hr>
            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor HandPhone</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    @if(!is_null($data))
                    @foreach($data as $x)
                    <tr>
                        <td>{{ $x->nip }}</td>
                        <td>{{ $x->nama_lengkap }}</td>
                        <td>{{ $x->nohp }}</td>
                        <td>{{ $x->jenis_kelamin }}</td>
                        <td>{{ \Carbon\Carbon::parse($x->tgl_lahir)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('dosen.edit' , $x->id) }}" class="btn btn-outline-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('dosen.destroy' , $x->id) }}" method="post">
                                @csrf
                                <button class="btn btn-outline-danger" onclick="return confirm('Yang Bener Mau Dihapus ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">Data Tidak Ada</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</x-app-layout>