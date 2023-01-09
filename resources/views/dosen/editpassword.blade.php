<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Form Input Data Dosen') }}
        </h2>
    </x-slot>

    <div class="card bg-dark text-white my-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('dosen.updatepassword' , $data->id) }}" method="post">
                    @csrf
                    <table class="table table-dark table-striped table-bordered">
                        <tr align="center">
                            <td>Masukkan Password Baru</td>
                            <td>:</td>
                            <td><input type="password" name="password" id="password" class="form-control"></td>
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