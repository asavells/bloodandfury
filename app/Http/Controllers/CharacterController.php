<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Character;

class CharacterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function create()
    {
        $class_types = config('character.class_types');
        $raid_assignments = config('character.raid_assignments');
        return view('character/create', ['class_types' => $class_types, 'raid_assignments' => $raid_assignments]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'level' => 'required|digits_between:1,60',
            'is_main' => 'required'
        ]);

        $data = $request->all();

        $user = Auth::user();
        $data['user_id'] = $user->id;
        $data['is_main'] = (isset($request['is_main'])) ? 1 : 0;
        
        Character::create($data);
    }

    public function show($id)
    {
        $character = Character::findOrFail($id);
        return $character;
    }

    public function edit($id)
    {
        $character = Character::findOrFail($id);
        return;
    }

    public function update($id)
    {
        return ;
    }

    public function delete($id)
    {
        return;
    }
}
