<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="{{url('/')}}">
        <span>
          Wiki Shop
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Acceuil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('shop')}}">
              Produits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('why')}}">
              Pourquoi nous
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('testimonial')}}">
              Avis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </li>
        </ul>
        <div class="user_option">

          @if (Route::has('login'))

          @auth

          <a href="{{url('myorders')}}">
            COMMANDES
          </a>

          <a href="{{url('mycart')}}">
            <i class="fa-solid fa-cart-shopping"></i>
            [{{$count}}]
          </a>

          <form style="padding: 15px" method="POST" action="{{ route('logout') }}">
            @csrf

            <input class="btn btn-danger" type="submit" value="Déconnexion">
          </form>

          @else
            
          <a href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Se connecter
            </span>
          </a>

          <a href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i>
            <span>
              S'enregistrer
            </span>
          </a>

          @endauth

          @endif


          
          
        </div>
      </div>
    </nav>
  </header>