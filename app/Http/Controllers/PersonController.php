<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required'
        ]);
        $person = Person::create($request->all());
        return new PersonResource($person);

    }

    public function update(Person $person, Request $request): PersonResource
    {
        $person->update($request->all());
        return new PersonResource($person);

    }

    public function destroy(Person $person, Request $request)
    {
        $person->delete();
        return response()->json(null, 204);
    }
}
