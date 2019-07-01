<?php
namespace App\Repository;
use App\model\contactUsModel;
use App\Repository\InterfaceDir\ContactUsInterface;
use Illuminate\Support\Facades\Validator;

class ContactUsRepository implements ContactUsInterface
{
    public function getContactUsForm()
    {
        return view('contact');
    }

    public function storeContactUsData(array $data)
    {
       $contactUs = new contactUsModel();
       $contactUs->name = $data['name'];
       $contactUs->email = $data['email'];
       $contactUs->subject = $data['subject'];
       $contactUs->message = $data['message'];
       $contactUs->save();
       return redirect()->back()->with('message');

    }
}