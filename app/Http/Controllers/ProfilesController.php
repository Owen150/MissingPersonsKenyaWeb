<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cr;


class ProfilesController extends Controller
{
    public function index($user)
    {

        $user = User::findOrFail($user);
  
        $profile = Profile::where('user_id', 'like', $user->id)->first();
        
        
        return view('profiles.index', [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    public function create($user)
    {
        $user = User::findOrFail($user);

        return view('profiles.create')->with('user', $user);
    }


    public function store(Request $request, User $user)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'phone_number' => 'required',
            'description' => 'required'
        ]);


        $profile = new Profile();

        $profile->user_id = $request->user_id;
        $profile->name = $request->name;
        $profile->location = $request->location;
        $profile->phone_number = $request->phone_number;
        $profile->description = $request->description;
        $profile->save();

        return redirect('/profile/' . auth()->user()->id);
    }

    public function edit($user){

        $user = User::findOrFail($user);
        return view('profiles.edit')->with('user', $user);

    }

    public function update(Request $request, User $user){

        $data = request()->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'phone_number' => 'required',
            'description' => 'required'
        ]);

        $user->profile->update($data);
        
        return redirect('/profile/' . auth()->user()->id);    
    }
}
