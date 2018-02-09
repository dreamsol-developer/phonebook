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

        <style>
  
        </style>
    </head>
    <body>
 
       
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <h1>New Contact</h1>
        <form action="{{action('ContactController@create')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
            <label  for="firstname">First Name</label>
            <input class="form-control" name="firstname" value="" type="text">
                </div>
                 <div class="form-group">
            <label for="lastname">Last Name</label>
            <input class="form-control"  name="lastname" value="" type="text">
            </div>
             <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control"  name="phone" value="" type="text">
            </div>
             <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control"  name="email" value="" type="email">
           </div>
             <div class="form-group">
            <label  for="city">City</label>
            <input class="form-control"  name="city"  value="" type="text">
            </div>
             <div class="form-group">
            <input class="form-control"  type="submit" value="Save">
             </div>
           
        </form>
</div>
</div>
</div>

    </body>
</html>
