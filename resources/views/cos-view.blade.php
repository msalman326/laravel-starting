<!doctype html>
<html lang="en">
  <head>
    
    
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          @if (session()->has('username'))
          {{ session()->get('username')}}
          @else
          Guest

              
          @endif
        </a>
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
            
            <form action="">
             
              
              <div class="form-inline pr-4  ">
                <a href="{{url('coustomer/view')}}">
                <button  type="button" class="btn btn-primary">Reset</button>
              </a>
                <a href="">
                  <button class=" btn  btn-sm m-2   btn-success" type="submit">SEARCH</button>
                </a>
               
                <input type="search" name="search" id="" value="{{$search}}" class="form-control   " placeholder="Search By Name/Email" >
              </div>
            </form>

            <a href="{{url('/coustomer')}}">
                <button class="btn btn-dark btn-sm m-2" type="submit">Add</button>
              </a>
              <a href="{{url('/coustomer/trash')}}">
                <button class="btn  btn-sm m-2  btn-danger" type="submit">Go to Trash</button>
              </a>
        </div>
    </nav>
      <div class="container">
<table class="table">


    
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Status</th>
            <th>State</th>
            <th>Country</th>
            <th>Dob</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coustomer as $item)
        <tr>
            <td >{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                @if($item->Gender == "M")
                Male
                @elseif($item->Gender =="F")
                Female
                @else
                Other
                @endif
            </td>
            <td>
                @if($item->status == "1")
                <span class="badge badge-success">
                Active
            </span>
                @else
                <span class="badge badge-danger">
                Inactive
            </span>
                @endif

            </td>
            <td>{{$item->state}}</td>
            <td>{{$item->country}}</td>
            <td>{{$item->dob}}</td>
            <td>
                <a href="{{route('coustomer.delete',['id' => $item->coustomer_id])}}"><button class="btn btn-danger">Move to trash</button></a>
               <a href="{{route('coustomer.edit',['id' => $item->coustomer_id])}}"> <button class="btn btn-primary">Edit</button></a>
            </td>
        </tr>

        @endforeach
       
        
    </tbody>
  </table>
  {{-- <div class="row">
    {{$coustomer->links()}}
    </div> --}}
  
</div>
</body>
</html>