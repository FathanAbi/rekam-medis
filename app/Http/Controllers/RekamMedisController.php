<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rekam;

class RekamMedisController extends Controller
{
    public function index(){
        $rekams = rekam::all();
        return view('rekam-medis', ['rekams' => $rekams]);
    }
}
