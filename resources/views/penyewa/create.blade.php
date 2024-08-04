@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12">
            <h2>Add Tenant</h2>
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
                    <h5 class="card-title">Tenant Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('penyewa.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="nama_penyewa" class="form-label"><strong>Tenant Name:</strong></label>
                            <input type="text" name="nama_penyewa" class="form-control" id="nama_penyewa" placeholder="Tenant Name">
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label"><strong>Address:</strong></label>
                            <textarea class="form-control" id="alamat" name="alamat" style="height:150px" placeholder="Address"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="no_hp" class="form-label"><strong>Phone Number:</strong></label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Phone Number">
                        </div>
                        <div class="text-center mt-4">
                            <a class="btn btn-secondary me-2" href="{{ route('penyewa.index') }}">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                            <button type="reset" class="btn btn-warning me-2">
                                <i class="bi bi-arrow-clockwise"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check2"></i> Submit
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
