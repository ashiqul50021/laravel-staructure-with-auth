<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUsers()
    {
        $data['users'] =  User::where('type',0)->get();
        return view('admin.pages.users.userlist', $data);
    }


    public function createUsers()
    {
        return view('admin.pages.users.create');
    }
}
