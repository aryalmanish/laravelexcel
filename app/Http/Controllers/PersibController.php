<?php

// PersibController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persib;

class PersibController extends Controller
{
    public function index()
    {
        $shows = Persib::all();

        return view('list', compact('shows'));
    }
    public function create()
    {

    }

    public function store()
    {
        
    }
}