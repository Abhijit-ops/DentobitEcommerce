<?php
namespace App\Repository;
use App\Model\OrderModel;
use App\Repository\InterfaceDir\UserInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserInterface
{
    public function getUserDatails()
    {
        return User::findOrFail(Auth::user()->id);
    }
    public function userOrder($id)
    {
      $user = OrderModel::where('customer_id',$id)->orderBy('order_id','desc')->paginate(10);
      return $user;
    }
    public function updateProfileForm()
    {
        $user = $this->getUserDatails();
        return view('user.updateProfile')->with('user',$user);
    }

    public function updateProfile(array $data)
    {
        $user = User::findOrFail($data['id']);

        $user->name = $data['name'];
        $user->phone =$data['phone'];
        $user->billing_address =$data['billing_address'];
        $user->post_code =$data['post_code'];
        $user->save();
        return $user;
    }
}