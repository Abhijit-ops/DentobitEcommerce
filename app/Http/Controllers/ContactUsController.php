<?php

namespace App\Http\Controllers;

use App\Repository\InterfaceDir\ContactUsInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    private $contactUs;
  public function __construct(ContactUsInterface $contactUs)
  {
      $this->contactUs =$contactUs;
  }
  public function getContactForm(){
      return $this->contactUs->getContactUsForm();
  }
  public function storeContactUsData(Request $request){
      $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required',
          'message' => 'required',
      ]);
        return $this->contactUs->storeContactUsData($request->toArray());
  }
}
