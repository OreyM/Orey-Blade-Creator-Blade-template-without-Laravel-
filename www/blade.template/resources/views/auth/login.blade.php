@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
    <h1>Login page</h1>
    <a href="{{ url('/') }}">{{ __('home.returnHome') }}</a>
@endsection