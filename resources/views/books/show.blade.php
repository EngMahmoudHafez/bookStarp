@extends('website.core.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $book->image) }}" class="img-fluid" alt="{{ $book->title }}">
            </div>
            <div class="col-md-6">
                <p>{{ $book->description }}</p>
                <p><strong>Price:</strong> ${{ $book->price }}</p>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
