<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'theme' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
        ]);

        Application::create($validatedData);

        return redirect()->route('applications.index')->with('success', 'Заявка успешно создана!');
    }

    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }
}
