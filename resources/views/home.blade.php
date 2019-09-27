@extends('layouts.app')

@section('content')
    @if(count($news) > 0)
        <div class="container">
            @foreach($news as $item)
                <div class="card" style="width: 90%;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/news/{{$item->id}}">{{$item->header}}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><a
                                href="category/{{$item->category_id}}">{{$item->category->header}}</a>
                        </h6>
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
    @else
        <div class="container">
            You are not present subscription
        </div>
    @endif
@endsection
