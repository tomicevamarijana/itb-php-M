<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App; //dodato sa slajda 4 prez 7


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//dodato, jer nam lokalizacija treba i pre nego sto je korisnik logovan
//van grupe i middleware
//definise se promenljiva parametar {locale}, koja je niz ciji su clanoci en ili sr
//ruta:hocu dva linka koja ce get metodom pozivati jednu od dve rute
//string $locale je promenljiva, i mora biti ista kao parametar
//30.06. u 18:30h
Route::get('/lang/{locale}', function (string $locale)
{
    App::setLocale($locale);
    session(['locale' => $locale]); //prosledjuje se putem sesije
    

    return redirect()->back(); //vracamo na prethodnu str, ne treba negde dalje
})->whereIn('locale', ['en', 'sr'])->name('lang');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false
    ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
