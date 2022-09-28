<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <header>
        <nav>
            <div class="logo">
                <h1>ExTreemns</h1>
            </div>

            <input type="checkbox" id="click">
            <label for="click" class="menu_btn">

                <i class="fas fa-bars"></i>
            </label>

            <ul class="nav_links">
                <li> <a href="{{url('/')}}">Home</a> </li>
                <li> <a href="{{url('/coustomer')}}">Singup</a> </li>
                <li> <a href="{{url('/coustomer/view')}}">All Users</a> </li>
                <li > <a  href="{{url('/jk')}}">Gallery</a> </li>
            </ul>


        </nav>
    </header>






</body>