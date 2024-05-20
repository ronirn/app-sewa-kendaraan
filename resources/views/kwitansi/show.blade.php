@extends('layout.app')

@section('content')
<div class="min-h-screen py-8 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Detail Kwitansi</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 grid grid-cols-2 gap-4">
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Nomor Kwitansi</span>
                            <p class="text-gray-900">{{ $kwitansi->id_kwitansi }}</p>
                        </div>
                        <div class="relative">
                            <span class="text-gray-600 text-sm">Tanggal Transaksi</span>
                            <p class="text-gray-900">{{ $kwitansi->tgl_transaksi }}</p>
                        </div>

                    </div>
                </div>
                <a href="{{ route('kwitansi.index') }}" class="block mt-4 px-4 py-2 bg-green-500 hover:bg-gray-600 rounded-md text-white text-center">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
