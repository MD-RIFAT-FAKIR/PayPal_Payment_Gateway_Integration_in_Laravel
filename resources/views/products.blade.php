<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-4" >
    <div class="d-flex flex-column align-items-center gap-4">
        @foreach($products as $product)
            <!-- Product Card -->
            <div class="card shadow-sm bg-info" style="width: 18rem;">
                <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" alt="Product Image">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted">${{ $product->price }}</p>
                    <a href="#" class="btn btn-primary w-100">Pay</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



    <!-- Bootstrap JS Bundle CDN (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
