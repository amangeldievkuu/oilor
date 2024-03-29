<?php

namespace App\Http\Controllers;

use App\Models\Oilor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard',
            [
                'oilors' => Oilor::orderBy('created_at', 'desc')->paginate(5)
            ]
        );
    }
}
