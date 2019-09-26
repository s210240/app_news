@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 80%;">
            <div class="card-body">
                <h5 class="card-title">{{$news->header}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$news->category->header}}</h6>
                <p class="card-text">{{ $news->content}}</p>
                @guest
                    <a href="#" class="card-link">Subscribe this news category</a>
                @else
                    <a href="#" class="card-link">Unsubscribe this news category</a>
                @endguest
            </div>
        </div>
    </div>
@endsection
