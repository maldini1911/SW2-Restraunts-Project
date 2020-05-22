<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
<<<<<<< HEAD
=======
    public function __construct()
    {
        $this->middleware('auth');
    }
>>>>>>> Make-Reservation-Method---Asmaa-Mahmoud
    //user function to make the authorized user show his profile details 
    public function viewDetails(){
        $user = auth()->user();
        return view('user.showProfile' , compact('user'));
    }

    //user function to make the authorized user access edit profile page 
    public function editDetails(){
        $user = auth()->user();
        return view('user.EditProfile' , compact('user'));
    }

    //user function to make the authorized user update his profile details 
    public function updateDetails(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required' ,
            'phone' => 'required' ,
        ]);
        $user = auth()->user();
        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->save();
        return redirect('/user/showProfile.blade.php')->with('status','Your Account is Updated');
    }
<<<<<<< HEAD
=======
    
>>>>>>> Make-Reservation-Method---Asmaa-Mahmoud
}
