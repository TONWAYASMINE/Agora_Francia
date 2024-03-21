<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public $First_name;
    public $Last_name;
    public $Email;
    public $Phone;
    public $Comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required'
        ]);
            $contact = new Contact();
            $contact -> first = $this->first;
            $contact -> last = $this->last;
            $contact -> email = $this->email;
            $contact -> phone = $this->phone;
            $contact -> comment = $this->comment;
            session()->flash('message', 'Thanks', 'Your message has been sent successfully!');

    }
    
    public function index()
    {
        return view('contact');
    }
}
