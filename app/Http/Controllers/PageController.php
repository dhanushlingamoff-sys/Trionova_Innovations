<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApiMail;


class PageController extends Controller
{


  public function sendGreeting(Request $request)
    {

        $name    = $request->input('cname');
        $email    = $request->input('cemail');
        $mobile   = $request->input('cnumber');
        $referral = $request->input('popup_referral');
        $message  = $request->input('cmessage');
        $validated =[
            'name' => $name,
            'email' =>$email,
            'mobile' => $mobile,
            'referral' =>$referral,
            'message' => $message,
        ];

        Mail::to('rajeshkumar@trionova.in')
         ->send(new ApiMail($validated));

       return redirect('/thank-you');
    }
}
