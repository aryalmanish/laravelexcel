<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\FormsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class FormExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new FormsExport, 'formexport.xlsx');
    }
}
