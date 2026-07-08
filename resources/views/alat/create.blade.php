<x-app-layout>
    <div class="p-6">

        <form action="{{ route('alat.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label>Nama Alat</label>
                <input type="text"
                       name="nama_alat"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Tahun Pembelian</label>
                <select name="tahun_pembelian"
                        class="border w-full p-2">

                    @for($tahun = date('Y'); $tahun >= 2000; $tahun--)
                        <option value="{{ $tahun }}">
                            {{ $tahun }}
                        </option>
                    @endfor

                </select>
            </div>

            <div class="mb-4">
                <label>Merek</label>
                <input type="text"
                       name="merek"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Tipe</label>
                <input type="text"
                       name="tipe"
                       class="border w-full p-2">
            </div>

            <div class="mb-4">
                <label>No Seri</label>
                <input type="text"
                       name="no_seri"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Kondisi Alat</label>
                <select name="kondisi_alat"
                        class="border w-full p-2">

                    <option value="">-- Pilih Kondisi --</option>

                    <option value="Baik">Baik</option>
                    <option value="Tidak Baik">Tidak Baik</option>

                </select>
            </div>
            
            <div class="mb-4">
                <label>Lokasi</label>
                <input type="text"
                       name="lokasi"
                       class="border w-full p-2">
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Simpan
            </button>

        </form>

    </div>
</x-app-layout>