@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $book->title }}</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $book->thumbnail }}" class="img-fluid" alt="{{ $book->title }}">
        </div>
        <div class="col-md-8">
            <h3>Tác giả: {{ $book->author }}</h3>
            <h3>Nhà xuất bản: {{ $book->publisher }}</h3>
            <h3>Ngày xuất bản: {{ $book->publication }}</h3>
            <h3>Giá: {{ $book->price }}</h3>
            <h3>Số lượng: {{ $book->quantity }}</h3>
            <h3>Mã loại: {{ $book->category_id }}</h3>
        </div>
    </div>
</div>
@endsection
