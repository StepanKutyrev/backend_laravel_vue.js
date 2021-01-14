<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(Request $request)
    {
      //$users = Phonebook::all();
        $users = Person::orderby('name')->paginate(10);
      return view ('home' , compact ('users'));

    }


    public function search(Request $request)
    {
        $s = $request->s;
        $users = Person::where('name', 'LIKE', "%{$s}%")
        ->orderBy('name')->paginate(100);
        return view('home', compact('users'));
    }

     public function save(Request $request)
    {
        $users = new Person();
        $users->name = $request->name;
         $users->email = $request->email;
         $users->phone = $request->phone;
         $users->age = $request->age;
         $users->created_at = $request->created_at;
         $users->updated_at = $request->updated_at;
         $users->save();


     return redirect()->route('home');

    }


}

