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
        
        $profile = Uusers::find($user_id);
    
        // Check if the updated email is different from the current email
        if ($request->input('updateemail') !== $profile->email) {
            // If different, check if the email already exists in the database
            $existingEmail = Uusers::where('email', $request->input('updateemail'))->first();
    
            // If email already exists, return with an error message
            if ($existingEmail) {
                return redirect()->back()->with('error', 'Email already exists. Please choose a different email address.');
            }
        }
    
        // Update the profile
        $profile->name = $request->input('updatename');
        $profile->email = $request->input('updateemail');
        $profile->contact = $request->input('updatecontact');
        $profile->current_address = $request->input('updateaddress');
        $profile->update();
    
        return redirect()->back()->with('success', 'Profile updated!');
    }
    


}
