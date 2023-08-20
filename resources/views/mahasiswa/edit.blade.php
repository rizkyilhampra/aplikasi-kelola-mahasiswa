<x-app-layout title="Ubah Data Mahasiswa">
    <x-page-heading title="Ubah Data Mahasiswa" subtitle="Halaman ubah data mahasiswa">
        <li class="breadcrumb-item "><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ubah Data Mahasiswa</li>
    </x-page-heading>
    <x-form route="{{ route('mahasiswa.update') }}" method="POST" overrideMethod="PUT">
        <x-form-group col="col-md-6 col-12" label="NIM" :invalid-feedback="$errors->first('NIM')">
            <x-input type="text" name="NIM" :value="$mahasiswa->NIM" placeholder="Masukkan NIM"
                required="true"></x-input>
        </x-form-group>
        <x-form-group col="col-md-6 col-12" label="Nama Mahasiswa" :invalidFeedback="$errors->first('name')">
            <x-input type="text" name="name" :value="$mahasiswa->name" placeholder="Masukkan Nama Mahasiswa"
                required="true"></x-input>
        </x-form-group>
        <x-form-group label="Tanggal Lahir" :invalidFeedback="$errors->first('date_of_birth')">
            <x-input type="date" name="date_of_birth" :value="$mahasiswa->date_of_birth" placeholder="Masukkan Tanggal Lahir"
                required="true"></x-input>
        </x-form-group>
        <x-form-group label="Alamat" :invalidFeedback="$errors->first('address')">
            <x-textarea name="address" :value="$mahasiswa->address" placeholder="Masukkan Alamat" required="true"></x-textarea>
        </x-form-group>
    </x-form>
</x-app-layout>
