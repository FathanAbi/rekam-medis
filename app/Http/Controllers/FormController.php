<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rekam;

class FormController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        
        return view('form-medis', ['dokters' => $dokters, 'pasiens' => $pasiens]);
    }

    public function store(Request $request)
    {
       //dd($request);
       $request->validate([
            'dokter' => 'required',
            'pasien' => 'required',
            'kondisi' => 'required|string',
            'suhu'=> 'required|numeric|between:35.0,45.5',
            'resep' => 'required|image|mimes:pdf,png,jpg,jpeg',
        ]);

        //dd($request);
        $imagePath = $request->file('resep')->store('uploads', 'public');

        Rekam::create([
            'dokterID' => $request->input('dokter'),
            'pasienID' => $request->input('pasien'),
            'kondisi' => $request->input('kondisi'),
            'suhu' => $request->input('suhu'),
            'dokterID' => $request->input('dokter'),
            'image_path' => $imagePath,
        ]);

        $success = 1;

        

        if ($success) {
            return redirect('/form-medis')->with('success', 'Sukses mengupload data medis.');
        } else {
            return redirect('/form-medis')->with('failed', 'Failed to store form data.');
        }

        
    }
}
