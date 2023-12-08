<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create Product</h2>
    <div>
        @if($errors->any())
        <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"> 
        </div>
        <div>
            <label>Quentity</label>
            <input type="text" name="qty" value="{{$product->qty}}">  
        </div>
        <div>
             <label>Price</label>
             <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="update product">
        </div>   
    </form>
</body>
</html>