<x-app-layout title="Anggota UKM">
    <x-page-heading title="Anggota UKM" subtitle="Halaman seluruh data anggota Unit Kegiatan Mahasiswa">
        <li class="breadcrumb-item active" aria-current="page">Anggota UKM</li>
    </x-page-heading>
    <x-section-card title="Data Anggota UKM">
        <x-button-create-print-export>
            <x-slot name="routeTambah">{{ route('anggota_ukm.create') }}</x-slot>
            <x-slot name="routePrint">{{ route('anggota_ukm.pdf') }}</x-slot>
            <x-slot name="routeExport">{{ route('anggot_ukm.excel') }}</x-slot>
        </x-button-create-print-export>
        <x-table>
            <x-slot name="column">
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nama UKM</th>
                <th>Aksi</th>
            </x-slot>
            @foreach ($anggotaUkms as $anggotaUkm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggotaUkm->mahasiswa->NIM }}</td>
                    <td>{{ $anggotaUkm->mahasiswa->name }}</td>
                    <td>{{ $anggotaUkm->ukm->name }}</td>
                    <td>
                        <x-edit-delete-action :routeEdit="route('anggota_ukm.edit', $anggotaUkm->id)" :routeDelete="route('anggota_ukm.destroy', $anggotaUkm->id)"></x-edit-delete-action>
                    </td>
            @endforeach
        </x-table>
    </x-section-card>
    <x-sa-warning></x-sa-warning>
</x-app-layout>
