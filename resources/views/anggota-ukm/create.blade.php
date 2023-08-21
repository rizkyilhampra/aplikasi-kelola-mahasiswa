<x-app-layout title="Tambah Data Anggota UKM">
    <x-page-heading title="Tambah Data Anggota UKM" subtitle="Halaman tambah data anggota UKM">
        <li class="breadcrumb-item "><a href="{{ route('anggota_ukm.index') }}">Anggota UKM</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota UKM</li>
    </x-page-heading>
    <x-form :route="route('anggota_ukm.store')" method="POST">
        <x-form-group label="Nama Mahasiswa" :invalidFeedback="$errors->first('mahasiswa_id')">
            <x-select-option name="mahasiswa_id" required="true" placeholder="Pilih nama mahasiswa">
                @foreach ($mahasiswa as $m)
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            </x-select-option>
        </x-form-group>
        <x-form-group label="Nama UKM" :invalidFeedback="$errors->first('ukm_id')">
            <x-select-option name="ukm_id" required="true" placeholder="Pilih nama UKM">
                @foreach ($ukm as $m)
                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                @endforeach
            </x-select-option>
        </x-form-group>
    </x-form>
</x-app-layout>
