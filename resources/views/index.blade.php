@extends('layouts.layout-vertical.main')
@section('content')
    <div class="page-content" style="min-height: 70vh">
        @auth
            @component('components.alert-heading')
                @slot('type', 'primary')
                @slot('title', 'Welcome Back, ' . $name)
                Bagaimana kabar anda hari ini?
            @endcomponent
        @endauth
        <section class="row">
            <div class="col-12">
                <div class="row">
                    @component('components.card-with-iconly')
                        @slot('col', 'col-12 col-lg-4 col-md-6')
                        @slot('color', 'purple')
                        @slot('title', 'Total Mahasiswa')
                        @slot('number', $mahasiswa)
                        <i class="fas fa-users"></i>
                    @endcomponent
                    @component('components.card-with-iconly')
                        @slot('col', 'col-12 col-lg-4 col-md-6')
                        @slot('color', 'green')
                        @slot('title', 'Total Unit Kegiatan Mahasiswa')
                        @slot('number', $unit_kegiatan_mahasiswa)
                        <i class="fa fa-store"></i>
                    @endcomponent
                    @component('components.card-with-iconly')
                        @slot('col', 'col-12 col-lg-4 col-md-4')
                        @slot('color', 'red')
                        @slot('title', 'Total Anggota UKM')
                        @slot('number', $anggota_ukm)
                        <i class="fas fa-users"></i>
                    @endcomponent
                </div>
            </div>
        </section>
    </div>
@endsection

@push('spesific-css')
    <link rel="stylesheet" href="{{ asset('assets/extension/font-awesome/webfonts/font-awesome.css') }}">
@endpush
