<?php

namespace App\Http\Controllers;

use App\Models\Oilor;
use Illuminate\Http\Request;

class OilorController extends Controller
{

    public function show(Oilor $oi)
    {
        return view('ideas.show', [
            'oilor' => $oi,
        ]);
    }

    public function store()
    {

        request()->validate([
            'idea' => ['required', 'min:3', 'max:240']
        ]);

        $idea = Oilor::create([
            'oi' => request()->get('idea', ''),
        ]);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Idea created successfully!');
    }

    public function destroy(Oilor $oi)
    {
        $oi->delete();
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }
}
