@extends('website.core.app')
@section('content')

    <!-- Signup Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="enrollLabel">Create an Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!-- Signup Form -->
                        <form id="signupForm">
                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="first-name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first-name" required>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6 mb-3">
                                    <label for="last-name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" required>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" required>
                            </div>

                            <!-- Terms & Conditions -->
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Automatically show the modal on page load
        var myModal = new bootstrap.Modal(document.getElementById('enroll'));
        myModal.show();

        // Link the signup form with JavaScript
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission (page reload)

            // Get form data
            var firstName = document.getElementById('first-name').value;
            var lastName = document.getElementById('last-name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            var terms = document.getElementById('terms').checked;

            // Validate form
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }

            if (!terms) {
                alert("You must agree to the terms and conditions.");
                return;
            }

            // You can now send this data to the server or handle it as needed.
            console.log({
                firstName,
                lastName,
                email,
                password,
                terms
            });

            // Example: You can reset the form after submission
            document.getElementById('signupForm').reset();

            // Optionally, close the modal after successful form submission
            myModal.hide();
            alert("Account created successfully!");
            window.location.href = "bootstrap.html";
        });
    </script>


@endsection
