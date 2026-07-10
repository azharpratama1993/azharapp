@extends('layouts.app')
@section('title', 'Form Tambah Data Baru Alat')
@section('page-title', 'Form Tambah Data Baru Alat Elektromedis')
@section('content')
<div class="p-6 card">

    <form action="{{ route('alat.store') }}" method="POST" class="form form-horizontal">
        @csrf

        <div class="form-body p-4">
            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="nama_alat">Nama Alat</label>
                </div>
                <div class="col-md-8 form-group">
                    <!-- <input type="text" name="nama_alat" class="border w-full p-2"> -->
                    <input type="text" id="nama_alat" name="nama_alat" class="border w-full p-2 form-control">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="tahun_pembelian">Tahun Pembelian</label>
                </div>

                <div class="col-md-8 form-group">
                    <select id="tahun_pembelian" name="tahun_pembelian"
                        class="border w-full p-2 form-control">

                        @for($tahun = date('Y'); $tahun >= 2000; $tahun--)
                        <option value="{{ $tahun }}">
                            {{ $tahun }}
                        </option>
                        @endfor

                    </select>
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="merek">Merek</label>
                </div>

                <div class="col-md-8 form-group">
                    <input type="text" id="merek"
                        name="merek"
                        class="border w-full p-2 form-control">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="tipe">Tipe</label>

                </div>

                <div class="col-md-8 form-group">
                    <input type="text" id="tipe"
                        name="tipe"
                        class="border w-full p-2 form-control">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="no_seri">No Seri</label>
                </div>

                <div class="col-md-8 form-group">
                    <input type="text" id="no_seri"
                        name="no_seri"
                        class="border w-full p-2 form-control">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="kondisi_alat">Kondisi Alat</label>
                </div>

                <div class="col-md-8 form-group">
                    <select name="kondisi_alat" id="kondisi_alat"
                        class="border w-full p-2 form-control">

                        <option value="">-- Pilih Kondisi --</option>

                        <option value="Baik">Baik</option>
                        <option value="Tidak Baik">Tidak Baik</option>

                    </select>
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-4">
                    <label class="col-form-label" for="lokasi">Lokasi</label>

                </div>

                <div class="col-md-8 form-group">
                    <input type="text" id="lokasi"
                        name="lokasi"
                        class="border w-full p-2 form-control">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="form-footer">
                <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded"> -->
                <button class="btn btn-success">
                    Simpan
                </button>
            </div>
        </div>
    </form>

</div>
@endsection
