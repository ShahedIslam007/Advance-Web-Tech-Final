<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Reset Password Form</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <form action="{{route('ResetPassword')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Name</label>
        <input type="text" name="Name" value="{{$admin->Name}}" class="form-control" readonly>
        <br>
        <label for="">Reset Password</label>
        <input type="text" name="Password" class="form-control">
        <br>
        <input type="submit" value="Reset Password" class="btn btn-outline-primary">
    </form> 
    @endsection  
</body>
</html>