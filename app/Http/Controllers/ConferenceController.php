<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', ['conferences' => $conferences]);
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        Conference::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'address' => $request->address,
        ]);

        return redirect()->route('home')->with('success', 'Conference created successfully!');
    }

    public function show(Conference $conference)
    {
        return view('conferences.show', ['conference' => $conference]);
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', ['conference' => $conference]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        $conference = Conference::find($id);
        $conference->update($validatedData);

        return redirect()->route('home', $conference->id)->with('success', 'Conference updated successfully');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('home')->with('success', 'Conference deleted successfully!');
    }
}
