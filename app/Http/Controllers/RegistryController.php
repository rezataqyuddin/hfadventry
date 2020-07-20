<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class RegistryController extends Controller
{
    //
    public function index()
    {
        $regNum = Uuid::uuid1()->getHex();
        return view('patient.new', compact('regNum'));
    }

    public function save(Request $req)
    {
        $data = new Patient();

    }
}
