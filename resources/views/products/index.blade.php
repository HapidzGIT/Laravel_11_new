<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Table Product</h1>

    <div>
        <table border="1" class="text-center">
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('products.edit', ['product' => $product])}}">Edit</a>
                    <form action="/product/{{$product->id}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" data-id="{{$product->id}}" onclick="return confirm('Yakin Mau dihapus barangnya?')">Delete</button>
                    </form></td>

            </tr>
        </table>
            @endforeach
        <button><a href="/product/create">Create Data</a></button>
    </div>
</body>
</html>
