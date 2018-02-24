@extends('layouts.master')

@section('content')

<header>
  <div class="container-fluid front-bg-main por">
    
    @include('layouts.nav')
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="main-front-heading wow fadeInDown">
         Start selling on
         E-commerce Marketplaces without any hassle.
              </h1>
              <h3 class="front-sub-h fow fadeinUp" data-wow-delay=".3s">
           We help small businesses to sell online, from account registration to generate sale.

              </h3>
              <br>
              <a href="#" class="btn btn-blue btn-round mr15">Get a quote</a>


            </div>
            <div class="col-md-6 glss">
                  <ul id="image-gallery2" class="gallery list-unstyled cS-hidden inner-img-100">
                            <li> 
                                <img src="<?= url("dropship-content/countries-flags/Philippines.jpg"); ?>" alt="amazon panel" />
                              </li>
                               <li> 
                                <img src="<?= url("dropship-content/countries-flags/Thailand.jpg"); ?>" alt="amazon panel" />
                              </li>
                              <li> 
                                <img src="<?= url("dropship-content/countries-flags/Singapore.jpg"); ?>" alt="amazon panel" />
                              </li> 
                              <li> 
                                <img src="<?= url("dropship-content/countries-flags/Indonesia.jpg"); ?>" alt="amazon panel" />
                              </li>
                              <li> 
                                <img src="<?= url("dropship-content/countries-flags/Japan.jpg"); ?>" alt="amazon panel" />
                              </li> 
                             
                                <li> 
                                <img src="<?= url("dropship-content/countries-flags/italy.jpg"); ?>" alt="amazon panel" />
                              </li>
                               <li> 
                                <img src="<?= url("dropship-content/countries-flags/France.jpg"); ?>" alt="amazon panel" />
                              </li>
                             <li> 
                                <img src="<?= url("dropship-content/countries-flags/UK.jpg"); ?>" alt="amazon panel" />
                              </li>
                             <li> 
                                <img src="<?= url("dropship-content/countries-flags/arab-world.jpg"); ?>" alt="amazon panel" />
                              </li> 
                              <li> 
                                <img src="<?= url("dropship-content/countries-flags/Germany.jpg"); ?>" alt="amazon panel" />
                              </li>  
                               <li> 
                                <img src="<?= url("dropship-content/countries-flags/uae.jpg"); ?>" alt="amazon panel" />
                              </li>
                           
                        </ul>
            </div>
          </div>
        </div>
      </div>
  </header>


  <div class="container spacethis mb100">
      <h3 class=" h1 text-center">
        Indian E-commerce Marketplaces where you can sell your products

      </h3>
      <p class="lead text-center">We work hard round the clock to get your orders from multiple marketplaces



      </p>  

      <ul class="list-inline marketplaces-list">
              <li>
                <img src="/dropship-content\market-places\national/amazon.jpg" alt="amazon">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/jabong.jpg" alt="jabong">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/redif.png" alt="rediff">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/craftsvilla.png" alt="craftvilla">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/paytmmall.jpeg" alt="paytm mall">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/Ebay-India.png" alt="ebay india">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/Flipkart_logo.png" alt="flipkart">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/Homeshop18-customer-care-number.png" alt="homeshop 18">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/infibeam.png" alt="infibeam">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/Kraftly-logo.png" alt="kraftly">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/limeroad-large.png" alt="limeroad">
              </li> 
              <li>
                <img src="/dropship-content\market-places\national/logo-high-res-01.png" alt="zivame">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/mrvoonik.jpeg" alt="mrvoonik">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/myntra_logo.png" alt="myntra">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/naaptol.png" alt="naaptol">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/Shopclues.jpg" alt="shopclues">
              </li>
              <li>
                <img src="/dropship-content\market-places\national/snapdeal.png" alt="snapdeal">
              </li> 
              <li>
                <img src="/dropship-content\market-places\national/voonik-logo.png" alt="voonik">
              </li>
            </ul>
      </div>

@endsection
