<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessPodcast;
use App\Mail\SendEmailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function sendmail(){

        $data = array(
            'name'      =>  'rana',
            'message'   =>  'vlo asi'
        );

        Mail::to('ismail32cse@gmail.com')->send(new SendEmailMailable($data));

//        ProcessPodcast::dispatch()
//            ->delay(now()->addSeconds(1));
//        return "send email properly";
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('ismail')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');

    }
}
