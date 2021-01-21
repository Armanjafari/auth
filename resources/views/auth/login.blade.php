@extends('layout.master')


@section('content')
@if(session('success'))
@include('messages.success')
@endif
<form action="login" method="POST" class="form-group">
    <input type="email" class="form-control" name="email" id="">
    <input type="password" class="form-control" name="password" id=""> <br>
    <button class="btn btn-info" type="submit">submit</button> <br>
    @if ($errors->any())
        @include('messages.error')
    @endif
</form>
@endsection
