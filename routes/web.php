<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan a través del RouteServiceProvider y todas ellas serán
| asignadas al grupo de middleware "web".
|
*/

Route::get('/', function () {
    return view('inicio');
});

// Rutas de posts, utilizando resource que ya incluye las rutas necesarias
Route::resource('posts', PostController::class)->middleware(['auth']);

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas estáticas de otras páginas
Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/equipo', function () {
    return view('equipo');
})->name('equipo');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/morecarac', function () {
    return view('morecarac');
})->name('morecarac');

Route::get('/Faqs', function () {
    return view('Faqs');
})->name('Faqs');

Route::get('/polites', function () {
    return view('polites');
})->name('polites');

Route::get('/app', function () {
    return view('app');
})->name('app');

require __DIR__.'/auth.php';

