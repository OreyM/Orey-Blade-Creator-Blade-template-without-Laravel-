@extends('layouts.app')

@section('title', 'Test Page Title')

@section('content')
    <h1>{{ __('home.testPage') }}</h1>
    <a href="{{ url('/') }}">{{ __('home.returnHome') }}</a>
@endsection
