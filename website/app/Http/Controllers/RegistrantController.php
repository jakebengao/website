<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    public function create()
    {
        return view('register');
    }

   public function store(Request $request)
{
    Registrant::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone
    ]);

    return redirect('/')->with('success', 'Registration Successful!');
}

    public function index()
    {
        $users = Registrant::all();
        return view('list', compact('users'));
    }
}