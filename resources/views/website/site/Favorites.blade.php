@extends('website.core.app')
@section('content')



    <!-- Favorites Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Favourite Books</h2>
        <div id="favourite-list" class="row g-4"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const favouriteList = document.getElementById("favourite-list");

            // Load favourite books from localStorage
            let favouriteBooks = JSON.parse(localStorage.getItem("favouriteBooks")) || [];

            // Function to save favourite books to localStorage
            function saveFavourites() {
                localStorage.setItem("favouriteBooks", JSON.stringify(favouriteBooks));
            }

            // Function to load and display favourite books
            function loadFavouriteBooks() {
                favouriteList.innerHTML = ""; // Clear previous content

                if (favouriteBooks.length === 0) {
                    favouriteList.innerHTML = '<p class="text-center">No favourite books yet.</p>';
                    return;
                }

                // Render each favourite book
                favouriteBooks.forEach((book, index) => {
                    const bookCard = document.createElement("div");
                    bookCard.classList.add("col-lg-4", "col-md-6", "col-sm-12");

                    bookCard.innerHTML = `
                        <div class="card shadow-sm border-light rounded">
                            <div class="position-relative">
                                <button class="btn btn-light position-absolute top-0 end-0 m-2 heart-btn" data-index="${index}">
                                    <i class="bi bi-heart-fill text-danger"></i>
                                </button>
                                <img src="${book.image}" class="card-img-top" alt="${book.title}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">${book.title}</h5>
                                <p class="card-text">Price: ج.م ${book.price.toFixed(2)}</p>
                                <button class="btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    `;

                    favouriteList.appendChild(bookCard);
                });

                // Add event listeners to heart buttons
                addHeartListeners();
            }

            // Function to add event listeners to heart buttons
            function addHeartListeners() {
                document.querySelectorAll('.heart-btn').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = this.getAttribute("data-index");

                        // Remove the book from favouriteBooks
                        favouriteBooks.splice(index, 1);

                        // Save updated favouriteBooks to localStorage
                        saveFavourites();

                        // Reload the favourite books list
                        loadFavouriteBooks();
                    });
                });
            }

            // Load favourite books when the page loads
            loadFavouriteBooks();
        });
    </script>
@endsection
