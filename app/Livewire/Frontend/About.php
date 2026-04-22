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

    public $title = "Why Simple";
    public $subtitle = "Expertise of our co-founders";
    public $description = "Led By Experienced Co-Founders With Master's Degrees And 8+ Years Of Experience In Design And Visual Communication.";
    
    public $features = [
        [
            'title' => 'Modern and creative services',
            'icon' => '🎨'
        ],
        [
            'title' => 'Timeless design solutions',
            'icon' => '⏰'
        ],
        [
            'title' => 'A diverse and Skilled team',
            'icon' => '👥'
        ],
        [
            'title' => 'Outcome-focused capacity building programs',
            'icon' => '📈'
        ],
        [
            'title' => 'Leading creative agencies partners globally',
            'icon' => '🌍'
        ]
    ];
    public function render()
    {
        return view('livewire.frontend.about');
    }
}
