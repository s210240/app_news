@extends('layouts.app')

@section('content')
    <div class="container">
        <p>News from category: </p>
        @foreach($news as $item)
            <div class="card" style="width: 90%;">
                <div class="card-body">
                    <h5 class="card-title"><a href="/news/{{$item->id}}">{{$item->header}}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$item->category->header}}</h6>
                    <p class="card-text">{{ Str::limit($item->content, 10, '...') }}</p>
                </div>
            </div>
            <p></p>
        @endforeach
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $news->links() }}
        </ul>
    </nav>
@endsection
