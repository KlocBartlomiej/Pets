<?php

use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getPet', [PetsController::class, 'getPet']);   //find pet by ID

Route::get('/postPet', [PetsController::class, 'postPet']);  //updates a pet in the store with form data

Route::get('/deletePet', [PetsController::class, 'deletePet']);    //deletes a per

Route::get('/postPetImage', [PetsController::class, 'postPetImage']); //upload an image

Route::get('/postNewPet', [PetsController::class, 'postNewPet']);   //add a new pet to the store

Route::put('/putPet', [PetsController::class, 'putPet']);   //update an existing pet

Route::get('/getPetStatus', [PetsController::class, 'getPetStatus']); //finds pets by status