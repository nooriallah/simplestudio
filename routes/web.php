<?php

use App\Livewire\Frontend\Projects;
use App\Livewire\Frontend\Services;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', \App\Livewire\Frontend\HomePage::class)->name('home');
Route::get("/projects", Projects::class)->name("projects");
Route::get("/services", Services::class)->name("services");