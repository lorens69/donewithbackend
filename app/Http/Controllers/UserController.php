<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function showuserdetails() {

        $user_id = Auth::id();

        $userdetails = DB::table('users')
            ->select('*')
            ->where('users.id','=', $user_id)
            ->get();

        return view('profile._profileinfo')->with('userdetails', $userdetails);

    }

    public function updateprofile(Request $request, $id) {
        $user_id = Auth::id();

        $profile = user::find($user_id);
        $profile->name = $request->input('updatename');
        $profile->email = $request->input('updateemail');
        $profile->contact = $request->input('updatecontact');
        $profile->current_address = $request->input('updateaddress');
        $profile->update();
        // Set a flag in the session to indicate success
        session()->flash('profileUpdated', true);
        return redirect('/userdetails');
     }


}
