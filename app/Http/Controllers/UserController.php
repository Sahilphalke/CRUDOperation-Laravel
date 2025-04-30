<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function userdata(Request $request)
    {
        $user = new Users();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $result = $user->save();
        if ($result) {
            return redirect('/form')->with('success', 'User created successfully!');
        } else {
            return redirect('/form')->with('error', 'Failed to create user!');
        }

    }

    function userlist(Request $request)
    {
        $users = Users::all();
        return view('userlist', ['users' => $users]);

    }

    function userdelete(Request $request, $id)
    {
        $user = Users::destroy($id);
        if ($user) {
            return redirect('/list')->with('successDelete', 'User deleted successfully!');
        } else {
            return redirect('/list')->with('errordelete', 'User not found!');
        }
    }

    function userfind(Request $request, $id)
    {
        $user = Users::find($id);
        return view('userupdate', ['user' => $user]);

    }

    function userupdate(Request $request, $id)
    {
        $user = Users::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $result = $user->save();
        if ($result) {
            return redirect()->route('userfind', ['id' => $id])
                ->with('updatemessage', 'User Updated successfully!');

        } else {
            return redirect()->route('userfind', ['id' => $id])
                ->with('updateerror', 'Failed to Update User!');
        }
    }
}
