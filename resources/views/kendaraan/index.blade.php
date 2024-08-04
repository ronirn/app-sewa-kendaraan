@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Vehicle List</h2>
                </div>
                <div class="pull-right">
    <a class="btn btn-primary rounded" href="{{ route('kendaraan.create') }}" style="color: #ffffff; background-color: #007bff;">
        <i class="bi bi-plus-circle"></i> Add Vehicle
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
                <h5 class="card-title">Vehicle Data</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>License Plate</th>
                            <th>Engine Number</th>
                            <th>Car Type</th>
                            <th>Car Name</th>
                            <th>Brand</th>
                            <th>Capacity</th>
                            <th width="280px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraans as $kendaraan)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kendaraan->no_pol }}</td>
                            <td>{{ $kendaraan->no_mesin }}</td>
                            <td>{{ $kendaraan->jenis_mobil }}</td>
                            <td>{{ $kendaraan->nama_mobil }}</td>
                            <td>{{ $kendaraan->merek }}</td>
                            <td>{{ $kendaraan->kapasitas }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('kendaraan.edit', $kendaraan->no_pol) }}">
                                                <i class="bi bi-pencil-fill"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('kendaraan.destroy', $kendaraan->no_pol) }}" method="POST">
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
