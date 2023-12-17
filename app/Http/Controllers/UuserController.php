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

    // Validate the updated email
    $request->validate([
        'updateemail' => [
            'required',
            'email',
            'unique:uusers,email,' . $user_id,
            'regex:/^[a-zA-Z0-9._%+-]+@(student\.\.org|\.org)$/',
        ],
    ], [
        'updateemail.required' => 'Email is required.',
        'updateemail.email' => 'Please enter a valid email address.',
        'updateemail.unique' => 'This email address is already in use. Please choose a different one.',
        'updateemail.regex' => 'Invalid email format. Please use a valid email address.',
    ]);

    // Update the profile
    $profile->name = $request->input('updatename');
    $profile->email = $request->input('updateemail');
    $profile->contact = $request->input('updatecontact');
    $profile->current_address = $request->input('updateaddress');
    $profile->update();

    return redirect()->back()->with('success', 'Profile updated!');
}

    


}
