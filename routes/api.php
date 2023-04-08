<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\ProjectController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//questa rotta è protetta da sanctum, quindi se non si è autenticati non si può accedere
//quindi se si vuole accedere a questa rotta bisogna prima fare il login
//Sanctum è un pacchetto che permette di fare il login e la registrazione
//e di proteggere le rotte
//Request $request è una classe che permette di fare richieste http
//quindi se si vuole fare una richiesta http bisogna importare la classe Request
//e poi passarla come parametro alla funzione

Route::name("api.")->group(function () {
    Route::get('/pages', [PageController::class, 'index'])->name(".pages");


    Route::resource("projects", ProjectController::class)->only(["index", "show"]);
    //quando si fa una richiesta get alla rotta /projects
    //si fa una richiesta alla funzione index del controller ProjectController
    //e si fa una richiesta alla funzione show del controller ProjectController
    //quindi si fa una richiesta alla funzione index e alla funzione show
    //della classe ProjectController


});

