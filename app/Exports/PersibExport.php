<?php

namespace App\Exports;

use App\Models\Persib;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersibExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Persib::all();
    }
}
