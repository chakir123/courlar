@extends('layout')
@section('cc')
<form method="POST" action="{{ route('posts.update',['post' => $post->id]) }}">
    @method('PUT')
    @csrf
     @include('posts.form')
    <button type="submit">edit</button>
</form>
    
@endsection