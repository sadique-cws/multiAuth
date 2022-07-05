<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class,"index"])->name("homepage");
Route::match(["post","get"],'/patient-login', [PublicController::class,"patientLogin"])->name("patientLogin");
Route::match(["post","get"],'/doctor-login', [PublicController::class,"doctorLogin"])->name("doctorLogin");
Route::match(["post","get"],'/patient-signup', [PublicController::class,"patientSignup"])->name("patientSignup");
Route::match(["post","get"],'/doctor-signup', [PublicController::class,"doctorSignup"])->name("doctorSignup");

Route::middleware("auth:doctor")->group(function () {
    Route::get("doctor/dashboard",[PublicController::class,"doctorDashboard"])->name("doctor.index");
    Route::get("doctor/logout",[PublicController::class,"doctorLogout"])->name("doctor.logout");
});

Route::middleware("auth:patient")->group(function () {
    Route::get("patient/dashboard",[PublicController::class,"patientDashboard"])->name("patient.index");
    Route::get("patient/logout",[PublicController::class,"patientLogout"])->name("patient.logout");
});


