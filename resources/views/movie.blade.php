@extends('layout.app')

@section('page_title')
    {{ $movie->title }}
@endsection

@section('content')
    @include('partials.movieCard')
@endsection
