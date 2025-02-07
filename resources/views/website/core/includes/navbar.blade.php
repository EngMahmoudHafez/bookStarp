<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-3">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">📚 Bookstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{route('favorites')}}" class="nav-link">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}#Why-us">Why us?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}#questions">Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}#intro">Introductions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}#Contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<a href="{{route('cart')}}" class="cart-icon">
    <i class="bi bi-cart-fill"></i>
</a>
