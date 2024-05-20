@extends('layout.app')

@section('content')
<div class="container mx-auto px-4">
   

    <form action="{{ route('kwitansi.store') }}" method="POST" class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
    <h1 class="text-2xl font-bold mb-8 text-center">Buat Kwitansi Baru</h1>
        @csrf
        <div class="mb-6">
            <label for="tgl_transaksi" class="block text-sm font-medium text-gray-700">Tanggal Transaksi</label>
            <input type="date" name="tgl_transaksi" id="tgl_transaksi" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
            <a href="{{ route('kwitansi.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Batal</a>
        </div>
    </form>
</div>
@endsection
