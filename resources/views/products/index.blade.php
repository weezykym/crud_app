<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        <table border="2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            @foreach ($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a class="btn-primary" type="submit" href="{{ route('product.edit', ['product' => $product] )}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('product.destroy', ['product'=>$product]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            
            @endforeach


        </table>
    </div>
    <br>
    <div>
        <a href="{{ route('product.create') }}">Create a product</a>
    </div>

    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        
        @endif
    </div>
</body>
</html>