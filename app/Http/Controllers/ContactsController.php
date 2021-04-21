<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Contact;
use Response;

class ContactsController extends Controller
{
    public function index() { 
        
        $phonebook = Contact::all();

            return view('contacts.index',[

                         'contacts' => $phonebook
                   
                  

        ]);
    } 
    public function create() { 
        
        return view('contacts.create');

    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required',
        ]);
    
        phonebook::create($request->all());
     
        return redirect()->route('contacts.index')
                         ->with('success','successfully created .');
    }
  
    public function show() {
        
       


    }
    public function edit(Contact $contacts){

        return view('contacts.edit',[

            'contacts' => $contacts
            
            ]);
 
    }
    public function update(Request $request, contact $contact){
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required',
        ]);
    
        $contacts>update($request->all());
    
        return redirect()->route('contacts.index')
                        ->with('success','successfully updated');
    

    }
    public function destroy($id){
        
        $contacts->delete();
    
        return redirect()->route('contacts.index')
                        ->with('success','successfully deleted ');


    }

   
    
    

    
}


    

