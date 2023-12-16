<?php

namespace App\Http\Controllers;

use App\Models\Uusers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UuserController extends Controller
{

    public function showuserdetails() {

        $user_id = Auth::id();

        $userdetails = DB::table('uuser')
            ->select('*')
            ->where('uuser.id','=', $user_id)
            ->get();

        return view('profile._profileinfo')->with('userdetails', $userdetails);

    }

    public function updateprofile(Request $request, $id) {
        $user_id = Auth::id();

        // $profile = Uusers::find($user_id);
        // $profile = UuserController::find($user_id);
        $profile = Uusers::find($user_id);
        $profile->name = $request->input('updatename');
        $profile->email = $request->input('updateemail');
        $profile->contact = $request->input('updatecontact');
        $profile->current_address = $request->input('updateaddress');
        $profile->update();

        return redirect()->back()->with('sucess', 'Profile updated!');
     }


}
