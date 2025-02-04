@extends('website.core.app')
@section('title', __('titles.Home'))
@section('content')
    <!-- crat -->
    <!-- Shopping Cart Icon -->
    <a href="cart.html" class="cart-icon">
        <i class="bi bi-cart-fill"></i>
    </a>


    <!--ShowCase-->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Welcome to your next <span class="text-warning">reading adventure!</span></h1>
                    <p class="lead my-4">
                        Whether you're here to explore new worlds, dive into exciting stories,
                        or just find your next favorite book, we've got you covered.
                        But wait... before you get started, sign in to unlock personalized recommendations, exclusive deals,
                        and so much more! Your journey to endless books starts here!"
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the
                        Enrollment</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="showcase/undraw_reading_atc8.svg" alt="">
            </div>
        </div>
    </section>

    <!--search-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Looking for a cerrain Book?</h3>
                <div class="input-group py-3 news-input">
                    <input type="text" class="form-control" placeholder="Enter Book's Name">
                    <button class="btn btn-dark btn-lg" type="button">Search</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Books Section -->
    <section class="p-5">
        <div class="container mt-4">
            <div class="d-flex justify-content-between mb-4">
                <h2>Books Collection</h2>
                <!-- See More Button -->
                <a href="showMore.html" class="btn btn-outline-primary">See More</a>
            </div>
            <div class="row g-4">
                <!-- Book 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-sm border-light rounded">
                        <div class="position-relative">
                            <!-- Favorite Button -->
                            <button class="btn btn-light position-absolute top-0 end-0 m-2 heart-btn">
                                <i class="bi bi-heart"></i> <!-- Initial icon is empty heart -->
                            </button>
                            <img src="showcase/نفسي.webp" class="card-img-top" alt="Book Image 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">محاط بالحمقي</h5>
                            <p class="card-text">كتاب احمق</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-success fs-5">ج.م 120</span>
                                <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-sm border-light rounded">
                        <div class="position-relative">
                            <!-- Favorite Button -->
                            <button class="btn btn-light position-absolute top-0 end-0 m-2 heart-btn">
                                <i class="bi bi-heart"></i> <!-- Initial icon is empty heart -->
                            </button>
                            <img src="showcase/ادب.webp" class="card-img-top" alt="Book Image 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">الادب العريب الحديث</h5>
                            <p class="card-text">كتاب مؤدب</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-success fs-5">ج.م 150</span>
                                <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow-sm border-light rounded">
                        <div class="position-relative">
                            <!-- Favorite Button -->
                            <button class="btn btn-light position-absolute top-0 end-0 m-2 heart-btn">
                                <i class="bi bi-heart"></i> <!-- Initial icon is empty heart -->
                            </button>
                            <img src="showcase/تاريخ.webp" class="card-img-top" alt="Book Image 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">التاريخ الروماني</h5>
                            <p class="card-text">كتاب عريق</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-success fs-5">ج.م 180</span>
                                <button class="btn btn-primary add-to-cart-btn">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <script src="showcase/mainPage.js"></script>

    <!-- Learn Sections -->
    <section id="Why-us" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h1>Why <span class="text-warning">us!</span></h1>
                    <p class="lead">
                        In this section, you could highlight key points that differentiate your platform or bookstore from others.
                        Some content ideas might include:
                    </p>

                    <p>1. <strong>Personalized Experience:</strong> "We cater to your unique reading preferences. Whether you're a
                        casual reader or a book enthusiast, we recommend books tailored to your tastes."</p>
                    <p>2. <strong>Vast Collection:</strong> "With a diverse range of genres, from the latest bestsellers to
                        timeless classics, we offer books for every reader. Discover new authors, dive into gripping tales, and
                        explore fascinating worlds."</p>

                    <!-- Hidden reasons for 'Show More' -->
                    <div id="more-reasons" style="display:none;">
                        <p>3. <strong>Convenient Shopping:</strong> "Find your next favorite book with ease. Enjoy a seamless
                            shopping experience with detailed descriptions, reviews, and helpful filters that make choosing your next
                            read simple."</p>
                        <p>4. <strong>Customer-Centric Approach:</strong> "Our customers are at the heart of everything we do. From
                            personalized recommendations to a user-friendly interface, we strive to make every part of your reading
                            journey enjoyable."</p>
                        <p>5. <strong>Exclusive Deals & Discounts:</strong> "Enjoy special offers, discounts, and exclusive deals on
                            your favorite books. We believe great reading should be accessible to all."</p>
                        <p>6. <strong>Support Independent Authors:</strong> "We proudly feature independent authors, giving you
                            access to unique, fresh voices in the literary world."</p>
                        <p>7. <strong>Fast Delivery & Easy Returns:</strong> "Get your books delivered quickly and with ease. And if
                            you're not happy with your purchase, we offer hassle-free returns."</p>
                    </div>

                    <!-- Show More Button -->
                    <a href="javascript:void(0)" id="show-more" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-down"></i> Show More
                    </a>

                </div>
                <div class="col-md">
                    <img src="showcase/footing.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const showMoreButton = document.getElementById('show-more');
                const moreReasons = document.getElementById('more-reasons');

                // Toggle visibility of additional reasons on button click
                showMoreButton.addEventListener('click', function () {
                    if (moreReasons.style.display === "none") {
                        moreReasons.style.display = "block";
                        showMoreButton.innerHTML = '<i class="bi bi-chevron-up"></i> Show Less';
                    } else {
                        moreReasons.style.display = "none";
                        showMoreButton.innerHTML = '<i class="bi bi-chevron-down"></i> Show More';
                    }
                });
            });
        </script>
    </section>


    <!-- QUESTIONS Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequantly Asked Questions</h2>
            <!-- ********************************* -->
            <div class="accordion accordion-flush" id="questions">
                <!-- Item One -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-one">
                            انت منين ياض
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit.
                            Soluta, optio illum adipisci quisquam earum architecto
                            temporibus ullam ex magni, quia id rerum doloribus vero
                            molestiae amet consectetur commodi cum delectus quas
                            repudiandae totam quae animi. Quibusdam molestiae illo
                            iste labore exercitationem aspernatur nesciunt dolore
                            minima? Aspernatur necessitatibus
                            ea sapiente reiciendis!</div>
                    </div>
                </div>
                <!-- Item Two -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed
              type=" button" data-bs-toggle="collapse" data-bs-target="#question-two">
                        بكام يصاحبي
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            وجودك كفايه

                        </div>
                    </div>
                </div>
                <!-- Item Three -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-Three">
                            ايه الاستفاده
                        </button>
                    </h2>
                    <div id="question-Three" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">مفيش</div>
                    </div>
                </div>
                <!-- ************************************************ -->
            </div>

        </div>
    </section>

    <!-- Introductions -->
    <section id="intro" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white mb-4">Meet the Developers</h2>
            <p class="lead text-center text-white mb-5">Made with love by:</p>
            <div class="row g-4 justify-content-center">
                <!-- Developer 1 -->
                <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card bg-light shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle mb-3" alt="Ahmed Reda"
                                 style="width: 120px; height: 120px; object-fit: cover;">
                            <h3 class="card-title mb-3">Ahmed Reda</h3>
                            <p class="card-text">Front-end Engineer</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="text-dark mx-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Developer 2 -->
                <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card bg-light shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle mb-3" alt="Muhamed Medhat"
                                 style="width: 120px; height: 120px; object-fit: cover;">
                            <h3 class="card-title mb-3">Muhamed Medhat</h3>
                            <p class="card-text">Back-end Engineer</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="text-dark mx-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Developer 3 -->
                <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card bg-light shadow-sm border-0 rounded">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="Assem Reda"
                                 style="width: 120px; height: 120px; object-fit: cover;">
                            <h3 class="card-title mb-3">Assem Reda</h3>
                            <p class="card-text">Flutter Engineer</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="text-dark mx-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <!-- Contact Section -->
    <section class="p-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6"> <!-- Adjusted the width of the first column to 6/12 -->
                    <h2 class="text-center mb-4">Contact Information</h2>

                    <div class="list-group list-group-flush lead">
                        <div class="list-group-item">
                            <h5 class="fw-bold">Main Location:</h5>
                            <p>Faculty of Engineering - Mansoura University</p>
                        </div>

                        <div class="list-group-item">
                            <h5 class="fw-bold">Phone 1:</h5>
                            <a href="tel:+201013424095" class="text-decoration-none text-dark">01013424095</a>
                        </div>

                        <div class="list-group-item">
                            <h5 class="fw-bold">Phone 2:</h5>
                            <a href="tel:+201098925413" class="text-decoration-none text-dark">01098925413</a>
                        </div>

                        <div class="list-group-item">
                            <h5 class="fw-bold">Phone 3:</h5>
                            <a href="tel:+201062290984" class="text-decoration-none text-dark">01062290984</a>
                        </div>

                        <div class="list-group-item">
                            <h5 class="fw-bold">Email:</h5>
                            <a href="mailto:booKstrap2025@gmail.com"
                               class="text-decoration-none text-dark">booKstrap2025@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Map Column -->
                <div class="col-md-6"> <!-- Increased the width of the map container to 6/12 -->
                    <h4 class="text-center mb-3">Find Us On the Map</h4>
                    <!-- Embedded Google Map with coordinates -->
                    <div class="embed-responsive" style="width: 100%; height: 400px;"> <!-- Adjusted height -->
                        <iframe class="embed-responsive-item"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDUr4UIAgTLo50cO5P8WX73lM1LHePn-j8&q=31.042759496312275,31.35756884707605"
                                allowfullscreen style="width: 100%; height: 100%; border: 0;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Login Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me" class="ms-1">Remember me</label>
                            </div>
                            <a href="#" class="text-primary">Forgot Password?</a>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p class="mb-0">Don't have an account?
                            <a href="signup.html" class="text-primary">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
