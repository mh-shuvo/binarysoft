<?php
use Atova\Eshoper\Foundation\Http\Route;
use App\Http\Controllers\WebController;

Route::get("/",[WebController::class,"index"]);
Route::get("/about-us",[WebController::class,"showAboutUs"]);
Route::get("/services",[WebController::class,"showServices"]);
Route::get("/contact",[WebController::class,"showContact"]);
Route::get("/why-choose-us",[WebController::class,"showWhyChooseUs"]);
Route::get("/testimonial",[WebController::class,"showTestimonial"]);
Route::get("/teams",[WebController::class,"showTeams"]);