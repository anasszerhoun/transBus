<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\busController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\voyageController;


Route::get('/home', function () {
    return view('index');
});
// Route::get('/DestList', function () {
//     return view('ListeDestination');
// });

// Route::get('/destination',function(){
//     return view('destination');
// });

// Route::post('/ajout', [voyageController::class, "afficheMessage"]);
// Route::get('DestList', [voyageController::class, "afficheDestination"]);
// Route::get('reservation',[voyageController::class,"reservation"]);
// Route::get('/AjoutReservation',[voyageController::class,"AjoutReservation"])->name('AjoutReservation');




Route::get('/',[AcceuilController::class,"index"])->name('index');

Route::post('/destination',[VoyageController::class,"afficheMessage"])->name('destination');
Route::get('/reservation/{id}',[AcceuilController::class,"reservation"])->name('reservation');
Route::post('/AjoutReservation/{id}',[AcceuilController::class,"AjoutReservation"])->name('AjoutReservation');
//ajouter une route messagerie
Route::get('/messagerie',[AcceuilController::class,"messagerie"])->name('messagerie');
//ajouter une route propos
Route::get('/propos',[AcceuilController::class,"propos"])->name('propos');
Route::get('/Destinations',[AcceuilController::class,"afficheDestination"])->name('destinations');
Route::get('/ajout',[AcceuilController::class,"miseAjour"])->name('ajout');


Route::get('/menu', MenuController::class.'@dashboard')->name('dashboard');
Route::get('/buses/index', BusController::class.'@index')->name('buses.index');
Route::post('/buses/create', BusController::class .'@create')->name('buses.create');
Route::post('/buses/edit/{immatriculation}', BusController::class.'@update')->name('buses.update');
Route::delete('/buses/delete/{immatriculation}', BusController::class.'@destroy')->name('buses.destroy');
Route::get('/live_search/action', 'BusController@action')->name('buses.action');
?>
