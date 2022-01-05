<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "home"]);

// Kijkt naar de url of die klopt, zo ja? dan wordt de workoutcontroller aangeroepen, Tussen haakjes is de functie die in de controller staat.


Route::get("register", [RegisterController::class, "create"])->middleware("guest");

Route::post("register", [RegisterController::class, "store"])->middleware("guest");

Route::post("sessions", [SessionsController::class, "store"])->middleware("guest");

Route::post("logout", [SessionsController::class, "destroy"])->middleware("auth");

Route::get("login", [SessionsController::class, "create"])->middleware("guest");

Route::get("schema", [SchemaController::class, "schema"]);

Route::get("select/{id}", [SchemaController::class, "select"]);

Route::post("schema", [SchemaController::class, "create"]);

Route::get("exercise/{id}", [SchemaController::class, "getExercise"]);

Route::post("exercise", [SchemaController::class, "create"]);





//Route::get('/workout', function () {
//    return view('workout', [
//        "workouts" => Workout::all()
//    ]);
//});


