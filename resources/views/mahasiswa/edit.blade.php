@extends('layouts.layout-vertical.main')
@section('title', 'Ubah Data Mahasiswa')
@section('content')
    @component('components.page-heading')
        @slot('title', 'Ubah Data Mahasiswa')
        @slot('subtitle', 'Halaman ubah data mahasiswa')
        <li class="breadcrumb-item ">
            <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Ubah Data Mahasiswa
        </li>
    @endcomponent

    @component('components.form')
        @slot('route', route('mahasiswa.store'))
        @slot('method', 'POST')
        @component('components.form-group')
            @slot('col', 'col-md-6 col-12')
            @slot('label', 'NIM')
            @slot('invalidFeedback', $errors->first('NIM'))
            @component('components.input')
                @slot('type', 'text')
                @slot('name', 'NIM')
                @slot('value', $mahasiswa->NIM)
                @slot('placeholder', 'Masukkan NIM')
                @slot('required', true)
            @endcomponent
        @endcomponent
        @component('components.form-group')
            @slot('col', 'col-md-6 col-12')
            @slot('label', 'Nama Mahasiswa')
            @slot('invalidFeedback', $errors->first('name'))
            @component('components.input')
                @slot('type', 'text')
                @slot('name', 'name')
                @slot('value', $mahasiswa->name)
                @slot('placeholder', 'Masukkan Nama Mahasiswa')
                @slot('required', true)
            @endcomponent
        @endcomponent
        @component('components.form-group')
            @slot('col', 'col-12')
            @slot('label', 'Tanggal Lahir')
            @slot('invalidFeedback', $errors->first('tgl_lahir'))
            @component('components.input')
                @slot('type', 'date')
                @slot('name', 'date_of_birth')
                @slot('value', $mahasiswa->date_of_birth)
                @slot('placeholder', 'Masukkan Tanggal Lahir')
                @slot('required', true)
            @endcomponent
        @endcomponent
        @component('components.form-group')
            @slot('col', 'col-12')
            @slot('label', 'Alamat')
            @slot('invalidFeedback', $errors->first('alamat'))
            @component('components.textarea')
                @slot('name', 'address')
                @slot('value', $mahasiswa->address)
                @slot('placeholder', 'Masukkan Alamat')
                @slot('required', true)
            @endcomponent
        @endcomponent
    @endcomponent
@endsection
