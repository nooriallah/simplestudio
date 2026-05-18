<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts::frontend')]
class HomePage extends Component
{
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
        [
            'title' => 'Project 3',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'image' => 'project3',
            'slug' => 'project-3',
            'size' => 'small__project',
            'backgroundimage' => 'smallpic.png'
        ],
        [
            'title' => 'Project 4',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'image' => 'project4',
            'slug' => 'project-4',
            'size' => 'big__project',
            'backgroundimage' => 'bigpic.png'
        ],
    ];


    public $services = [
        [
            'title' => 'Branding',
            'description' => 'Build a brand that speaks volumes. From unforgettable logos to cohesive identities and premium packaging, we help you shine in crowded markets.',
            'image' => 'uiux-home.png',
            'caseStudyLink' => '#'
        ],
        [
            'title' => 'UI/UX',
            'description' => 'Create intuitive and engaging digital experiences that users love. We design interfaces that are both beautiful and functional.',
            'image' => 'uiux-home.png',
            'caseStudyLink' => '#'
        ],
        [
            'title' => 'Digital Marketing',
            'description' => 'Tell your story with compelling content that connects with your audience and drives engagement.',
            'image' => 'content-home.png',
            'caseStudyLink' => '#'
        ],
        [
            'title' => 'Packaging',
            'description' => 'Create intuitive and engaging digital experiences that users love. We design interfaces that are both beautiful and functional.',
            'image' => 'uiux-home.png',
            'caseStudyLink' => '#'
        ],
        [
            'title' => 'Content Writing',
            'description' => 'Tell your story with compelling content that connects with your audience and drives engagement.',
            'image' => 'content-home.png',
            'caseStudyLink' => '#'
        ],
    ];

    
    public function render()
    {
        return view('livewire.frontend.home-page', [
            'projects' => $this->projects,
        ]);
    }
}
