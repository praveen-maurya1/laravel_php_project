<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Swastik_users;

class UserController extends Controller
{
    public function index()
    {
        $users = Swastik_users::latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function destroy($id)
    {
        Swastik_users::findOrFail($id)->delete();
        return back()->with('success', 'User deleted');
    }
}
