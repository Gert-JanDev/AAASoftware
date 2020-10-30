<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Mail\ContactFormMail;
use App\Http\Controllers\Mail\ConfirmQuoteMail;
use App\Subscription;



class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function message()
    {
        $data = request()->validate([
            'company' => '',
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => '',
            'email' => 'required',
            'info' => 'required',
        ]);

        //send mail
        Mail::to('infodesk@aaasoftware.nl')->send(new ContactFormMail($data));
        

        //send confirm mail
        Mail::to($data['email'])->send(new ConfirmQuoteMail($data));

        return redirect()->back();
    }

    public function newsletter()
    {
        $data = request()->validate([
            'email' => 'required|unique:subscriptions|email',
        ]);

        return Subscription::create([
            'email' => $data['email'],
        ]);
        return redirect()->back();
    }
}
