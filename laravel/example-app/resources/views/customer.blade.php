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
        <!-- Font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            form label {
                font-size: 12px;
                color: rgba(0,0,0, .525);
                margin-bottom: 4px;
                text-transform: capitalize;
            }
        </style>
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link text-white" href="{{url('/home')}}">Home</a>
            <a class="nav-link text-white" href="{{ url('/customer')}}">Register</a>
            <a class="nav-link text-white" href="{{url('/customer/view')}}">Customer</a>
          </div>
          </div>
        </div>
        </nav>


    <div class="container p-5">
        <h5> Customer Register Form</h5>

        <form action="{{url('/')}}/customer" method="post" class="pt-2">
            @csrf
              
           <div class="row mt-2">
            <div class="col-6">
                <label for="">name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="col-6">
                <label for="">email</label>
              <input type="email" class="form-control" name="email">
            </div>
           </div>

           <div class="row mt-2">
            <div class="col-6">
                <label for="">password</label>
              <input type="text" class="form-control" name="password">
            </div>
            <div class="col-6">
                <label for="">Confirm Password</label>
              <input type="text" class="form-control" name="c_password">
            </div>
           </div>

           <div class="row mt-2">
            <div class="col-6">
                <label for="">country</label>
              <input type="text" class="form-control" name="country">
            </div>
            <div class="col-6">
                <label for="">state</label>
              <input type="text" class="form-control" name="state">
            </div>
           </div>

           <div class="row mt-2">
            <div class="col-12">
                <label for="">address</label>
            <textarea name="address" id="" cols="" rows="" class="form-control"></textarea>
            </div>
           </div>

           <div class="row mt-2">
            <div class="col-6">
                <label for="">Gender</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="M" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                             Male
                            </label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="F" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Female
                            </label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="O" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                              Other
                            </label>
                          </div>
                    </div>
                </div>

                  
            </div>
            <div class="col-6">
                <label for="">Date of Birth</label>
              <input type="date" class="form-control" name="dob">
            </div>
           </div>

           <div class="row mt-3">
            <div class="d-grid">
                <label for=""></label>
                <input type="submit" class="btn btn-success btn-block" value="Submit" name="">
            </div>
           </div>

        </form>
    </div>
        
     
    </body>
</html>