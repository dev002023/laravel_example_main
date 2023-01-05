<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
      
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>


    <div class="container mt-5">
        <form action="{{url('/')}}/register" method="post">

            @csrf
            @php
            $demo = 1;    
            @endphp

            <x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
            <x-input type="text" name="email" label="Please enter your email" />
            <x-input type="password" name="password" label="Please enter your password"  />
            <x-input type="password" name="password_confirmation" label="Please enter your Conform password"  />
           
        
            <div class="row mt-2">
                <div class="col">
                    <input type="submit" name="submit" class="btn btn-success" >
                </div>
            </div>
        </form>
    </div>
        
     
    </body>
</html>