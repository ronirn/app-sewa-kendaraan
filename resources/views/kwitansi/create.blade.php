@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Add Receipt</h2>
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Receipt Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('kwitansi.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="tgl_transaksi" class="form-label"><strong>Transaction Date:</strong></label>
                            <input type="date" name="tgl_transaksi" class="form-control" id="tgl_transaksi" placeholder="Transaction Date" required>
                        </div>
                        <div class="text-center mt-3">
                            <a class="btn btn-secondary" href="{{ route('kwitansi.index') }}">
                                <i class="bi bi-arrow-left-circle"></i> Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-light">
                                <i class="bi bi-x-circle"></i> Reset
                            </button>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
