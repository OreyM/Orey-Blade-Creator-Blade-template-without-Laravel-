@extends('layouts.app')

@section('title', 'Block Page Title')

@section('content')
    <h1>{{ __('home.blockPage') }}</h1>
    <a href="{{ url('/') }}">{{ __('home.returnHome') }}</a>
@endsection