<!-- cod_checkout_fixed.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Cash on Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f5f2;
        }
        .checkout-box {
            max-width: 700px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .checkout-title {
            color: #5b342e;
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-place {
            background-color: #6b3e2a;
            color: #fff;
        }
        .btn-place:hover {
            background-color: #814e36;
        }
        .order-summary {
            background: #f3e9e6;
            border: 1px solid #dfc5be;
            padding: 20px;
            border-radius: 10px;
        }
        .order-summary h5 {
            color: #5b342e;
        }
    </style>
</head>
<body>

<div class="checkout-box">
    <h2 class="checkout-title">🛒 Checkout - Cash on Delivery</h2>
    <form action="order_submit.php" method="POST">
        <div class="row">
            <div class="col-md-7">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Delivery Address</label>
                    <textarea class="form-control" name="address" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Select Payment Method</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod" checked>
                        <label class="form-check-label" for="cod">🚚 Cash on Delivery</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="bkash" value="bkash">
                        <label class="form-check-label" for="bkash">📱 bKash</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" id="card" value="card">
                        <label class="form-check-label" for="card">💳 Credit/Debit Card</label>
                    </div>
                </div>

                <input type="hidden" name="total" value="1200">

                <button type="submit" class="btn btn-place w-100">Place Order</button>
            </div>

            <div class="col-md-5">
                <div class="order-summary">
                    <h5>🧾 Order Summary</h5>
                    <p><strong>Items:</strong> 1x Premium Coffee</p>
                    <p><strong>Total:</strong> ৳1200</p>
                    <p><strong>Delivery:</strong> Inside Dhaka</p>
                    <p><strong>Payment:</strong> Cash on Delivery</p>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
