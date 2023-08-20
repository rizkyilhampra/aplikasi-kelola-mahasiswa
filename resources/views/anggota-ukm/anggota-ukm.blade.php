@extends('layouts.layout-vertical.main')
@section('title', 'Anggota UKM')

@section('content')
    @component('components.page-heading')
        @slot('title', 'Anggota UKM')
        @slot('subtitle', 'Halaman seluruh data anggota UKM')
        <li class="breadcrumb-item active" aria-current="page">Anggota UKM</li>
    @endcomponent

    @component('components.section-card')
        @slot('cardTitle', 'Data Anggota UKM')
        @include('components.button-create-print-export', [
            'routeTambah' => route('anggota_ukm.create'),
            'routePrint' => route('anggota_ukm.pdf'),
            'routeExport' => route('anggot_ukm.excel'),
        ])
        @component('components.table')
            @slot('column')
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nama UKM</th>
                <th>Aksi</th>
            @endslot
            @foreach ($anggotaUkms as $anggotaUkm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggotaUkm->mahasiswa->NIM }}</td>
                    <td>{{ $anggotaUkm->mahasiswa->name }}</td>
                    <td>{{ $anggotaUkm->ukm->name }}</td>
                    <td>
                        @include('components.edit-delete-action', [
                            'routeEdit' => route('anggota_ukm.edit', [
                                'anggota_ukm' => $anggotaUkm->id,
                            ]),
                            'routeDelete' => route('anggota_ukm.destroy', $anggotaUkm->id),
                        ])
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection

@include('components.sa-warning')
