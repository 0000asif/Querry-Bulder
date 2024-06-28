<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Single Student</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>View Single User</h1>
            
            <div class="col-6">
                <a class="btn btn-info mb-3" href="{{route('student')}}" >{{__('Back')}}</a>

                <table class="table table-bordered table-striped">

                    @foreach ($data as $id => $user)
                        <tr>
                            <td>Id</td>
                            <td>{{ $user->id }}</td>
                        </tr>

                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <td>Age</td>
                            <td>{{ $user->age }}</td>
                        </tr>

                        <tr>
                            <td>City</td>
                            <td>{{ $user->city }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>




















    <!-- Optional JavaScript; choose one of tde two! -->

    <!-- Option 1: Bootstrap Bundle witd Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
