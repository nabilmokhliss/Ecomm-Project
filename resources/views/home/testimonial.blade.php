<!DOCTYPE html>
<html>

<head>

  @include('home.css')

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->


    <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nos Retours Clients
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Sarah L.
                  </h5>
                  <h6>
                    Produits de qualité exceptionnelle
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Je suis ravi de mes achats chez Wiki Shop ! Les vêtements sont de super qualité, et les descriptions sont fidèles au produit reçu. Je recommande sans hésiter !
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Karim M.
                  </h5>
                  <h6>
                    Livraison ultra rapide
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Le site est super facile à utiliser, et la navigation est fluide. J'ai trouvé tout ce que je cherchais en quelques clics.J'ai passé commande et en 48 heures, j'avais déjà reçu mes articles ! La livraison est rapide et bien organisée. Merci Wiki Shop pour votre réactivité !
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Hanane T.
                  </h5>
                  <h6>
                    Des prix imbattables
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Franchement, les prix sont top pour la qualité des produits ! J'ai fait de bonnes affaires sur des articles de marque sans casser mon budget. Je reviendrai sûrement !
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->






  <!-- contact section -->

 {{-- @include('home.contact') --}}

  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')

</body>

</html>