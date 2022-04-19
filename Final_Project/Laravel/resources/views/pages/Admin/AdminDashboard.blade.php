@extends('layouts.app')
@section('content')
@if(Session::get('user')) {{Session::get('user')}} 
        <h3>Welcome to The Dashboard</h3>
    @endif 
@endsection