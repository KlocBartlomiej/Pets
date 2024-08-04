<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//get:
Route::get('/getPet', [PetController::class, 'getPetForm']);
Route::get('/postPet', [PetController::class, 'postPetForm']);
Route::get('/deletePet', [PetController::class, 'deletePetForm']);
Route::get('/postPetImage', [PetController::class, 'postPetImageForm']);
Route::get('/postNewPet', [PetController::class, 'postNewPetForm']);
Route::get('/putPet', [PetController::class, 'putPetForm']);
Route::get('/getPetStatus', [PetController::class, 'getPetStatusForm']);

//post:
Route::post('/getPet', [PetController::class, 'getPet'])->name('findByID');   //find pet by ID
Route::post('/postPet', [PetController::class, 'postPet'])->name('updatePet');  //updates a pet in the store with form data
Route::post('/deletePet', [PetController::class, 'deletePet'])->name('deletePet');    //deletes a per
Route::post('/postPetImage', [PetController::class, 'postPetImage'])->name('uploadImage'); //upload an image
Route::post('/postNewPet', [PetController::class, 'postNewPet'])->name('addPet');   //add a new pet to the store
Route::post('/putPet', [PetController::class, 'putPet'])->name('putPet');   //update an existing pet
Route::post('/getPetStatus', [PetController::class, 'getPetStatus'])->name('findByStatus'); //finds pets by status