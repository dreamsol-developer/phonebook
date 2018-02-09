<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>
            Contacts
        </h1>
        
         <div style="position:absolute; left: 350px;">
            <form action="{{route('searchResult')}}" method="post">
                    {{ csrf_field() }}
                <input name="search_value" value="" type="text">
                <input type="submit" value="Search">
            </form>
         </div>
        
       
        <form action=" {{url('/newcontact')}}" method="get">
                {{csrf_field()}}
              <input type="submit" value="New Contact"/>
        </form>
        <br>
       
        
        
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
