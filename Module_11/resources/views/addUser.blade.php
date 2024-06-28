<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Add user</h1>
                <a class="btn btn-info mb-3" href="{{route('student')}}" >{{__('Back')}}</a>

                <form action="{{ route('adduser') }}" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="userName" placeholder="Enter name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="userEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="city" placeholder="Enter City">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
