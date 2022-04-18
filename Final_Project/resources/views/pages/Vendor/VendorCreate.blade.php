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
    <form action="{{route('VendorCreate')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Name</label>
        <input type="text" name="Name" class="form-control" value="{{old('Name')}}" >
        @if($errors->has('Name'))
        <span>
            <strong>{{$errors->first('Name') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Company Name</label>
        <input type="text" name="CompanyName" class="form-control" value="{{old('CompanyName')}}" >
        @if($errors->has('CompanyName'))
        <span>
            <strong>{{$errors->first('CompanyName') }}</strong>
        </span>
        @endif
        <br>
        <label for="">ID</label>
        <input type="text" name="id" class="form-control" value="{{old('id')}}" >
        @if($errors->has('id'))
        <span>
            <strong>{{$errors->first('id') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Phone</label>
        <input type="text" name="Phone" class="form-control" value="{{old('Phone')}}" >
        @if($errors->has('Phone'))
        <span>
            <strong>{{$errors->first('Phone') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Email</label>
        <input type="text" name="Email" class="form-control" value="{{old('Email')}}" >
        @if($errors->has('Email'))
        <span>
            <strong>{{$errors->first('Email') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Address</label>
        <input type="text" name="Address" class="form-control" value="{{old('Address')}}" >
        @if($errors->has('Address'))
        <span>
            <strong>{{$errors->first('Address') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Add Vendor" class="btn btn-outline-primary">
    </form> 
    @endsection  
</body>
</html>