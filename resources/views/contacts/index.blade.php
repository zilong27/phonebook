
<!DOCTYPE html>
  <html lang="en">
     <head>
     <title>View Recods</title>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="description" content="Simple CMS" />
     <meta name="author" content="Sheikh Heera" />
     <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
   
       </head>
          <body>
            @include('contacts.header')

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
</html
          @include('contacts.footer') 