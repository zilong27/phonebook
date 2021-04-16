<!DOCTYPE html>
<html>
  <head>
     <title>View Records</title>
       </head>
          <body>
             <h1 align="center">Records</h1>
             <div class= "row">
             <div class ="col-md-12">
             <table class="table table-bordered">
            
         <thead>
         <tr>
          <th>Id</th>
          <th>Full Name</th>
          <th>Contact Number</th>

         </tr>

@foreach ($contacts  as $row)
   <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->contact_number }}</td>

    </tr>
@endforeach

            </thead>
        </table>
      </div>
    </div>
  </body>
</html>