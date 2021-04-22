@extends('contacts.layout')
 @include('contacts.header')
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CONTACTS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New contact</a>
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
            <th>ID</th>
            <th>Full Name</th>
            <th>Contact Number</th>
            <th width="160px">Action</th>
        </tr>
        @foreach ($contacts as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->contact_number }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$row->id) }}" method="POST">     
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