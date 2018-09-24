@extends('layouts.app')
@section('page_title', "المؤلف {$author->author_name} | ")

@section('content')
<div class="container">
  <div class="row mt-2">
    <div class="col-lg-9">
      <h3 class="text-right little-title">
        تحميل كتب {{$author->author_name}}
        <small>({{$bookCount}} كتابًا)</small>
      </h3>
      @if(count($books))
        <div class="row row-eq-height">
          @foreach($books as $book)
            <div class="col-xs-6 col-sm-4 col-md-3">
              <div class="article">
                <a href="{{route('book.show', $book->slug)}}"><img src="{{asset('storage/' . $book->thumbnail)}}" alt="{{$book->book_name}}"></a>
                <a href="{{route('book.show', $book->slug)}}">{{$book->book_name}}</a>
              </div>
            </div>
          @endforeach
        </div>
        {{$books->links()}}
      @else
        <p class="alert alert-info text-right lead" style="background: none">
          لا يوجد كتب
        </p>
      @endif
    </div>
    @include('layouts.sidebar')
  </div><!-- Row -->
</div>
@endsection
