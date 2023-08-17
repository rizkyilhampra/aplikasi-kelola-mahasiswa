<?php

namespace App\Exports;

use App\Models\AnggotaUKM;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnggotaUkmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AnggotaUKM::all();
    }
}
