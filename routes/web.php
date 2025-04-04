<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


   Route::get('/', function () {
     return view('#');
   });

 
   


// Route::get('/dashboard', function () {
//   //Ejecución del middleware, antes de devolver o mostrar una vista
//      return view('dashboard');
//      //Tambien se puede ejecutar despues de devolverlo mostrar una vista
//  })->middleware(['auth'])->name('dashboard');

 Route::middleware('auth')->group(function () {
   
    Route::view('/dashboard', 'dashboard')->name('dashboard'); //está es la ruta de arriba comentada pero simplificada

     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
     
   });

 Route::get('/productos', function (){
 return view ('productos');

 })-> name('productos');

 Route::get('/equipo', function (){
  return view ('equipo');
 
  })-> name('equipo');

  Route::get('/nosotros', function (){
    return view ('nosotros');
   
    })-> name('nosotros');

    Route::get('/inicio', function (){
      return view ('inicio');
     
      })-> name('inicio');
  
      

      Route::get('/morecarac', function (){
        return view ('morecarac');
       
        })-> name('morecarac');

        Route::get('/Faqs', function (){
          return view ('Faqs');
         
          })-> name('Faqs');

          Route::get('/polites', function (){
            return view ('polites');
           
            })-> name('polites');
  

  
  
  

require __DIR__.'/auth.php';
