@extends('contacts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New contacts</h2>
        </div>
        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
        </div>
    </div>

   
  

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf 
  
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"> 
                <strong>Full Name:</strong>
                <input type="text" name="name" class="form-control" id="name" required aria-required="true" placeholder="Enter name" >
                
            </div>
        </div>
       
      <div class="field">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''}}">
                <strong>Contact Number:</strong>
                <input class="form-control" required="required" name="contact_number" type="number" id="contact_number" placeholder="Enter Contact Number">
                 {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
          </div>
        </div>
     </div>
            
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection