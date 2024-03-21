<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminCantactController extends Controller
{
    public function render(){
        $contacts = Contact::paginate(12);
        return view('admin.contact.index',['contacts'=>$contacts]);
    }
}

