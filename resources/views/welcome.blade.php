@extends('layouts.app')

@section('content')

    @foreach($news as $item)
        <div class="card" style="width: 90%;">
            <div class="card-body">
                <h5 class="card-title"><a href="/news/{{$item->id}}">{{$item->header}}</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$item->category->header}}</h6>
                <p class="card-text">{{ Str::limit($item->content, 5, ' (...)') }}</p>
                <a href="#" class="card-link">Subscribe</a>
            </div>
        </div>
        <p></p>
    @endforeach

   {{-- {{ $news->links() }}--}}
@endsection
