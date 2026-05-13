<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Services extends Component
{

    public $activeTab = 'branding'; // Default active tab

    public $services = [
        'branding' => [
            'title' => 'Branding',
            'description' => 'Build a brand that speaks volumes. From unforgettable logos to cohesive identities and premium packaging, we help you shine in crowded markets.',
            'image' => 'branding-serv',
            'features' => [
                'Brand Strategy',
                'Visual Identity',
                'Brand Guidelines',
                'Branded Experiences',
                'Product Packaging'
            ],
            'slug' => 'branding',
            'caseStudyLink' => '#'
        ],
        'ui-ux' => [
            'title' => 'UI/UX',
            'description' => 'Create intuitive and engaging digital experiences that users love. We design interfaces that are both beautiful and functional.',
            'image' => 'ui-uxserv',
            'features' => [
                'User Research',
                'Wireframing',
                'Prototyping',
                'UI Design',
                'Usability Testing'
            ],
            'slug' => 'ui-ux',
            'caseStudyLink' => '#'
        ],
        'content' => [
            'title' => 'Content',
            'description' => 'Tell your story with compelling content that connects with your audience and drives engagement.',
            'image' => 'contentserv',
            'features' => [
                'Content Strategy',
                'Copywriting',
                'Blog Posts',
                'Video Content',
                'Social Media'
            ],
            'slug' => 'content',
            'caseStudyLink' => '#'
        ],
        'digital-marketing' => [
            'title' => 'Digital marketing',
            'description' => 'Reach your target audience with data-driven marketing strategies that deliver real results.',
            'image' => 'digital-marketserv',
            'features' => [
                'SEO Optimization',
                'Social Media Marketing',
                'Email Campaigns',
                'PPC Advertising',
                'Analytics & Reporting'
            ],
            'slug' => 'digital-marketing',
            'caseStudyLink' => '#'
        ],
        'packaging' => [
            'title' => 'Packaging',
            'description' => 'Make your product stand out on the shelf with stunning packaging design that tells your brand story.',
            'image' => 'packagingserv',
            'features' => [
                'Package Design',
                'Structural Design',
                'Sustainable Solutions',
                'Label Design',
                'Prototyping'
            ],
            'slug' => 'packaging',
            'caseStudyLink' => '#'
        ]
    ];

    public function setActiveTab(string $tab)
    {
        $this->activeTab === $tab ? $this->activeTab = null  : $this->activeTab = $tab; // Set the new active tab
    }
    public function render()
    {
        return view('livewire.frontend.services');
    }
}
