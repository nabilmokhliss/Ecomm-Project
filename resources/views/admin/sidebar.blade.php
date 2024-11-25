<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Mokhliss Nabil</h1>
          <p>Admin</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Wiki Shop Menu</span>
      <ul class="list-unstyled">
              <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Acceuil</a></li>

              <li>
                <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Catégorie 
                </a>
              </li>

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa-solid fa-store"></i></i>Produits </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_product')}}">Ajouter des Produits</a></li>
                  <li><a href="{{url('view_product')}}">Modifier des Produits</a></li>
                  
                </ul>
              </li>

              <li>
                <a href="{{url('view_orders')}}"> <i class="fa-solid fa-cart-shopping"></i>Commandes 
                </a>
              </li>
              
      </ul>
    </nav>