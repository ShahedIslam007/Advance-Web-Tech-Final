<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
    <a class="btn btn-primary" href="{{route('CustomerCreate')}}">Create Customer</a>
    <a class="btn btn-primary" href="{{route('CustomerList')}}">Customers List</a>
    <a class="btn btn-primary" href="{{route('VendorCreate')}}">Create Vendor</a>
    <a class="btn btn-primary" href="{{route('VendorList')}}">Vendors List</a>
    <a class="btn btn-primary" href="{{route('VendorMessage')}}">Vendor Messages</a>
    <a class="btn btn-primary" href="{{route('AdminMessage')}}">Admin Messages</a>
    <a class="btn btn-danger" href="{{route('logout')}}">LogOut</a>
</body>
</html>