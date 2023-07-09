<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileContorller extends Controller
{
    public function changePassword(){

        return view('changePassword');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
    public function editProfile(){

        return view('editProfile');
    }

    public function updateProfile(Request $request,User $user){
        $user = Auth::user();

        if ($user) {
            $user->name = $request->input('name');
            $user->save();

            return redirect()->back()->with('success', 'Name changed successfully.');
        }

        return redirect()->back()->with('error', 'Unable to update name.');
    }

}
