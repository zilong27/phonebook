@extends('contacts.layout')

@section('content')



<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="push-center">
            <h2>Contact List</h2>
        </div>
    </div>
</div>

@if(Auth::user())
<a class="btn btn-success" href="{{ route('contacts.create') }}">Create Contact</a>
</div>
@endif

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
        <th width="160px"style="text-align:center">Action</th>
    </tr>
    @foreach ($contacts as $row)
    @if(isset(Auth::user()->id) && Auth::user()->id == $row->user_id)
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
    @endif
 
    @endforeach
   
</table>  

        @yield('content')

@include('contacts.footer')


@endsection

   