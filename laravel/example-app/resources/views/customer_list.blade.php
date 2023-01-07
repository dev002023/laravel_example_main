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
          table td:nth-child(2){
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


       <div class="container p-4">
        <a href="{{route('customer.create')}}" class="btn btn-primary" style="float: right;margin: 0px 50px 10px 0px" ><i class="fa-solid fa-plus"></i> Add</a>
        {{-- <pre>
            {{print_r($customers)}}
        </pre> --}}
          <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($customers as $customer)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if($customer->gender == 'M')
                        Male
                        @elseif($customer->gender == 'F')
                        Female
                        @else
                        Other
                        @endif
                        </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->starte}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status == 1)
                        <span class="badge bg-success">Active </span>
                        @else
                        <span class="badge bg-danger">Inactive </span>   
                        @endif
                    </td>
                    <td>
                      <a href="{{url('customer/delete')}}/{{$customer->customer_id}}"class="btn btn-danger">Delete</a>
                      <a href="{{url('customer/delete')}}/{{$customer->customer_id}}"class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>