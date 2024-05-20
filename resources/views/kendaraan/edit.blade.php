@extends('layout.app')

@section('content')
<div class="bg-white border border-4 rounded-lg shadow-xl relative m-10 overflow-hidden">

    <div class="flex items-start justify-between p-5 bg-green-500 rounded-t">
        <h3 class="text-xl font-semibold text-white">
            Edit Kendaraan
        </h3>
        <a href="{{ route('kendaraan.index') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
        </a>
    </div>

    <div class="p-6 space-y-6">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="no_pol" class="text-sm font-medium text-gray-900 block mb-2">Nomor Polisi</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="no_mesin" class="text-sm font-medium text-gray-900 block mb-2">Nomor Mesin</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" required>
                </div>
                <div class="col-span-6">
                    <label for="jenis_mobil" class="text-sm font-medium text-gray-900 block mb-2">Jenis Mobil</label>
                    <select name="jenis_mobil" id="jenis_mobil" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5" required>
                        <option value="" disabled selected>Pilih Jenis Mobil</option>
                        <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                        <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City</option>
                        <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                    </select>
                </div>
                <div class="col-span-6">
                    <label for="nama_mobil" class="text-sm font-medium text-gray-900 block mb-2">Nama Mobil</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-green-600 block w-full p-2.5" id="nama_mobil" name="nama_mobil" value="{{ $kendaraan->nama_mobil }}" required>
                </div>
                <div class="col-span-6">
                    <label for="merek" class="text-sm font-medium text-gray-900 block mb-2">Merek</label>
                    <select name="merek" id="merek" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" required>
                        <option value="" disabled selected>Pilih Merek</option>
                        <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                        <option value="toyota" {{ $kendaraan->merek == 'toyota' ? 'selected' : '' }}>Toyota</option>
                        <option value="daihatsu" {{ $kendaraan->merek == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                    </select>
                </div>
                <div class="col-span-6">
                    <label for="kapasitas" class="text-sm font-medium text-gray-900 block mb-2">Kapasitas</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" id="kapasitas" name="kapasitas" value="{{ $kendaraan->kapasitas }}" required>
                </div>
            </div>

            <div class="flex justify-start mt-6">
                <button class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md transition duration-300 ease-in-out" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
