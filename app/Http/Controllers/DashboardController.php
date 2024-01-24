<?php

namespace App\Http\Controllers;

use App\Models\Oilor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        dump(OIlor::all());
        return view(
            'dashboard',
            [
                'oilors' => Oilor::orderBy('created_at', 'desc')->get()
            ]
        );
    }
}
