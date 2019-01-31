<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function new(){
        return view('admin.users.store');
    }

    public function store(Request $request){

        $userData = $request->all();

        dd($userData);
        $request->validate();

        $user = new User();
        $user->create($userData);
    }

    public function edit(User $user){
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id){

        $userData = $request->all();

        $user = User::findOrFail($id);

        $user->update($userData);

        print "editado";


    }

    public function delete($id)
    {

        $user = User::findOrFail($id);
        $user->remove();

        print "delete";

    }
    public function show($id)
    {

        $users = User::findOrFail($id);

        return $users;
    }
}


