<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Projects extends Component
{
    // Make a list of projects in the form of an array to show them in the projects page
    public $projects = [];

    public function mount()
    {
        $this->projects = config('simple-data.projects');
    }

    // making a function to show the single project page
    public function show(string $slug)
    {
        // Find the project by slug
        $project = collect($this->projects)->firstWhere('slug', $slug);

        // If project not found, you can redirect or show a 404 page
        if (!$project) {
            abort(404);
        }

        // Pass the project data to the view
        return view('livewire.frontend.show', ['project' => $project]);
    }

    public function render()
    {
        return view('livewire.frontend.projects-page');
    }
}
