<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Swastik_users;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\False_;
use phpDocumentor\Reflection\Types\True_;

class UserController extends Controller
{
    public function viewContact()
    {
        return view('contact');
    }
    public function addUser(Request $req)
    {

        if ($req->has('submitUserForm')) {
            $swastikUser = new Swastik_users();
            $username = $req->username;
            $mobilenumber = $req->mobilenumber;
            $email = $req->email;
            $address = $req->address;

            $swastikUser->user_name = $username;
            $swastikUser->user_email = $email;
            $swastikUser->user_moblieNumber = $mobilenumber;
            $swastikUser->user_address = $address;

            $swastikUser->save();
            return redirect('/contact')->with('success', true);
        }
    }

    // public function index()
    // {
    //     $users = Swastik_users::latest()->get();
    //     return view('admin.users.index', compact('users'));
    // }

    // public function destroy($id)
    // {
    //     Swastik_users::findOrFail($id)->delete();

    //     return back()->with('success', 'User deleted successfully');
    // }
}
