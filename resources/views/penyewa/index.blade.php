@extends('layout.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4 mt-8">Daftar Penyewa</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 flex justify-end">
    <a href="{{ route('penyewa.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
        Tambah Penyewa
    </a>
</div>




    <table class="table-auto border-collapse w-full">
    <thead class="bg-green-500">
            <tr>
            <th class="border px-4 py-2 text-white">ID Penyewa</th>
        <th class="border px-4 py-2 text-white">Nama Penyewa</th>
        <th class="border px-4 py-2 text-white">Alamat</th>
        <th class="border px-4 py-2 text-white">No HP</th>
        <th class="border px-4 py-2 text-white">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyewas as $penyewa)
                <tr>
                    <td class="border px-4 py-2">{{ $penyewa->id_penyewa }}</td>
                    <td class="border px-4 py-2">{{ $penyewa->nama_penyewa }}</td>
                    <td class="border px-4 py-2">{{ $penyewa->alamat }}</td>
                    <td class="border px-4 py-2">{{ $penyewa->no_hp }}</td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'View' }" href="{{ route('penyewa.show', $penyewa->id_penyewa) }}" class="text-gray-700 hover:text-green-600">
                                <svg class="h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                </svg>
                            </a>
                            <a x-data="{ tooltip: 'Edit' }" href="{{ route('penyewa.edit', $penyewa->id_penyewa) }}" class="text-gray-700 hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <form action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus penyewa ini?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" x-data="{ tooltip: 'Delete' }" class="flex items-center justify-center text-gray-700 hover:text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.
                                        91-2.164-2
                                        .201a1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2
                                        .201a1">
                                    </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
