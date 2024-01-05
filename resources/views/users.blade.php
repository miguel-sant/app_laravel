@extends('layouts.default')


@section('title', 'Users')


@section('sidebar')
@section('content')
@foreach ($users as $user)
{{$user->name}} <br>
@endforeach

@endsection