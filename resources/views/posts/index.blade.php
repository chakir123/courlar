@extends('layout')
@section('cc')
    <h1>liste des posts</h1>
    <ul>
        @foreach ($posts as $post)
    <li><a href="{{ route('posts.show',['post'=>$post->id]) }}">{{ $post->titre }}</a></li>
       <p>{{ $post->auther }}</p>
       <li><a href="{{ route('posts.edit',['post'=>$post->id]) }}">EDIT</a>
        <form method="POST" action="{{ route('posts.destroy',['post' => $post->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </li>
      
       
        @endforeach
        
    </ul>
@endsection