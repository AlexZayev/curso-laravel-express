@extends('template')

@section('title', 'Notas Existentes')

@section('content')
  <ul>
    @foreach($notas as $nota)
      <li>{{$nota}}</li>
    @endforeach
  </ul>
@endsection
