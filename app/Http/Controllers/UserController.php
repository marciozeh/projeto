<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(UserRquest $request){

        $userData = $request->all();

        $request->validate();

        $user = new User();
        $user->create($userData);
    }

    public function show($id)
    {

        $users = User::findOrFail($id);

        return $users;
    }
}
