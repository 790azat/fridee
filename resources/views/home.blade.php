@include('components.home.sidebar')
@extends('layout')

@section('content')
    <div class="container">
        @include('components.home.menu')
        @include('components.home.chat')
    </div>
@endsection
