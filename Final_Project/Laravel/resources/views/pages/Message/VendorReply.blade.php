<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <form action="{{route('VendorReply')}}" class="form-group" method="post"> 
        {{csrf_field()}}
        <label for="">Sender Name</label>
        <input type="text" name="SenderName" value="{{$vendor->Name}}" class="form-control" readonly> 
        <br>
        <label for="">Send To</label>
        <input type="text" name="Name" value="Admin" class="form-control" readonly> 
        <br>
        <label for="">Message</label><br>
        <textarea name="Conversation" id="" cols="149" rows="5"></textarea>
        <br><br>
        <input type="submit" value="Send Message" class="btn btn-outline-primary">
    </form> 
    @endsection  
</body>
</html>