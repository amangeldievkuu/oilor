<?php

namespace App\Http\Controllers;

use App\Models\Oilor;
use Illuminate\Http\Request;

class OilorController extends Controller
{
    public function store()
    {
        $idea = Oilor::create(
            [
                'oi' => request()->get('idea', '')
            ]
        );

        return redirect()->route('dashboard');
    }
}
