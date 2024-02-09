<?php

namespace App\Exports;

use App\Models\FormSubmit;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
          return FormSubmit::all();
//        return FormSubmit::select('name', 'address', 'email', 'number', 'nationality', 'dob', 'gender', 'education_background', 'preferred_contact');
    }
}
