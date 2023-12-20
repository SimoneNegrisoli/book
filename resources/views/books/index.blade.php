@extends('layouts.app')

@section('title', 'All books')

@section('content')

    @foreach ($books as $book)
        <li>{{ $book->title }}</li>
    @endforeach


@endsection
