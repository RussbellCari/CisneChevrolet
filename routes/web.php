<?php

use App\Livewire\Admin\AttendanceMain;
use App\Livewire\Admin\ClienteMain;
use App\Livewire\Admin\GroupMain;
use App\Livewire\Admin\MantenimientoMain;
use App\Livewire\Admin\MemberMain;
use App\Livewire\Admin\ProformaMain;
use App\Livewire\Admin\RepuestoMain;
use App\Livewire\Admin\RoleMain;
use App\Livewire\Admin\UserMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\Forms\ProformaForm;
use App\Livewire\ProformaMain as LivewireProformaMain;
use App\Livewire\Web\About;
use App\Livewire\Web\Blog;
use App\Livewire\Web\Contact;
use App\Livewire\Web\Team;
use App\Models\Attendance;
use App\Models\Group;
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
    Route::get('/attendance',AttendanceMain::class)->name('attendance');
    Route::get('/members',MemberMain::class)->name('members');
    Route::get('/groups',GroupMain::class)->name('groups');
    Route::get('/roles',RoleMain::class)->name('role');
    Route::get('/users',UserMain::class)->name('user');
    Route::get('/proformas',ProformaMain::class)->name('proformas');
    Route::get('/mantenimientos',MantenimientoMain::class)->name('mantenimientos');
    Route::get('/clientes',ClienteMain::class)->name('clientes');
    Route::get('/repuestos',RepuestoMain::class)->name('repuestos');






});
