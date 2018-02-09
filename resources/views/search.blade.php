<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       
    </head>
    <body>
 
        <h1>Search Contacts</h1>
        
     

        
        <form action="{{route('searchResult')}}" method="post">
                {{ csrf_field() }}
           
         
            <input name="search_value" value="" type="text">
            <br>
            <input type="submit" value="Search">
        </form>
    


    </body>
</html>
