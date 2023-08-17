<?php

namespace App\Exports;

use App\Models\UnitKegiatanMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class UnitKegiatanMahasiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UnitKegiatanMahasiswa::all();
    }
}
