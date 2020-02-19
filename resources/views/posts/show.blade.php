@extends('layout')
@section('cc')
    <h1>{{ $post->titre }}</h1>
    <h1>{{ $post->auther }}</h1>
    <p>
        @if ($post->auther)
            enable
        @else
          disable  
        @endif
    </p>
    <ul>
@endsection