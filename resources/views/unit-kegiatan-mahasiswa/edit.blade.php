@extends('layouts.layout-vertical.main')
@section('title', 'Ubah Data Unit Kegiatan Mahasiswa')
@section('content')
    @component('components.page-heading')
        @slot('title', 'Ubah Data Unit Kegiatan Mahasiswa')
        @slot('subtitle', 'Halaman Ubah data Unit Kegiatan Mahasiswa (UKM)')
        <li class="breadcrumb-item ">
            <a href="{{ route('unit_kegiatan_mahasiswa.index') }}">Unit Kegiatan Mahasiswa</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Ubah Data Unit Kegiatan Mahasiswa
        </li>
    @endcomponent

    @component('components.form')
        @slot('route', route('unit_kegiatan_mahasiswa.update', $unitKegiatanMahasiswa->id))
        @slot('method', 'POST')
        @slot('overrideMethod', 'PUT')
        @component('components.form-group')
            @slot('col', 'col-12')
            @slot('label', 'Nama UKM')
            @slot('invalidFeedback', $errors->first('name'))
            @component('components.input')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('value', $unitKegiatanMahasiswa->name)
                @slot('placeholder', 'Masukkan nama UKM')
                @slot('required', true)
            @endcomponent
        @endcomponent
        @component('components.form-group')
            @slot('col', 'col-12')
            @slot('label', 'Deskripsi')
            @slot('invalidFeedback', $errors->first('description'))
            @component('components.textarea')
                @slot('name', 'description')
                @slot('value', $unitKegiatanMahasiswa->description)
                @slot('placeholder', 'Masukkan deskripsi UKM')
                @slot('required', true)
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
