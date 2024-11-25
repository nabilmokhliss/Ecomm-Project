<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
    <center>

        <h3>Nom du Client : {{$data->name}}</h3>

        <h3>Adresse de Livraison : {{$data->rec_address}}</h3>

        <h3>Téléphone : {{$data->phone}}</h3>

        <h2>Produit : {{$data->product->title}}</h2>

        <h2>Prix : {{$data->product->price}}</h2>

        <img height="250" width="300" src="products/{{$data->product->image}}" alt="">

    </center>
    
</body>
</html>