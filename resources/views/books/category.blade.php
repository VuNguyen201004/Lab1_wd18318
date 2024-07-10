@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Danh sách sách theo loại {{ $category_id }}</h1>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->price }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
