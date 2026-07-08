<x-app-layout>
    <div class="p-6">

        <form action="{{ route('alat.update', $alat->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Nama Alat</label>
                <input type="text"
                       name="nama_alat"
                        value="{{ $alat->nama_alat }}"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Tahun Pembelian</label>
                <select name="tahun_pembelian"
                        class="border w-full p-2">

                    @for($tahun = date('Y'); $tahun >= 2000; $tahun--)

                        <option value="{{ $tahun }}"
                            {{ $alat->tahun_pembelian == $tahun ? 'selected' : '' }} >

                            {{ $tahun }}

                        </option>

                    @endfor


                </select>
            </div>

            <div class="mb-4">
                <label>Merek</label>
                <input type="text"
                       name="merek"
                        value="{{ $alat->merek }}"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Tipe</label>
                <input type="text"
                       name="tipe"
                        value="{{ $alat->tipe }}"
                       class="border w-full p-2">
            </div>

            <div class="mb-4">
                <label>No Seri</label>
                <input type="text"
                       name="no_seri"
                        value="{{ $alat->no_seri }}"
                       class="border w-full p-2">
            </div>
            
            <div class="mb-4">
                <label>Kondisi Alat</label>
                <select name="kondisi_alat"
                        class="border w-full p-2">

                    <option value="Baik"
                        {{ $alat->kondisi_alat == 'Baik' ? 'selected' : '' }}>
                        Baik
                    </option>

                    <option value="Tidak Baik"
                        {{ $alat->kondisi_alat == 'Tidak Baik' ? 'selected' : '' }}>
                        Tidak Baik
                    </option>
                </select>
            </div>
            
            <div class="mb-4">
                <label>Lokasi</label>
                <input type="text"
                       name="lokasi"
                        value="{{ $alat->lokasi }}"
                       class="border w-full p-2">
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>
</x-app-layout>