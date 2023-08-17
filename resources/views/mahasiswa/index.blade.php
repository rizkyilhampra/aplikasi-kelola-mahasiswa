@extends('layouts.layout-vertical.main')
@section('title', 'Mahasiswa')

@section('content')
    @component('components.page-heading')
        @slot('title', 'Data Mahasiswa')
        @slot('subtitle', 'Halaman seluruh data mahasiswa')
        <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
    @endcomponent

    @component('components.section-card')
        @slot('cardTitle', 'Data Mahasiswa')
        @include('components.button-create-print-export', [
            'routeTambah' => route('mahasiswa.create'),
            'routePrint' => route('mahasiswa.pdf'),
            'routeExport' => route('mahasiswa.excel'),
        ])
        @component('components.table')
            @slot('column')
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            @endslot
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->NIM }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->date_of_birth }}</td>
                    <td>{{ $mahasiswa->address }}</td>
                    <td>
                        @include('components.edit-delete-action', [
                            'routeEdit' => route('mahasiswa.edit', $mahasiswa->id),
                            'routeDelete' => route('mahasiswa.destroy', $mahasiswa->id),
                        ])
                    </td>
                </tr>
            @endforeach
        @endcomponent
    @endcomponent
@endsection

@include('components.sa-warning')
