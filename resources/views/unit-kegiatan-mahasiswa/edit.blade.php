<x-app-layout title="Unit Kegiatan Mahasiswa">
    <x-page-heading title="Ubah Data Unit Kegiatan Mahasiswa"
        subtitle="Halaman ubah data Unit Kegiatan Mahasiswa (UKM)">
        <li class="breadcrumb-item"><a href="{{ route('unit_kegiatan_mahasiswa.index') }}">Unit Kegiatan Mahasiswa</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Ubah Data Unit Kegiatan Mahasiswa</li>
    </x-page-heading>
    <x-form :route="route('unit_kegiatan_mahasiswa.update', $unitKegiatanMahasiswa->id)" method="POST" overrideMethod="PUT">
        <x-form-group col="col-12" label="Nama UKM" :invalid-feedback="$errors->first('name')">
            <x-input type="text" name="name" :value="$unitKegiatanMahasiswa->name" placeholder="Masukkan nama UKM" required />
        </x-form-group>
        <x-form-group col="col-12" label="Deskripsi" :invalid-feedback="$errors->first('description')">
            <x-textarea name="description" :value="$unitKegiatanMahasiswa->description" placeholder="Masukkan deskripsi UKM" required />
        </x-form-group>
    </x-form>
</x-app-layout>
