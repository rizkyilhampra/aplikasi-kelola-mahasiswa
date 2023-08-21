<x-app-layout title="Mahasiswa">
    <x-page-heading title="Data Mahasiswa" subtitle="Halaman seluruh data mahasiswa">
        <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
    </x-page-heading>
    <x-section-card title="Data Mahasiswa">
        <x-button-create-print-export>
            <x-slot name="routeTambah">{{ route('mahasiswa.create') }}</x-slot>
            <x-slot name="routePrint">{{ route('mahasiswa.pdf') }}</x-slot>
            <x-slot name="routeExport">{{ route('mahasiswa.excel') }}</x-slot>
        </x-button-create-print-export>
        <x-table>
            <x-slot name="column">
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </x-slot>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->NIM }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->date_of_birth }}</td>
                    <td>{{ $mahasiswa->address }}</td>
                    <td>
                        <x-edit-delete-action>
                            <x-slot name="routeEdit">{{ route('mahasiswa.edit', $mahasiswa->id) }}</x-slot>
                            <x-slot name="routeDelete">{{ route('mahasiswa.destroy', $mahasiswa->id) }}</x-slot>
                        </x-edit-delete-action>
                    </td>
                </tr>
            @endforeach
        </x-table>
    </x-section-card>
    <x-sa-warning></x-sa-warning>
</x-app-layout>
