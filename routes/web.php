<?php

use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Contact;
use App\Livewire\Frontend\HomePage;
use App\Livewire\Frontend\Projects;
use App\Livewire\Frontend\Services;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomePage::class)->name('home');
Route::get("/projects", Projects::class)->name("projects");
Route::get("/projects/{slug}", [Projects::class, 'show'])->name("project.show");
Route::get("/services", Services::class)->name("services");
Route::get("/about", About::class)->name("about");
Route::get("/contact", Contact::class)->name("contact");

