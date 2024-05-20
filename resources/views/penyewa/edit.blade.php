@extends('layout.app')

@section('content')
<div class="bg-white border border-4 rounded-lg shadow-xl relative m-10 overflow-hidden">

    <div class="flex items-start justify-between p-5 bg-green-500 rounded-t">
        <h3 class="text-xl font-semibold text-white">
            Edit Penyewa
        </h3>
        <a href="{{ route('penyewa.index') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
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

        <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="nama_penyewa" class="text-sm font-medium text-gray-900 block mb-2">Nama Penyewa</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="no_hp" class="text-sm font-medium text-gray-900 block mb-2">No HP</label>
                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" id="no_hp" name="no_hp" value="{{ $penyewa->no_hp }}" required>
                </div>
                <div class="col-span-6">
                    <label for="alamat" class="text-sm font-medium text-gray-900 block mb-2">Alamat</label>
                    <textarea class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" id="alamat" name="alamat" rows="3" required>{{ $penyewa->alamat }}</textarea>
                </div>
            </div>

            <div class="flex justify-start mt-6">
                <button class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md transition duration-300 ease-in-out" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
