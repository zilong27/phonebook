<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Contact;
use Response;

class ContactsController extends Controller
{

    public function index(Request $request)
     
    { 
       // $this->middleware('auth',['except'=>['index','show']]);
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
            'contact_number' => 'required|unique:contacts',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
           
        ]);

             $newImageName = time() .'-' . $request->name .'.' . $request->image->extension();  

     
             $request->image->move(public_path('images'), $newImageName);

           
    
        Contact::create([
           'name' => $request->input('name'),
           'contact_number' => $request->input('contact_number'),
           'image_path' => $newImageName,
           'user_id' => auth()->user()->id 
          
        ]);

     
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


    

