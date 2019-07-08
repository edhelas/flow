<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->user()) return redirect()->route('subjects.index');

        return view('welcome', [
            'subjects' => Subject::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
