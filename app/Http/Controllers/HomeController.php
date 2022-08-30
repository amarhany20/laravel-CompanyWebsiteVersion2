<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* +++++++++++++++++++++++++ English Home Page +++++++++++++++++++++++++ */

    public function index()
    {
        return view('english.index');
    }

    /* ------------------------- English Home Page ------------------------- */

    /* +++++++++++++++++++++++++ English About Page +++++++++++++++++++++++++ */

    public function about()
    {
        return view('english.about');
    }

    /* ------------------------- English About Page ------------------------- */

    /* +++++++++++++++++++++++++ English Contact Page +++++++++++++++++++++++++ */

    public function contact()
    {
        return view('english.contact');
    }

    /* ------------------------- English Contact Page ------------------------- */

    /* +++++++++++++++++++++++++ English All Projects Page +++++++++++++++++++++++++ */

    public function allProjects()
    {
        return view('english.projects.allProjects');
    }

    /* ------------------------- English All Projects Page ------------------------- */

    /* +++++++++++++++++++++++++ English Project Page +++++++++++++++++++++++++ */

    public function project($id)
    {
        return view('english.projects.project');
    }

    /* ------------------------- English Project Details Page ------------------------- */

    /* +++++++++++++++++++++++++ Storing Contact US Info +++++++++++++++++++++++++ */

    public function StoreContactForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);
        // Store data in database
        Contact::create($request->all());
        // Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('ammarhanyezeldin@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message and we will reach you shortly');
    }

    /* ------------------------- Storing Contact US Info ------------------------- */
}
