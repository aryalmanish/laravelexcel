<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmit;
use App\Http\Controllers\FormExportController;
use App\Exports\FormsExport;
use Maatwebsite\Excel\Facades\Excel;

class FormSubmitController extends Controller
{
    public function formSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'number' => 'required|size:10',
            'email' => 'required|email|unique:form_submits,email',
            'nationality' => 'required',
            'dob' => 'required|date',
            'education_background' => 'required',
            'preferred_contact' => 'required',
        ]);

        FormSubmit::Create($validated);
        $message = "Form Successfully Submitted";
        return Excel::download(new FormsExport, 'formexport.xlsx');
        return back()->with('message', $message);

    }

    public function showall()
    {
        $getall = FormSubmit::paginate(5); 
        return view('showall', compact('getall'));
    }
}

