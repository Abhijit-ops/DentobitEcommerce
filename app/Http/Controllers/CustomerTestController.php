<?php

namespace App\Http\Controllers;

use App\Model\CustomerDetailsModel;
use App\Model\CustomerModel;
use Illuminate\Http\Request;

class CustomerTestController extends Controller
{
    public function saveCustomer(Request $request){
        $customer = CustomerModel::where('phoneId',$request->id)->first();
        if(!$customer){
            $customer = new CustomerModel();
            $customer->phoneId = $request->id;
            $customer->save();
        }
        return $this->saveDetails($request->toArray());
    }
    public function saveDetails(array $data){

        foreach (json_decode($data['phone_number']) as $number){
            $customerDetails = new CustomerDetailsModel();
            $customerDetails->phoneId = $data['id'];
            $customerDetails->phoneNumber=$number;
            $customerDetails->save();
        }
        return response()->json('wow');
    }
}
