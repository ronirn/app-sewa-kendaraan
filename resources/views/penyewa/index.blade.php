@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>User List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('penyewa.create') }}" style="color: #ffffff; background-color: #007bff;">
                        <i class="bi bi-plus-lg"></i> Create User
                    </a>
                </div>
            </div>
        </div>

        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tenant Data</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tenant ID</th>
                            <th>Tenant Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th width="280px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyewas as $penyewa)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $penyewa->id_penyewa }}</td>
                            <td>{{ $penyewa->nama_penyewa }}</td>
                            <td>{{ $penyewa->alamat }}</td>
                            <td>{{ $penyewa->no_hp }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('penyewa.edit', $penyewa->id_penyewa) }}">
                                                <i class="bi bi-pencil-fill"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bi bi-trash-fill"></i> Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>

    </div>
</section>
@endsection
