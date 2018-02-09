<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Result</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
    </head>
    <body>
 
        <h1>New Contact</h1>
        
       <table border="1">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>City</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               
              
                @foreach($model as $data)
                    <tr>    
                      <td>{{$data->contact_first_name}}</td>
                      <td>{{$data->contact_last_name}}</td>
                      <td>{{$data->contact_phone}}</td>
                      <td>{{$data->contact_email}}</td>
                      <td>{{$data->contact_city}}</td>     
                      <td>
                          <form action="{{ route('edit', $data -> id)}}" method="get">
                                {{csrf_field()}}
                              <input type="submit" value="EDIT"/>
                          </form>
                      </td>
                      <td>
                          <form action="{{ route('delete', $data -> id)}}" method="post">
                                {{csrf_field()}}
                              <input type="submit" value="DELETE"/>
                          </form>
                      </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>

        


    </body>
</html>


