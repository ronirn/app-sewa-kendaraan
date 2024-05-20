@extends('layout.app')

@section('content')
<div class="max-w-md mx-auto border mt-20">
    <form action="{{ route('kwitansi.update', $kwitansi->id_kwitansi) }}" method="POST" class="bg-white shadow-md rounded px-8 py-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tgl_transaksi">Tanggal Transaksi:</label>
            <input type="date" name="tgl_transaksi" id="tgl_transaksi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $kwitansi->tgl_transaksi }}" required>
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('kwitansi.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline inline-block align-baseline">Batal</a>
            <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
        </div>
    </form>
</div>
@endsection
