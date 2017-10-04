@extends('template')

@section('title')
  Blog do Alex
@stop

@section('content')
  <h1>Seja Bem vindo ao meu BLOG</h1>
  <em>By: Alex</em>
  </br>
  @foreach ($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <hr>
  @endforeach
  <em><a href="http://br.lipsum.com/">Fonte do texto</a></em>
@endsection
