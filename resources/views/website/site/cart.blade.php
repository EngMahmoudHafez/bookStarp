@extends('website.core.app')
@section('content')
    <!--code  -->
    <section class="p-5">
        <div class="container mt-4">
            <div class="d-flex justify-content-between mb-4">
                <h2>Shopping Cart</h2>
            </div>
            <div id="cart-list" class="row g-4">
                <!-- Cart items will be dynamically added here -->
            </div>
            <div id="total-price" class="text-end">
                <!-- Total price will be displayed here -->
            </div>
            <button id="checkout-btn" class="btn btn-primary mt-4">Proceed to Checkout</button>
        </div>
    </section>

    <!-- Modal for Checkout Form -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="checkout-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Delivery Address</label>
                            <textarea class="form-control" id="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submit-order">Submit Order</button>
                </div>
            </div>
        </div>
    </div>

    <script src="cart.js"></script>

@endsection
