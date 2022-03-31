<html>

<body>
    <h1>{{$product->name}}</h1>
    <img src="{{asset($product->image)}}">
    <p>{{$product->description}}</p>



    <button>In den Warenkorb</button>
    <br><br>
    <a href="/products">Zurück zur Liste</a>
</body>

</html>