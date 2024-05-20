<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    function index(){

        $animals = Animal::all();

        return $animals;
    }

    function store(Request $request){
        
        $animal = new Animal();

        $animal->species = $request->species;
        $animal->scientific_name = $request->scientific_name;
        $animal->limit_age = $request->limit_age;
        $animal->description = $request->description;

        $animal->save();

        return response()->json(['message' => 'Registro creado exitosamente', 'registro' => $animal], 201);
    }

    function update(Request $request, Animal $animal){

        $animal->species = $request->species;
        $animal->scientific_name = $request->scientific_name;
        $animal->limit_age = $request->limit_age;
        $animal->description = $request->description;

        $animal->save();

        return response()->json(['message' => 'Registro actualizado correctamente', 'registro' => $animal]);
    }

    function destroy(Animal $animal){
        $animal->delete();

        return response()->json(['message' => 'Registro eliminado']);
    }
}
