@extends('layout.master')

@section('title', 'Sekolah koding')

@section('content')
    <h1>Bahagia itu luar biasa</h1>
    <h2>{{ $blog }}</h2>

    @foreach($users as $nama)
        <li>{{$nama}}</li>
    @endforeach

    {!! $unecape !!}

    @if(count($users) > 5)
        <h1>User lebih dari lima</h1>
    @else
        <h1>User kurang dari lima</h1>
    @endif
@endsection
