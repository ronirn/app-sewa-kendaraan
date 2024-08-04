@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Add Rental</h2>
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rental Form</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('sewa.store') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>Vehicle Number:</strong></label>
                            <select name="no_pol" class="form-control" id="no_pol">
                                <option value="">Select Vehicle Number</option>
                                @foreach ($kendaraans as $kendaraan)
                                    <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="id_penyewa" class="form-label"><strong>Renter Name:</strong></label>
                            <select name="id_penyewa" class="form-control" id="id_penyewa">
                                <option value="">Select Renter Name</option>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id_penyewa }}">{{ $penyewa->nama_penyewa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="id_kwitansi" class="form-label"><strong>Receipt ID:</strong></label>
                            <select name="id_kwitansi" class="form-control" id="id_kwitansi">
                                <option value="">Select Receipt ID</option>
                                @foreach ($kwitansis as $kwitansi)
                                    <option value="{{ $kwitansi->id_kwitansi }}">{{ $kwitansi->id_kwitansi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="tgl_sewa" class="form-label"><strong>Rental Date:</strong></label>
                            <input type="date" name="tgl_sewa" class="form-control" id="tgl_sewa" placeholder="Rental Date">
                        </div>

                        <div class="col-12">
                            <label for="tgl_selesai" class="form-label"><strong>Return Date:</strong></label>
                            <input type="date" name="tgl_selesai" class="form-control" id="tgl_selesai" placeholder="Return Date">
                        </div>

                        <div class="col-12">
                            <label for="tlp_tujuan" class="form-label"><strong>Destination Phone:</strong></label>
                            <input type="text" name="tlp_tujuan" class="form-control" id="tlp_tujuan" placeholder="Destination Phone">
                        </div>

                        <div class="col-12">
                            <label for="alamat_tujuan" class="form-label"><strong>Destination Address:</strong></label>
                            <textarea name="alamat_tujuan" class="form-control" id="alamat_tujuan" placeholder="Destination Address"></textarea>
                        </div>

                        <div class="col-12">
                            <label for="biaya_sewa" class="form-label"><strong>Rental Fee:</strong></label>
                            <input type="number" name="biaya_sewa" class="form-control" id="biaya_sewa" placeholder="Rental Fee">
                        </div>

                        <div class="col-12">
                            <label for="kota" class="form-label"><strong>City:</strong></label>
                            <input type="text" name="kota" class="form-control" id="kota" placeholder="City">
                        </div>

                        <div class="col-12">
                            <label for="jumlah_penumpang" class="form-label"><strong>Number of Passengers:</strong></label>
                            <input type="number" name="jumlah_penumpang" class="form-control" id="jumlah_penumpang" placeholder="Number of Passengers">
                        </div>

                        <div class="text-center mt-3">
                        <a class="btn btn-primary" href="{{ route('sewa.index') }}">
                <i class="bi bi-arrow-left-circle"></i> Back
            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-secondary">
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
