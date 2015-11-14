@extends('layouts.master')


@section('title')
    List Books
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')

    <h1>All Books</h1>

    @foreach($books as $book)
        <div>
            <h2>{{ $book->title }}</h2>
            <a href='/books/edit/{{$book->id}}'>Edit</a><br>
            <img src='{{ $book->cover }}'>
        </div>
    @endforeach

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop