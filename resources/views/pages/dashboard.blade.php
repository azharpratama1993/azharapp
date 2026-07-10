@extends('layouts.app')
@section('title', 'Dashboard Inventory')
@section('page-title', 'Dashboard Inventory Elektromedis')
@section('content')
<section class="row">
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldActivity"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Alat</h6>
                                <h6 class="font-extrabold mb-0">125</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldTick-Square"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Alat Baik</h6>
                                <h6 class="font-extrabold mb-0">98</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldTime-Circle"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Perlu Kalibrasi</h6>
                                <h6 class="font-extrabold mb-0">17</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldDanger"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Alat Rusak</h6>
                                <h6 class="font-extrabold mb-0">10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ringkasan Inventory Elektromedis</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Dashboard ini digunakan untuk memantau jumlah alat elektromedis, Dashboard ini digunakan untuk memantau jumlah alat elektromedis,
                            kondisi alat, kebutuhan kalibrasi, serta status pemeliharaan alat. kondisi alat, kebutuhan kalibrasi, serta status pemeliharaan alat.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Kode Alat</th>
                                        <th>Nama Alat</th>
                                        <th>Ruangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EM-001</td>
                                        <td>Patient Monitor</td>
                                        <td>ICU</td>
                                        <td>
                                            <span class="badge bg-success">Baik</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EM-002</td>
                                        <td>Infusion Pump</td>
                                        <td>IGD</td>
                                        <td>
                                            <span class="badge bg-warning">Perlu Kalibrasi</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EM-003</td>
                                        <td>Defibrillator</td>
                                        <td>Ruang Operasi</td>
                                        <td>
                                            <span class="badge bg-danger">Rusak</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EM-004</td>
                                        <td>ECG Machine</td>
                                        <td>Poliklinik</td>
                                        <td>
                                            <span class="badge bg-success">Baik</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('template/assets/compiled/jpg/1.jpg') }}" alt="Admin">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">Admin Elektromedis</h5>
                        <h6 class="text-muted mb-0">@inventory</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Status Sistem</h4>
            </div>
            <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                    <div class="stats-icon blue mb-2">
                        <i class="iconly-boldShield-Done"></i>
                    </div>
                    <div class="name ms-4">
                        <h6 class="mb-1">Database</h6>
                        <p class="text-muted mb-0">Aktif</p>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="stats-icon green mb-2">
                        <i class="iconly-boldCalendar"></i>
                    </div>
                    <div class="name ms-4">
                        <h6 class="mb-1">Kalibrasi</h6>
                        <p class="text-muted mb-0">17 alat perlu dicek</p>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="stats-icon red mb-2">
                        <i class="iconly-boldDanger"></i>
                    </div>
                    <div class="name ms-4">
                        <h6 class="mb-1">Kerusakan</h6>
                        <p class="text-muted mb-0">10 alat rusak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
