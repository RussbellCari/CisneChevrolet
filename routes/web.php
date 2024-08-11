<?php

use App\Livewire\Dashboard\Main;
use App\Livewire\Web\About;
use App\Livewire\Web\Blog;
use App\Livewire\Web\Contact;
use App\Livewire\Web\Team;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about',About::class)->name('about');
Route::get('/team',Team::class)->name('team');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/contact',Contact::class)->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',Main::class)->name('dashboard');
});
