<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        
      
    </head>
    <body>
        <div class="container">
        <h1>Edit Contact</h1>
        <div class="row">
     
            <div class="col-sm-6 col-sm-offset-3">
            <form action="{{action('ContactController@update')}}" method="post">
                {{ csrf_field() }}
            <input  class="form-control" type="text" name="id" value="{{$data->id}}" hidden>
            <label for="firstname">First Name</label>
            <input class="form-control" name="firstname" value="{{$data -> contact_first_name}}" type="text">
            <br>
            <label for="lastname">Last Name</label>
            <input class="form-control" name="lastname" value="{{$data -> contact_last_name}}" type="text">
            <br>
            <label for="phone">Phone</label>
            <input class="form-control" name="phone" value="{{$data -> contact_phone}}" type="text">
            <br>
            <label for="email">Email</label>
            <input class="form-control" name="email" value="{{$data -> contact_email}}" type="email">
            <br>
            <label for="city">City</label>
            <input class="form-control" name="city"  value="{{$data -> contact_city}}" type="text">
            <br>
            <input class="form-control" type="submit" value="Save">
            
        </form>
        </div>
        </div>
        </div>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
