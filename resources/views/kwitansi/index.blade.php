@extends('layout.app')

@section('content')

<div class="container mx-auto px-4 mt-8">
    <h1 class="text-2xl font-bold mb-4">Detail Kwitansi</h1>
    <div class="mb-4 flex justify-end">
        <a href="{{ route('kwitansi.create') }}" class="flex items-center justify-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Buat Kwitansi Baru
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach ($kwitanis as $kwitansi)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6 bg-green-500 text-white">
                <h3 class="text-lg leading-6 font-medium">Informasi Kwitansi</h3>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Nomor Kwitansi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $kwitansi->id_kwitansi }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tanggal Transaksi</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $kwitansi->tgl_transaksi }}</dd>
                    </div>
                </dl>
            </div>
            <div class="px-4 py-4 bg-gray-100 text-right flex space-x-4 justify-end">
                <a x-data="{ tooltip: 'Show' }" href="{{ route('kwitansi.show', $kwitansi->id_kwitansi) }}" class="text-gray-500 hover:text-gray-700">
                    <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" x-tooltip="tooltip">
                        <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
                    </svg>
                </a>
                <a x-data="{ tooltip: 'Edit' }" href="{{ route('kwitansi.edit', $kwitansi->id_kwitansi) }}" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                </a>
                <form action="{{ route('kwitansi.destroy', $kwitansi->id_kwitansi) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kwitansi ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" x-data="{ tooltip: 'Delete' }" class="text-gray-500 hover:text-gray-700" x-tooltip="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a1"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
