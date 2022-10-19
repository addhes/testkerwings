<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportPenjualanController extends Controller
{
    public function index()
    {
        return view('admin.report_penjualan.index');
    }

    public function create()
    {
        return view('admin.report_penjualan.form');
    }
    
}
