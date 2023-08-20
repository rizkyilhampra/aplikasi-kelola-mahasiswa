@extends('layouts.layout-vertical.main')
@section('title', 'Unit Kegiatan Mahasiswa')

@section('content')
    @component('components.page-heading')
        @slot('title', 'Data Unit Kegiatan Mahasiswa')
        @slot('subtitle', 'Halaman seluruh data unit kegiatan mahasiswa')
        <li class="breadcrumb-item active" aria-current="page">Unit Kegiatan Mahasiswa</li>
    @endcomponent

    @component('components.section-card')
        @slot('cardTitle', 'Data Unit Kegiatan Mahasiswa')
        @include('components.button-create-print-export', [
            'routeTambah' => route('unit_kegiatan_mahasiswa.create'),
            'routePrint' => route('unit_kegiatan_mahasiswa.pdf'),
            'routeExport' => route('unit_kegiatan_mahasiswa.excel'),
        ])
        @component('components.table')
            @slot('column')
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            @endslot
            @foreach ($unitKegiatanMahasiswas as $ukm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ukm->name }}</td>
                    <td>{{ $ukm->description }}</td>
                    <td>
                        @include('components.edit-delete-action', [
                            'routeEdit' => route('unit_kegiatan_mahasiswa.edit', $ukm->id),
                            'routeDelete' => route('unit_kegiatan_mahasiswa.destroy', $ukm->id),
                        ])
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection

@include('components.sa-warning')
