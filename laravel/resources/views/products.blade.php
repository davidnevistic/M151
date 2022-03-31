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
        @if(!session()->has('userId'))
        <button><a href="/login">Login</a></button>
        @else
        <button><a href="/logout">Logout</a></button>
        @endif     
    </div>
</body>

</html>