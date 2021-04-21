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
</div>
   

       

   
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Name" class="form-control" placeholder="Enter name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                <input type="number" name="number" class="form-control" placeholder="Enter Contact Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection