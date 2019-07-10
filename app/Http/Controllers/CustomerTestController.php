<?php

namespace App\Http\Controllers;

use App\Model\CustomerEmail;
use App\Model\CustomerPhoneNumber;
use App\Model\CustomerModel;
use App\Model\CustomersUser;
use Illuminate\Http\Request;


class CustomerTestController extends Controller
{

    public function saveCustomer(Request $request)
    {

        $users = [];

        foreach (json_decode($request->users) as $item) {
            array_push($users, $item);
        }
        for ($i = 0; $i < count($users); $i++) {
            $userDetails = json_decode($users[$i], true);
            $replaceDetails = str_replace("\\", "", $userDetails);
            $customer = new CustomerModel();
            $customer->phoneId = $request['id'];
            $customer->save();
            $customerUser = new CustomersUser();
            $customerUser->fk_customer_id = $customer->id;
            $customerUser->user_name = $replaceDetails['name'];
            $customerUser->user_company = $replaceDetails['company'];
            $customerUser->user_job_title = $replaceDetails['job_title'];
            $customerUser->save();
            foreach ($replaceDetails['numbers'] as $nb) {
                if (!$this->checkPhoneNumber($nb)) {
                    $customerPhone = new CustomerPhoneNumber();
                    $customerPhone->user_id = $customerUser->id;
                    $customerPhone->phoneNumber = $nb;
                    $customerPhone->save();
                }
            }
            foreach ($replaceDetails['emails'] as $nb) {
                if (!$this->checkEmail($nb)) {
                    $customerPhone = new CustomerEmail();
                    $customerPhone->user_id = $customerUser->id;
                    $customerPhone->email = $nb;
                    $customerPhone->save();
                }
            }

        }
        return response()->json('thank You',200);

    }

    public function checkPhoneNumber($number)
    {
        $number = CustomerPhoneNumber::where('phoneNumber', $number)->first();
        return $number;
    }

    public function checkEmail($email)
    {
        $email = CustomerEmail::where('email', $email)->first();
        return $email;
    }

    public function checkDeviceId($id)
    {
        $deviceId = CustomerModel::where('phoneId', $id)->first();
        return $deviceId;
    }

}
