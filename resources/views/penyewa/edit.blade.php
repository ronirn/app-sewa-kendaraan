@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Edit Tenant</h2>
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
                    <h5 class="card-title">Edit Tenant Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="nama_penyewa" class="form-label"><strong>Tenant Name:</strong></label>
                            <input type="text" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" class="form-control" id="nama_penyewa" placeholder="Tenant Name">
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label"><strong>Address:</strong></label>
                            <textarea class="form-control" id="alamat" name="alamat" style="height:150px" placeholder="Address">{{ $penyewa->alamat }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="no_hp" class="form-label"><strong>Phone Number:</strong></label>
                            <input type="text" name="no_hp" value="{{ $penyewa->no_hp }}" class="form-control" id="no_hp" placeholder="Phone Number">
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check2"></i> Save Changes
                            </button>
                            <a class="btn btn-secondary" href="{{ route('penyewa.index') }}">
                                <i class="bi bi-arrow-left"></i> Back
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
