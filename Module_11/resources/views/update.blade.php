<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Update User</h1>
                <a class="btn btn-info mb-3" href="{{route('student')}}" >{{__('Back')}}</a>
                <form action="{{route('updatedata', $data->id)}}" method="POST">
                @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="{{$data->name}}" name="userName" placeholder="Enter name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" value="{{$data->email}}" name="userEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" value="{{$data->age}}" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" value="{{$data->city}}" name="city" placeholder="Enter City">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
</body>

</html>
