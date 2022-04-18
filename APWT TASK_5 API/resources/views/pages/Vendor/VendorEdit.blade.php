<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vendor Form</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <form action="{{route('VendorEdit')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Name</label>
        <input type="text" name="Name" value="{{$vendor->Name}}" class="form-control">
        <br>
        <label for="">ID</label>
        <input type="text" name="id" value="{{$vendor->id}}" class="form-control" readonly>
        <br>
        <label for="">Company Name</label>
        <input type="text" name="CompanyName" value="{{$vendor->CompanyName}}" class="form-control">
        <br>
        <label for="">Phone</label>
        <input type="text" name="Phone" value="{{$vendor->Phone}}" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="text" name="Email" value="{{$vendor->Email}}" class="form-control">
        <br>
        <label for="">Address</label>
        <input type="text" name="Address" value="{{$vendor->Address}}" class="form-control">
        <br>
        <input type="submit" value="Edit Vendor" class="btn btn-outline-primary">
    </form> 
    @endsection  
</body>
</html>