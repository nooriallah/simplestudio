<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class About extends Component
{

    public $counters = [
        ['label' => 'Projects Completed', 'target' => 100],
        ['label' => 'National Clients', 'target' => 70],
        ['label' => 'International Clients', 'target' => 100],
        ['label' => 'Team Members', 'target' => 10],
    ];

    public $features = [
        [
            'title' => 'Modern and creative services',
            'desc' => "Led by experienced co-founders with master\'s degrees and 8+ years of experience in design and visual communication."
        ],
        [
            'title' => 'Timeless design solutions',
            'desc' => "Led by experienced co-founders with master\'s degrees and 8+ years of experience in design and visual communication."
        ],
        [
            'title' => 'A diverse and Skilled team',
            'desc' => "Led by experienced co-founders with master\'s degrees and 8+ years of experience in design and visual communication."
        ],
        [
            'title' => 'Outcome-focused capacity building programs',
            'desc' => "Led by experienced co-founders with master\'s degrees and 8+ years of experience in design and visual communication."
        ],
        [
            'title' => 'Leading creative agencies partners globally',
            'desc' => "Led by experienced co-founders with master\'s degrees and 8+ years of experience in design and visual communication."
        ]
    ];
    public function render()
    {
        return view('livewire.frontend.about');
    }
}
