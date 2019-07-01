<?php

namespace App\Http\Controllers;

use App\Repository\InterfaceDir\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getDashboard()
    {
        $userDetails = $this->user->getUserDatails();
        return view('user.dashboard')->with('user',$userDetails);
    }

    public function getOrders(){
        $order = $this->user->userOrder(Auth::user()->id);
        return view('user.orders')->with('orders',$order);
    }
    public function updateProfileForm(){
            return $this->user->updateProfileForm();
    }
    public function updateProfile(Request $request){
        $this->user->updateProfile($request->toArray());
        return redirect()->route('user.dashboard')->with('message','Profile Updated');
    }

}
