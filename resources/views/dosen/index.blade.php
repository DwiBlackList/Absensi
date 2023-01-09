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
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>