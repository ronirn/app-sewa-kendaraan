@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h2>Edit Invoice</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Edit Invoice Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('invoice.update', $invoice->id) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="id_kwitansi" class="form-label"><strong>Receipt ID:</strong></label>
                            <select name="id_kwitansi" id="id_kwitansi" class="form-control">
                                <option value="">Select Receipt ID</option>
                                @foreach ($kwitansis as $kwitansi)
                                    <option value="{{ $kwitansi->id_kwitansi }}" {{ $kwitansi->id_kwitansi == $invoice->id_kwitansi ? 'selected' : '' }}>
                                        {{ $kwitansi->id_kwitansi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="id_penyewa" class="form-label"><strong>Renter ID:</strong></label>
                            <select name="id_penyewa" id="id_penyewa" class="form-control">
                                <option value="">Select Renter ID</option>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id_penyewa }}" {{ $penyewa->id_penyewa == $invoice->id_penyewa ? 'selected' : '' }}>
                                        {{ $penyewa->nama_penyewa }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>Vehicle Registration Number:</strong></label>
                            <select name="no_pol" id="no_pol" class="form-control">
                                <option value="">Select Vehicle Registration Number</option>
                                @foreach ($kendaraans as $kendaraan)
                                    <option value="{{ $kendaraan->no_pol }}" {{ $kendaraan->no_pol == $invoice->no_pol ? 'selected' : '' }}>
                                        {{ $kendaraan->no_pol }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Update
                            </button>
                            <a href="{{ route('invoice.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left-circle"></i> Back
                            </a>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
