@extends('website.core.app')
@section('content')
    <div class="container d-flex justify-content-center align-items-center py-3">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">All</a></li>
                <li><a class="dropdown-item" href="#">Fiction</a></li>
                <li><a class="dropdown-item" href="#">Non-Fiction</a></li>
                <li><a class="dropdown-item" href="#">Science</a></li>
                <li><a class="dropdown-item" href="#">History</a></li>
                <li><a class="dropdown-item" href="#">Mystery</a></li>
                <li><a class="dropdown-item" href="#">Biography</a></li>
            </ul>
        </div>
    </div>



    <!-- Books Section -->
    <section class="container my-5">
        <div class="container mt-4">
            <div id="book-list" class="row g-4">
                <!-- Books will be loaded here -->
            </div>
        </div>

    </section>

    <!-- Pagination -->
    <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>


@endsection
