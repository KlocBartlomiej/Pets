<?php

namespace App\Http\Controllers;

class PetsController extends Controller
{
    public function getPet(){   //find pet by ID
        return view('getPet');
    }

    public function postPet(){  //updates a pet in the store with form data
        return view('postPet');
    }

    public function deletePet(){    //deletes a pet
        return view('deletePet');
    }

    public function postPetImage(){ //upload an image
        return view('postPetImage');
    }

    public function postNewPet(){   //add a new pet to the store
        return view('postNewPet');
    }

    public function putPet(){   //update an existing pet
        return view('putPet');
    }

    public function getPetStatus(){ //finds pets by status
        return view('getPetStatus');
    }
}
