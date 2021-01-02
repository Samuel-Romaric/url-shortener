<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    /**
     * Display a about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.annexe.about');
    }

    /**
     * Display the differents services on service page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('pages.annexe.services');
    }

    /**
     * Display a location and form contact page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        return view('pages.annexe.contact');
    }

    /**
     * Send a mail at admin and redirect to home page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function send_msg(ContactFormRequest $request)
    {
        $mailable = new ContactMessage($request->name, $request->email, $request->subject, $request->msg);

        Mail::to('admin@shorten.com')->send($mailable);

        flash(sprintf("Message bien envoyé. Nous vous repondrons dans les plus brèf délais!"));

        return redirect()->route('home');
    }
}
