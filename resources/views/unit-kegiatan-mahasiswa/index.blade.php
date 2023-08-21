<x-app-layout title="Unit Kegiatan Mahasiswa">
    <x-page-heading title="Data Unit Kegiatan Mahasiswa" subtitle="Halaman data unit kegiatan mahasiswa">
        <li class="breadcrumb-item active" aria-current="page">Unit Kegiatan Mahasiswa</li>
    </x-page-heading>
    <x-section-card title="Data Unit Kegiatan Mahasiswa">
        <x-button-create-print-export>
            <x-slot name="routeTambah">{{ route('unit_kegiatan_mahasiswa.create') }}</x-slot>
            <x-slot name="routePrint">{{ route('unit_kegiatan_mahasiswa.pdf') }}</x-slot>
            <x-slot name="routeExport">{{ route('unit_kegiatan_mahasiswa.excel') }}</x-slot>
        </x-button-create-print-export>
        <x-table>
            <x-slot name="column">
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </x-slot>
            @foreach ($unitKegiatanMahasiswas as $ukm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ukm->name }}</td>
                    <td>{{ $ukm->description }}</td>
                    <td>
                        <x-edit-delete-action>
                            <x-slot name="routeEdit">{{ route('unit_kegiatan_mahasiswa.edit', $ukm->id) }}</x-slot>
                            <x-slot name="routeDelete">{{ route('unit_kegiatan_mahasiswa.destroy', $ukm->id) }}</x-slot>
                        </x-edit-delete-action>
                    </td>
                </tr>
            @endforeach
        </x-table>
    </x-section-card>
    <x-sa-warning></x-sa-warning>
</x-app-layout>
