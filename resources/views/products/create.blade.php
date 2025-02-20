<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>            
            @endforeach
        </ul>
        
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="">Name: </label>
            <input type="text" name="name" placeholder="Enter name">
        </div>

        <div>
            <label for="">Qty: </label>
            <input type="text" name="qty" placeholder="Qty">
        </div>

        <div>
            <label for="">Price: </label>
            <input type="text" name="price" placeholder="Price">
        </div>

        <div>
            <label for="">Description: </label>
            <input type="text" name="description" placeholder="description">
        </div>

        <div>
            <button class="submit">Create Product</button>
        </div>
    </form>
</body>
</html>