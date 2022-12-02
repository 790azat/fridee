@extends('layout')

@section('content')
    <div class="container">
        @include('components.home.menu')
        @include('components.home.my-projects-menu')
        @include('components.home.my-projects')
    </div>
@endsection
