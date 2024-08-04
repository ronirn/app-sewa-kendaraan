@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h2>Invoice List</h2>
                <a class="btn btn-success rounded" href="{{ route('invoice.create') }}" style="color: #ffffff; background-color: #007bff;">
                    <i class="bi bi-plus-lg"></i> Add Invoice
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
                <h5 class="card-title">Invoice Data</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Receipt ID</th>
                            <th>Renter Name</th>
                            <th>License Plate</th>
                            <th width="150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $invoice->id_kwitansi }}</td>
                            <td>{{ $invoice->penyewa->nama_penyewa }}</td>
                            <td>{{ $invoice->no_pol }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle rounded" href="#" role="button" id="dropdownMenuLink{{ $invoice->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink{{ $invoice->id }}">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('invoice.show', $invoice->id) }}">
                                                <i class="bi bi-eye-fill"></i> View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('invoice.edit', $invoice->id) }}">
                                                <i class="bi bi-pencil-fill"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST" class="m-0">
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
