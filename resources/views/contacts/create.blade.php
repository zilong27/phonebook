@extends('contacts.layout')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center">
            <h2>Add New contacts</h2>
            <style>
                h2 {
                  text-align: center;
                }
                </style>
        </div>
    </div>
</div>


   
  

<form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data"> 
@csrf 

<form>
    <div class="form-group row">
      <label for="inputname" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">
             <strong>Name:</strong>
                <input type="text" name="name" class="form-control" user_id="name" required aria-required="true" placeholder="Enter name" >
         </div>
      </div>
    </div>
  
  
          
    <div class="form-group row">
      <label for="inputname" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">
            <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''}}"></div>
                <strong>Contact Number:</strong>
                <input class="form-control" required="required" name="contact_number" type="number" user_id="contact_number" placeholder="Enter Contact Number">
                 {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
        </div>
      </div>
    </div>
    
    
    
    <div class="form-group row">
      <label for="image" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">
       <input type="file" name="image"/>
      </form>



    
    
    <div class="p-2 mb-5">
        <div class="text-center">
           <button type="submit" class="btn btn-primary">Submit</button>
             <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
       </div>
    </div>

  
  
  

          
    

        
</form>

@include('contacts.footer')
@endsection