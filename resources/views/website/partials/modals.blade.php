<!-- ==================== Login Modal ==================== -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="enrollLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Login Form -->
                <form action="{{ route('sign-in') }}" method="post">
                    @csrf
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="login-email" name="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Don't have an account?
                        <a href="#" data-bs-toggle="modal" data-bs-target="#signup" class="text-primary">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== Signup Modal ==================== -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupLabel">Create an Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Signup Form -->
                <form id="signupForm" action="{{ route('sign-up') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- First Name -->
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>

                        <!-- Last Name -->
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="signup-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="signup-email" name="email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="signup-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signup-password" name="password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password-confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" required>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#">terms and conditions</a>
                        </label>
                    </div>

                    <!-- Submit and Close Buttons -->
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Have an account?
                        <a href="#" data-bs-toggle="modal" data-bs-target="#enroll" class="text-primary">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
