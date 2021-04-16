<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Contact;

class ContactsController extends Controller
{
    public function index() { 
        
        $phonebook = Contact::all();

            return view('contacts.index',[

                         'contacts' => $phonebook
                   
                  

        ]);
    }
}
