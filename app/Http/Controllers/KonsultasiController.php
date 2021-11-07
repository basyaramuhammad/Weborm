<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.dashboard.konsultasi');
    }

}
