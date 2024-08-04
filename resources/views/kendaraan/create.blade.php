@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Add Vehicle</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There are some problems with your input.<br><br>
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
                    <h5 class="card-title">Add Vehicle Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('kendaraan.store') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>License Plate:</strong></label>
                            <input type="text" name="no_pol" class="form-control" id="no_pol" placeholder="License Plate">
                        </div>
                        <div class="col-12">
                            <label for="no_mesin" class="form-label"><strong>Engine Number:</strong></label>
                            <input type="text" name="no_mesin" class="form-control" id="no_mesin" placeholder="Engine Number">
                        </div>
                        <div class="col-12">
                            <label for="jenis_mobil" class="form-label"><strong>Car Type:</strong></label>
                            <select name="jenis_mobil" class="form-control" id="jenis_mobil">
                                <option value="mpv">MPV</option>
                                <option value="city">City</option>
                                <option value="suv">SUV</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nama_mobil" class="form-label"><strong>Car Name:</strong></label>
                            <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" placeholder="Car Name">
                        </div>
                        <div class="col-12">
                            <label for="merek" class="form-label"><strong>Brand:</strong></label>
                            <select name="merek" class="form-control" id="merek">
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="daihatsu">Daihatsu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="kapasitas" class="form-label"><strong>Capacity:</strong></label>
                            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Capacity">
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a class="btn btn-secondary" href="{{ route('kendaraan.index') }}">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check2"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="bi bi-x-circle"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
