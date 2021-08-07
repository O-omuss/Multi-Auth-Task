<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:client');
    }

    public function showRegisterForm()
    {
        return view('auth.client-register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'number' => ['required', 'max:10'],
            'dob' => ['required'],
            'address' => ['required', 'string'],
            'profile_image' => ['required'],
            'gender' => ['required'],
            'currently' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = rand()."_".$file->getClientOriginalName();
            $destinationPath = 'uploads/data/';
            $status = $file->move($destinationPath, $filename);
            $image = '/uploads/data/'.$filename;
            
        }

        Client::create([
    		'name'=> $request->name,
    		'email'=> $request->email,
    		'number'=> $request->number,
    		'dob'=> $request->dob,
    		'address'=> $request->address,
    		'gender'=> $request->gender,
    		'active_on_social'=> $request->active_on_social ?? 0,
    		'currently'=> $request->currently,
    		'status'=> 0,
    		'profile_image' => $image,
    		'password' => Hash::make($request->password),
    	]);
        

        return redirect()->intended(route('client.dashboard'));
    }
}