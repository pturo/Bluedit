@extends('layout')

@section('main')
    <h1>Reddit clone made with Laravel</h1>

    @foreach($links as $link)
        <div>
            <button>up</button>
            {{ $link->votes }}
            <button>down</button>
            <a href="{{ $link->link }}">{{  $link->title }}</a>
            <a href="/comments/{{ $link->id }}">[comments]</a>
        </div>
    @endforeach
@stop
