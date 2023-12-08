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
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name"> 
        </div>
        <div>
            <label>Quentity</label>
            <input type="text" name="qty">  
        </div>
        <div>
             <label>Price</label>
             <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="save a new product">
        </div>   
    </form>
</body>
</html>