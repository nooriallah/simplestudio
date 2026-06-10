<?php

namespace App\Livewire\Backend;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.app")]
class Setting extends Component
{

    public $site_name = "";
    public $site_email = "";
    public $site_phone = "";
    public $site_whatsapp = "";
    public $logo = "";
    public $favicon = "";
    public $instagram = "";
    public $youtueb = "";
    public $behance = "";
    public $dribble = "";
    public $linkedin = "";
    public $meta_title = "";
    public $meta_description = "";
    public $meta_keywords = "";
    public $adress = "";
    public $footer_text = "";


    



    public function render()
    {
        return view('livewire.backend.setting');
    }
}
