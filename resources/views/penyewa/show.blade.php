@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-3xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-green-300 to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-3xl mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Detail Penyewa</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-2">Nama Penyewa</h2>
                        <p class="text-gray-800">{{ $penyewa->nama_penyewa }}</p>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-2">Alamat</h2>
                        <p class="text-gray-800">{{ $penyewa->alamat }}</p>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-2">No HP</h2>
                        <p class="text-gray-800">{{ $penyewa->no_hp }}</p>
                    </div>
                    <div class="border-t border-gray-200"></div>
                    <div class="p-6 flex justify-center">
                        <a href="{{ route('penyewa.index') }}" class="block w-full max-w-xs mx-auto mt-4 px-4 py-2 bg-green-300 hover:bg-green-400 rounded-md text-white text-center font-semibold shadow-md">Kembali ke Daftar Penyewa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
