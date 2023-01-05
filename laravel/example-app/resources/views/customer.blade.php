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
        <style>
            form label {
                font-size: 12px;
                color: rgba(0,0,0, .525);
                margin-bottom: 4px;
            }
        </style>
    </head>
    <body>


    <div class="container p-5">
        <h5> Customer Register Form</h5>

        <form action="{{url('/')}}/customer" method="post" class="p-5 border rounded">
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