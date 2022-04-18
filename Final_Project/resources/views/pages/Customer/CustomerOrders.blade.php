<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Customer Order</title>
</head>
<body>
    @extends('layouts.app') 
    @section('content')
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Payment_Status</th>

        </tr>
        @foreach($order as $s)
        <tr>
            <td>{{$s->Name}}</td>
            <td>{{$s->Phone}}</td>
            <td>{{$s->Email}}</td>
            <td>{{$s->Address}}</td>
            <td>{{$s->Product}}</td>
            <td>{{$s->Quantity}}</td>
            <td>{{$s->Payment_Status}}</td>
        </tr>
        @endforeach
    </table>
    @endsection  
</body>
</html>