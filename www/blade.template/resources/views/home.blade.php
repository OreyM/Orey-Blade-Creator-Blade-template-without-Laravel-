@extends('layouts.app')

@section('title', 'Home Page Title')

@section('content')
    <h1>{{ __('home.homeTitle') }}</h1>
    <a href="test">Test link</a>
    @csrf

    <p>{{ config('app.name', 'New project') }}</p>

    <a href="{{ route('login') }}">{{ __('Login') }}</a>
    <a href="{{ route('block.index') }}">Block</a>


{{-- @guest or @auth --}}
    @if (auth()->check())
        <p>The user is authenticated.</p>
    @else
        <p>The user is not authenticated.</p>
    @endif

@endsection