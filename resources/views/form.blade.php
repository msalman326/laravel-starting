<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <form action="{{url('/')}}/form" method="post">
        @csrf


       


        <div class="container">


            <h1 class="text-center">Registration form </h1>


            <x-input type="text" name="name" label="Please enter Your Name" />
            <x-input type="email" name="email" label="Please enter Your Email" />
            <x-input type="password" name="password" label="Please enter Your Password" />
            <x-input type="password" name="confirm-password" label="Please Confirm your Password" />

           
            



            <button class="btn btn-primary">
                Submit
            </button>



        </div>

    </form>


</body>

</html>
