@extends('contacts.layout')
@include('contacts.header')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit contacts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
  
    <form action="{{ route('contacts.update',$row->id) }}" method="POST">
        @csrf
        @method('PUT')
     
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="name" value="{{ $row->name }}" class="form-control" id="name" required aria-required="true" placeholder="Full Name">
                </div>
            </div>
            
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''}}">
                    <strong>Contact Number:</strong>
                    <input class="form-control" required="required" name="contact_number" value="{{$row->contact_number  }}" type="number" id="contact_number">
                 {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    @include('contacts.footer')
@endsection
