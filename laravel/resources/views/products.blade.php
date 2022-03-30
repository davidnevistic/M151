<html>

<head>
    <title>Alle Produkte</title>
</head>

<body>
    @foreach ($products as $product)

    {{$product->name }}
    {{$product->price }}
    <a href="/product/{{$product->id }}">Details</a>

    @endforeach
    <div>
        <button><a href="/login">Login</a></button>
    </div>
</body>

</html>