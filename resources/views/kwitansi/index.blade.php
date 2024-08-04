@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Receipt List</h2>
                <a class="btn btn-primary rounded" href="{{ route('kwitansi.create') }}" style="color: #ffffff; background-color: #007bff;">
                    <i class="bi bi-plus-circle"></i> Add Receipt
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
                <h5 class="card-title">Receipt Data</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Receipt ID</th>
                            <th>Transaction Date</th>
                            <th width="280px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kwitansis as $kwitansi)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kwitansi->id_kwitansi }}</td>
                            <td>{{ $kwitansi->tgl_transaksi }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink{{ $kwitansi->id_kwitansi }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $kwitansi->id_kwitansi }}">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('kwitansi.edit', $kwitansi->id_kwitansi) }}">
                                                <i class="bi bi-pencil-fill"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('kwitansi.destroy', $kwitansi->id_kwitansi) }}" method="POST" class="m-0">
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
