<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">User Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/coustomer')}}">Sign-up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('/coustomer/view')}}">All user</a>
              </li>
            </ul>
            <a href="{{url('/coustomer')}}">
                <button class="btn btn-dark btn-sm" type="submit">Add</button>
              </a>
        </div>
    </nav>

    <form action="{{$url}}" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center text-primary">{{$title}} </h1>
        
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="">Name:</label>
                <input class="form-control" type="text" name="name" id="" value="{{$coustomer->name}}" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6">
                <label for="">Email:</label>
                <input class="form-control" type="text" name="email" id="" value="{{$coustomer->email}}" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="">Country:</label>
                <input class="form-control" type="text" name="country" id="" value="{{$coustomer->country}}" value="{{old('country')}}">
                <span class="text-danger">
                    @error('country')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 ">
                <label for="">State:</label>
                <input class="form-control" type="text" name="state" id="" value="{{$coustomer->state}}" value="{{old('state')}}">
                <span class="text-danger">
                    @error('state')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Password:</label>
                <input class="form-control" type="password" name="password" id="">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 ">
                <label for="">Confirm-password:</label>
                <input class="form-control" type="password" name="confirm-password" id="">
                <span class="text-danger">
                    @error('confirm-password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>

        <div class="form-group ">
            <label for="">Address:</label>
            <input class="form-control-lg form-control" type="text" name="address" id="" value="{{$coustomer->address}}" value="{{old('address')}}">
            <span class="text-danger">
                @error('address')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">gender:</label>
                <div>
                    <label for="">Male</label>
                <input  value="M" type="radio" name="gender" id="" 
                {{$coustomer->Gender == "M" ? "checked" : ""}}>
                <label for="">Female</label>
                <input   value="F" type="radio" name="gender" id=""
                {{$coustomer->Gender == "F" ? "checked" : ""}}>
                <label for="">Other</label>
                <input   value="O" type="radio" name="gender" id=""
                {{$coustomer->Gender == "O" ? "checked" : ""}}>
                </div>

            
                <span class="text-danger">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 ">
                <label for="">Date-of-Birth:</label>
                <input class="form-control" type="date" name="dob" id="" value="{{$coustomer->dob}}" value="{{old('dob')}}">
                <span class="text-danger">
                    @error('dob')
                        {{ $message }}
                    @enderror
                </span>
            </div>
        </div>


<button class="form-control btn btn-primary">
                Submit
            </button>

    </div>

    </form>

</body>

</html>
