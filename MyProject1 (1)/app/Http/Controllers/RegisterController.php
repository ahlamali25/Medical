<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {

        return view('register.index');
    }
    protected function register(Request $request)
    {

        // do validation
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'last_name'=>['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', "unique:users"],
            'password' => ['required', 'min:5', "confirmed"],
        ]);
        //  $user = $this->createUser($validatedData);
        $user = User::create($validatedData);

        Auth::login($user);

        return redirect()->route("homes.index");
    }

    public function create(array $data)
{
    

    return User::create([
        'name' => $data['name'],
        'last_name'=>$data['last_name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
       
    ]);
}
}
