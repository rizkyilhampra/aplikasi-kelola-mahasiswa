@extends('layouts.layout-vertical.main')
@section('title', 'Tambah Data Anggota UKM')
@section('content')
    @component('components.page-heading')
        @slot('title', 'Tambah Data Anggota UKM')
        @slot('subtitle', 'Halaman tambah data anggota UKM')
        <li class="breadcrumb-item ">
            <a href="{{ route('anggota_ukm.index') }}">Anggota UKM</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Tambah Data Anggota UKM
        </li>
    @endcomponent

    @component('components.form')
        @slot('route', route('anggota_ukm.store'))
        @slot('method', 'POST')
        @component('components.form-group')
            @slot('col', 'col-12')
            @slot('label', 'Nama Mahasiswa')
            @slot('invalidFeedback', $errors->first('mahasiswa_id'))
            @component('components.select-option')
                @slot('name', 'mahasiswa_id')
                @slot('required', true)
                @slot('placeholder', 'Pilih nama mahasiswa')
                @foreach ($mahasiswa as $m)
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            @endcomponent
        @endcomponent
        @component('components.form-group')
            @slot('label', 'Nama UKM')
            @slot('col', 'col-12')
            @slot('invalidFeedback', $errors->first('ukm_id'))
            @component('components.select-option')
                @slot('name', 'ukm_id')
                @slot('required', true)
                @slot('placeholder', 'Pilih nama UKM')
                @foreach ($ukm as $m)
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
