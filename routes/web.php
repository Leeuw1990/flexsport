<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SchemaController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "home"]);

Route::get("register", [RegisterController::class, "create"])->middleware("guest");

Route::post("register", [RegisterController::class, "store"])->middleware("guest");

Route::post("sessions", [SessionsController::class, "store"])->middleware("guest");

Route::post("logout", [SessionsController::class, "destroy"])->middleware("auth");

Route::get("login", [SessionsController::class, "create"])->middleware("guest");

Route::get("schema", [SchemaController::class, "schema"]);

Route::post("schema", [SchemaController::class, "create"]);

Route::post("your/{id}", [SchemaController::class, "delete"]);

Route::get("your", [SchemaController::class, "your"]);

Route::get("getworkout/{id}", [SchemaController::class, "getById"]);

Route::get("/updateworkout/{id}", [SchemaController::class, "update"]);






