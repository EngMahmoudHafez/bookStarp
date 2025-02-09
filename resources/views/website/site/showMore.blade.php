@extends('website.core.app')
@section('content')

    <!-- Books Section -->
    <section class="container my-5">
        <div class="container mt-4">
            <div id="book-list" class="row g-4">
                @foreach ($books as $book)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card shadow-sm border-light rounded">
                            <div class="position-relative">
                                <!-- Favorite Button -->
                                <button class="btn btn-light position-absolute top-0 end-0 m-2 heart-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                                <!-- Book Image -->
                                <img src="{{asset('website/showcase/تاريخ.webp')}}" class="card-img-top" alt="{{ $book->title }}">
                            </div>
                            <div class="card-body">
                                <!-- Book Title -->
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <!-- Book Description -->
                                <p class="card-text">{{ $book->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Book Price -->
                                    <span class="text-success fs-5">ج.م {{ $book->price }}</span>
                                    <!-- Add to Cart Button -->
                                    <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>

@endsection
@section('js_addons')
    <script>
        // Add to Cart
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function () {
                const bookId = this.getAttribute('data-book-id');

                fetch('{{route('add-to-cart')}}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ book_id: bookId })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert(data.message);
                        } else {
                            alert('Failed to add to cart.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });

        // Toggle Favorite
        function toggleFavorite(button) {
            const bookId = button.getAttribute('data-book-id');
            const isFavorite = button.classList.contains('active');

            const url = isFavorite ? '{{route('remove-from-favorites')}}' : '{{route('add-to-favorites')}}';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ book_id: bookId })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        button.classList.toggle('active', !isFavorite);
                        alert(data.message);
                    } else {
                        alert('Failed to update favorites.');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>

@endsection
