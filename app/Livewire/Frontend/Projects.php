<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Projects extends Component
{

// Make a list of projects in the form of an array to show them in the projects page
    public $projects = [
        [
            'title' => 'Sednes trass 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'image' => 'project1',
            'slug' => 'project-1',
            'size' => 'small__project',
            'backgroundimage' => 'smallpic.png'
        ],
        [
            'title' => 'Project 2',
            'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'project2',
            'slug' => 'project-2',
            'size' => 'big__project',
            'backgroundimage' => 'bigpic.png'
        ],
        // [
        //     'title' => 'Project 3',
        //     'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        //     'image' => 'project3',
        //     'slug' => 'project-3',
        //     'size' => 'small__project',
        //     'backgroundimage' => 'smallpic.png'
        // ],
        // [
        //     'title' => 'Project 4',
        //     'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        //     'image' => 'project4',
        //     'slug' => 'project-4',
        //     'size' => 'big__project',
        //     'backgroundimage' => 'bigpic.png'
        // ],
    ];

// making a function to show the single project page 
    public function show(string $slug)
    {
        // Find the project by slug
        $project = collect($this->projects)->firstWhere('slug', $slug);
        dd  ($project);
        
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
