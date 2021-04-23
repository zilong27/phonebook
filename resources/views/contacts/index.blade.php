@extends('contacts.layout')
 @include('contacts.header')
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="push-center">
                <h2>CONTACTS</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
       <div class="alert alert-success">
          <p>{{ $message }}</p>
       </div>
    @endif
   
   
    <table class="table table-bordered">
        <tr>
            <th width="5%">ID</th>
            <th style="text-align:center">Full Name</th>
            <th style="text-align:center">Contact Number</th>
            <th width="250px"style="text-align:center">Action</th>
        </tr>
        @foreach ($contacts as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->contact_number }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$row->id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('contacts.create') }}">Add New</a>     
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$row->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
     
        @endforeach
       
    </table>  
    
@include('contacts.footer')
    
 
@endsection