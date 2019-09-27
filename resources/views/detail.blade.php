@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 80%;">
            <div class="card-body">
                <h5 class="card-title">{{$news->header}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$news->category->header}}</h6>
                <p class="card-text">{{ $news->content}}</p>
                @guest
                    <a href="#" class="card-link">Login for operation</a>
                @else
                    @if ($sub_id == 0)
                        <div id="app">
                            <post-component :survey-data="'{!! json_encode($news->id) !!}'"></post-component>
                        </div>
                    @else
                        <div id="app">
                            <delete-component :delete-id="'{!! json_encode($sub_id) !!}'"></delete-component>
                        </div>
                    @endif
                @endguest


            </div>
        </div>
    </div>
@endsection

