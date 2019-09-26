@extends('layouts.app')

@section('content')
    <div style="alignment: center">
        <h4>
            {{$news->header}}
        </h4>
        <p>{{$news->content}}</p>
    </div>
@endsection
