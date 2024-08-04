@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Rental List</h2>
                <a class="btn btn-primary rounded" href="{{ route('sewa.create') }}" style="color: #ffffff; background-color: #007bff;">
                    <i class="bi bi-plus-circle"></i> Add Rental
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rental Data</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Rental ID</th>
                            <th>License Plate</th>
                            <th>Rental Date</th>
                            <th>Return Date</th>
                            <th>Rental Fee</th>
                            <th>Renter's Name</th>
                            <th>Receipt ID</th>
                            <th width="150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sewas as $sewa)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $sewa->id_sewa }}</td>
                            <td>{{ $sewa->no_pol }}</td>
                            <td>{{ $sewa->tgl_sewa }}</td>
                            <td>{{ $sewa->tgl_selesai }}</td>
                            <td>{{ $sewa->biaya_sewa }}</td>
                            <td>{{ $sewa->penyewa->nama_penyewa }}</td>
                            <td>{{ $sewa->id_kwitansi }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink{{ $sewa->id_sewa }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $sewa->id_sewa }}">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('sewa.edit', $sewa->id_sewa) }}">
                                                <i class="bi bi-pencil-fill"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('sewa.destroy', $sewa->id_sewa) }}" method="POST" class="m-0">
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
