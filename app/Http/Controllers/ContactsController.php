<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Contact;
use Response;

class ContactsController extends Controller
{
    public function index() 
    { 
        
        $phonebook = Contact::all();

        return view('contacts.index',[
                    'contacts' => $phonebook
        ]);
    } 

    public function create() 
    { 
        
        return view('contacts.create');

    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'contact_number' => 'required|unique:contacts'
        ]);
    
        Contact::create($request->all());
     
        return redirect()->route('contacts.index')
                         ->with('success','successfully created.');
    }
  
    public function show() {

        return view('contacts.show');
        
       
    }
    public function edit($id){

        $row = Contact::find($id);
        return view('contacts.edit', compact('row'));  
 
    }
    public function update(Request $request ,$id){
        $request->validate([
            'name'=>'required',
            'contact_number'=>'required|unique:contacts',
        
        ]);

        $row = Contact::find($id);
        $row->name =  $request->get('name');
        $row->contact_number = $request->get('contact_number');
        $row->save();
       
        return redirect()->route('contacts.index')
                         ->with('success','successfully Updated!.');

    }
    public function destroy($id){
        
        $contacts = Contact::find($id);
        $contacts->delete();

        return redirect()->route('contacts.index')
                         ->with('success','successfully deleted ');


    }

   
    
    

    
}


    

