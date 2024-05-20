@extends('layout.app')

@section('content')
<div class="min-h-screen- py- flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Detail Kendaraan</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 grid grid-cols-2 gap-4">
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Nomor Polisi</span>
                            <p class="text-gray-900">{{ $kendaraan->no_pol }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Nomor Mesin</span>
                            <p class="text-gray-900">{{ $kendaraan->no_mesin }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Jenis Mobil</span>
                            <p class="text-gray-900">{{ $kendaraan->jenis_mobil }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Nama Mobil</span>
                            <p class="text-gray-900">{{ $kendaraan->nama_mobil }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Merek</span>
                            <p class="text-gray-900">{{ $kendaraan->merek }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Kapasitas</span>
                            <p class="text-gray-900">{{ $kendaraan->kapasitas }}</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('kendaraan.index') }}" class="block mt-4 px-4 py-2 bg-green-500 hover:bg-green-600 rounded-md text-white text-center">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
