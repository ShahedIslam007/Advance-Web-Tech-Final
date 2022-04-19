<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vendor Message Box</title>
</head>
<body>
    @extends('layouts.app') 
    @section('content')
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Inbox</th>
            <th colspan=3>Action</th>
        </tr>
        @foreach($vendors as $s)
        <tr>
            <td>{{$s->SenderName}}</td>
            <td>{{$s->Conversation}}</td>
            <td><a href="/VendorReply/{{$s->Name}}">Reply</a></td>
        </tr>
        @endforeach
    </table>
    @endsection  
</body>
</html>