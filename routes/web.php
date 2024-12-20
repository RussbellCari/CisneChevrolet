<?php

use App\Livewire\Admin\AttendanceMain;
use App\Livewire\Admin\ClienteMain;
use App\Livewire\Admin\ConsultaDisponibilidad;
use App\Livewire\Admin\GroupMain;
use App\Livewire\Admin\MantenimientoAgendaMain;
use App\Livewire\Admin\MantenimientoMain;
use App\Livewire\Admin\MemberMain;
use App\Livewire\Admin\NotaVentaMain;
use App\Livewire\Admin\ProformaMain;
use App\Livewire\Admin\RegistroMantenimientoForm;
use App\Livewire\Admin\RepuestoMain;
use App\Livewire\Admin\ReservaMain;
use App\Livewire\Admin\RoleMain;
use App\Livewire\Admin\UserMain;
use App\Livewire\Admin\VehiculoMain;
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

    Route::get('/users',UserMain::class)->name('user');
    Route::get('/proformas',ProformaMain::class)->name('proformas');
    Route::get('/clientes',ClienteMain::class)->name('clientes');
    Route::get('/repuestos',RepuestoMain::class)->name('repuestos');
    Route::get('/vehiculos',VehiculoMain::class)->name('vehiculos');
    Route::get('/reservas',ReservaMain::class)->name('reservas');
    Route::get('/notasVenta',NotaVentaMain::class)->name('notasVenta');
    Route::get('/mantenimientos',MantenimientoAgendaMain::class)->name('mantenimientos');

    Route::get('/consulta-disponibilidad', ConsultaDisponibilidad::class)->name('consulta-disponibilidad');

    Route::get('/registro-mantenimiento/{selectedDate}/{selectedTime}', RegistroMantenimientoForm::class)->name('registro-mantenimiento');









});
