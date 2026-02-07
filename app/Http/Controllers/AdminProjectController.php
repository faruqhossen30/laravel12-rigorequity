<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'nullable|string',
            'status' => 'nullable|string',
            'units' => 'nullable|string',
            'sf' => 'nullable|string',
            'location' => 'nullable|string',
            'completion_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'partners' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $data = $request->except('image', 'partners');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->filled('partners')) {
            $data['partners'] = array_map('trim', explode(',', $request->partners));
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'nullable|string',
            'status' => 'nullable|string',
            'units' => 'nullable|string',
            'sf' => 'nullable|string',
            'location' => 'nullable|string',
            'completion_date' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'partners' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $data = $request->except('image', 'partners');

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->filled('partners')) {
            $data['partners'] = array_map('trim', explode(',', $request->partners));
        } else {
            $data['partners'] = [];
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
