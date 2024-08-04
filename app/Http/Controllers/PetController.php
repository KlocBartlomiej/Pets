<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\form;

class PetController extends Controller
{

    //forms:
    public function getPetForm(){
        return view('getPet');
    }

    public function postPetForm(){
        return view('postPet');
    }

    public function deletePetForm(){
        return view('deletePet');
    }

    public function postPetImageForm(){
        return view('postPetImage');
    }

    public function postNewPetForm(){
        return view('postNewPet');
    }

    public function putPetForm(){
        return view('putPet');
    }

    public function getPetStatusForm(){
        return view('getPetStatus');
    }

    //external api calls:
    public function getPet(){//find pet by ID
        return redirect()->route('home')->with('success', 'Pet was found.');
    }

    public function postPet(){//updates a pet in the store with form data
        return redirect()->route('home')->with('success', 'Pet was updated.');
    }

    public function deletePet(){//deletes a pet
        return redirect()->route('home')->with('success', 'Pet was deleted.');
    }

    public function postPetImage(){//upload an image
        return redirect()->route('home')->with('success', 'Image was uploaded.');
    }

    public function postNewPet(){//add a new pet to the store
        return redirect()->route('home')->with('success', 'Pet was added.');
    }

    public function putPet(){//update an existing pet
        return redirect()->route('home')->with('success', 'Pet was updated.');
    }

    public function getPetStatus(){//finds pets by status
        return redirect()->route('home')->with('success', 'Pets were found.');
    }
}
