<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>EDIYYYTTT!</h1>
   <div>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li class="bg-red">{{$error}}</li>
        @endforeach
    </ul>
    @endif
   </div>


    <form method="POST" action="{{route('product.edit', ['product' => $product])}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" placeholder="Create a new product" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
            <input type="text" name="quantity" placeholder="Jumlah Barang" value="{{$product->quantity}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="text" name="price" placeholder="Harga Barang" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <input type="text" name="description" placeholder="Deskripsi Barang" value="{{$product->description}}">
        </div>
        <div>
            <input class="p-3" type="submit" value="Edit Product"></input>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
