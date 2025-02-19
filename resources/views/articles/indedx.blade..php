<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 CRUD (Create, Read, Update and Delete) with Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

.slider-container {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;  /* Make it scrollable horizontally */
    gap: 15px;  /* Space between product cards */
    padding: 20px;
}

.product-card {
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #fff;
}

.product-image img {
    object-fit: cover;
}

.product-info {
    padding: 10px;
    text-align: center;
}

.product-actions {
    padding: 10px;
    display: flex;
    justify-content: space-around;
}

.product-actions a,
.product-actions button {
    text-align: center;
}

    </style>
</head>
<body>
<div class="container">
<div class="slider-container">
    @foreach ($products as $product)
        <div class="product-card" style="width: 435px; height: 250px;">
            <div class="product-image">
                <img src="/images/{{ $product->image }}" alt="{{ $product->name }}" width="100%" height="150px">
            </div>
            <div class="product-info">
                <h5>{{ $product->name }}</h5>
                <p>{{ $product->detail }}</p>
                <p><strong>By:</strong> {{ $product->User->name }}</p>
            </div>
            <div class="product-actions">
                <form action="{{ route('destroy', $product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('show', $product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('edit', $product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

</div>
</body>
</html>