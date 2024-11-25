<!DOCTYPE html>
<html>

<head>

  @include('home.css')

  <style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }

    table
    {
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th
    {
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: black;
    }

    td
    {
        border: 1px solid skyblue;
    }

    .cart_value
    {
      text-align: center;
      margin-bottom: 70px;
      padding: 18px;
    }

    .order_deg
    {
      padding-right: 100px;
      margin-top: -50px;
    }

    label
    {
      display: inline-block;
      width: 150px;
    }

    .div_gap
    {
      padding: 20px;
    }

  </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
   
  </div>

  <div class="div_deg">

    <div class="order_deg">

      <form action="{{url('confirm_order')}}" method="POST">

        @csrf

        <div class="div_gap">
          <label>Nom & Prénom</label>

          <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>

        <div class="div_gap">
          <label>Adresse de Livraison</label>

          <textarea name="address">{{Auth::user()->address}}</textarea>
        </div>

        <div class="div_gap">
          <label>Téléphone</label>

          <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>

        <div class="div_gap">
          

          <input class="btn btn-primary" type="submit" value="Passer la commande">
        </div>

      </form>


    </div>

    <table>

        <tr>

            <th>Produit</th>

            <th>Prix</th>

            <th>Image</th>

            <th>Retirer</th>

        </tr>

        <?php

        $value=0;

        ?>

        @foreach ($cart as $cart)
            
        
        <tr>

            <td>{{$cart->product->title}}</td>

            <td>{{$cart->product->price}} DH</td>

            <td>
                <img width="150" src="/products/{{$cart->product->image}}">
            </td>

            <td>
              <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">
                <i class="fa-solid fa-trash-can"></i>
              </a>
            </td>

        </tr>

        <?php

        $value = $value + $cart->product->price;

        ?>

        @endforeach

    </table>

  </div>
  
  <div class="cart_value">

    <h3>Valeur totale du panier est : {{$value}} DH</h3>

  </div>

  <!-- info section -->

  @include('home.footer')

</body>

</html>