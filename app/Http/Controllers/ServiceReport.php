<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceReport extends Controller
{
    public function showService()
    {
        return view('serviceReport.service_fire');
    }

    public function showEmergency()
    {
        return view('serviceReport.emergency');
    }
}
