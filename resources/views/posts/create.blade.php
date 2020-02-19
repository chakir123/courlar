@extends('layout')
@section('cc')
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    @include('posts.form')
    <button type="submit">creates</button>
</form>
    
@endsection