@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Invoice Details</h2>
            <a class="btn btn-primary" href="{{ route('invoice.index') }}">
                <i class="bi bi-arrow-left-circle"></i> Back
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Invoice Information</h5>

                    <div class="list-group">
                        <div class="list-group-item">
                            <strong>Receipt ID:</strong>
                            <span class="float-end">{{ $invoice->id_kwitansi }}</span>
                        </div>
                        <div class="list-group-item">
                            <strong>Renter Name:</strong>
                            <span class="float-end">{{ $invoice->penyewa->nama_penyewa }}</span>
                        </div>
                        <div class="list-group-item">
                            <strong>Vehicle Registration Number:</strong>
                            <span class="float-end">{{ $invoice->no_pol }}</span>
                        </div>
                        <div class="list-group-item">
                            <strong>Created At:</strong>
                            <span class="float-end">{{ $invoice->created_at->format('d M Y H:i:s') }}</span>
                        </div>
                        <div class="list-group-item">
                            <strong>Updated At:</strong>
                            <span class="float-end">{{ $invoice->updated_at->format('d M Y H:i:s') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
