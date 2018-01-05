<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\hitung;

class CountController extends Controller
{
    public function index() {
        $data = hitung::all();
        return $data;
    }
}
