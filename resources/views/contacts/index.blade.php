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

<table class="table table-striped ">
    <tr>
        <th width="5%">ID</th>
        <th scope="col"width="12%" >Image</th>
        <th scope="col">Full Name</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Action</th>
    </tr>

    @foreach ($contacts as $row)
    @if(isset(Auth::user()->id) && Auth::user()->id == $row->user_id)
    <tr>
        <td>{{ $row->id }}</td>
        <td><img src="images/{{ $row->image_path }}"class=rounded>
            <style>
                body {
                    
                } 
                img {
                    width:108px;
                    height:70px;
                    object-fit: cover;
                }
            </style> 
        </td>
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

   