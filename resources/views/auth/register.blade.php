@extends('layout.master')


@section('content')
@if(session('success'))
@include('messages.success')
@endif
<form action="register" method="POST" class="form-group">
    @csrf
    <input type="text" class="form-control" name="name" id="" value="Arman">
    <input type="email" class="form-control" name="email" id="" value="armanjafay1@gmail.com">
    <input type="text" class="form-control" name="phone_number" id="" value="9014627125">
    <input type="password" class="form-control" name="password" id="" value="arman123"> <br>
    <input type="password" class="form-control" name="password_confirmation" id="" value="arman123"> <br>
    <button class="btn btn-info" type="submit">Submit</button> <br>
    @if ($errors->any())
        @include('messages.error')
    @endif
</form>
@endsection
