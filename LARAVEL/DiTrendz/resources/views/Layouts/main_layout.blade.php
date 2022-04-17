<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DiTrendz-.....@yield('title')</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">    
  <div class="row mt-5">
    <div class="col-md-4">
        <ul class="list-group">
    
            <a class="list-group-item" href="/">Home Page </a>  
            <a class="list-group-item" href="/About">About Us </a>  
            <a class="list-group-item" href="/Contact">Contact Us </a> 
            <hr>
            </ul>
             
    </div>
    <div class="col-md-8 border left">
          
<h2>@yield('heading')</h2>

@yield('Content')  
    </div>  
</div> 



<hr>

<p> (C), 2022 DiTrendz </p>

</body>
</html>