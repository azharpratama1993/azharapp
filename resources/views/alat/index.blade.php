<x-app-layout>
    <div class="p-6">

        <a href="{{ route('alat.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded">
            Tambah Alat
        </a>

        <table class="table-auto w-full mt-4 border">
            <thead>
                <tr>
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Tahun Pembelian</th>
                    <th class="border p-2">Merk</th>
                    <th class="border p-2">Tipe</th>
                    <th class="border p-2">No Seri</th>
                    <th class="border p-2">Kondisi Alat</th>
                    <th class="border p-2">Lokasi</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($alat as $a)
                <tr>
                    <td class="border p-2">{{ $a->nama_alat }}</td>
                    <td class="border p-2">{{ $a->tahun_pembelian }}</td>
                    <td class="border p-2">{{ $a->merek }}</td>
                    <td class="border p-2">{{ $a->tipe }}</td>
                    <td class="border p-2">{{ $a->no_seri }}</td>
                    <td class="border p-2">{{ $a->kondisi_alat }}</td>
                    <td class="border p-2">{{ $a->lokasi }}</td>

                    <td class="border p-2">

                        <a href="{{ route('alat.edit', $a->id) }}"
                           class="bg-yellow-500 text-white px-2 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('alat.destroy', $a->id) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 text-white px-2 py-1 rounded">
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>