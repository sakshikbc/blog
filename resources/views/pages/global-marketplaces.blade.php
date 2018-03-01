@extends('layouts.master')

@section('content')

<header>
  <div class="container-fluid front-bg-main por">
    
    @include('layouts.nav')
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="main-front-heading wow fadeInDown">
          Welcome to the Global Retailing Platform, A Doorway to Future Opportunities

              </h1>
              <h3 class="front-sub-h fow fadeinUp" data-wow-delay=".3s">
            We help Small Retail Business to Sell on Global Retail Platform, from Building Business to Take Opportunities.

              </h3>
              <br>
              <a href="/global-marketplaces" class="btn btn-blue btn-round mr15">Global Marketplaces</a>
              <a href="/indian-marketplaces" class="btn btn-blue btn-round">Indian Marketplaces</a>


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
                                <img src="<?= url("dropship-content/countries-flags/France.jpg"); ?>" alt="" />
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


<div class="container spacethis">
    <div class="col-md-4">
      <div class="wow fadeInDown">
         <div class="por" style="display: inline-block;">
                    <h3 class="text-widget">Why should you sale online?</h3>


                          <div class="w-line wow-reveal" ></div>
                   </div>
      <div class="fadeInUp wow" data-wow-delay=".2s">
      </div>
      <br>
      <p class="">
     According to Statista, in 2016 world have 1.66 billion Digital Buyers and up to 2021, it raise up to 2.14 billion.


      </p>
   
      <br>
      <a href="http://dropship.bigly.io/login?type=seller" class="btn btn-orange btn-round">Get Started</a>
      </div>
    </div>
    <div class="col-md-8">
      <div class="row why-bigly-dropship-row">
        <div class="col-md-6">
          <ul class="media-list wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <li class="media">
              <div class="media-left">
               <span class="aqil-icon-earth icon-grade " ></span>
              
              </div>
              <div class="media-body">
                <h4 class="media-heading">Online Global Retail Share</h4>
                <p class="vi-text">
               Retail Share at Global level is 55%


                </p>
              </div>
            </li>
          </ul>
          
        </div>
        <div class="col-md-6 ">
          <ul class="media-list wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <li class="media">
              <div class="media-left">
               <span class="aqil-icon-bag icon-grade "></span>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Online Buyer</h4>


                <p class="vi-text">
               Global Digital Buyers will grow 10%-15% in 2021


                </p>
              </div>
            </li>
          </ul>
          
        </div>
        <div class="col-md-6">
          <ul class="media-list wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
            <li class="media">
              <div class="media-left">
               <span class="aqil-icon-three-man icon-grade"> </span>
              </div>
              <div class="media-body">
                <h4 class="media-heading ">Need more Sellers
</h4>
                <p class="vi-text">
            Profit will go higher, up to $900 billion in next 3 years


                </p>
              </div>
            </li>
          </ul>
          
        </div>
        <div class="col-md-6">
          <ul class="media-list wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
            <li class="media">
              <div class="media-left">
               <span class="aqil-icon-graph icon-grade"></span>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Industry Growth
</h4>
                <p class="vi-text">
                  E-Retailing will grow over 50% across the globe


                </p>
              </div>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  <div class="container spacethis">
      <h3 class=" h1 text-center">
        Global E-commerce Marketplaces where you can sell your products
      </h3>
      <p class="lead text-center">Selling on Global E-Commerce Marketplaces will provide you large no. of Customers with huge profits. Global Retail Platform is full of Opportunities, you have to just grab it.

      </p>  
        <ul class="list-inline marketplaces-list">
          <!-- <li>
            <img src="/dropship-content/market-places/inter-national/ali.png" alt="amazon">
          </li> -->
          <li>
            <img src="/dropship-content/market-places/inter-national/amazon.png" alt="amazon">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/Amazon.co.jp_Logo.png">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/amazon.co_.uk-logo-Large.png" alt="rediff">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/ebay.png" alt="rediff">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/Etsy_logo.png" alt="rediff">
          </li>
            <li>
            <img src="/dropship-content/market-places/inter-national/Lazada-LOGO.png" alt="rediff">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/logo-wadi-en.png" alt="rediff">
          </li>
        <li>
            <img src="/dropship-content/market-places/inter-national/amazon-germany.png" alt="rediff">
          </li>
        <li>
            <img src="/dropship-content/market-places/inter-national/amazon-spain.png" alt="rediff">
          </li>
        <li>
            <img src="/dropship-content/market-places/inter-national/amazon-france.png" alt="rediff">
          </li>
        <li>
            <img src="/dropship-content/market-places/inter-national/amazon-canada.png" alt="rediff">
          </li>
          <li>
            <img src="/dropship-content/market-places/inter-national/amazon-mexico.png" alt="rediff">
          </li>
        
        </ul>
      </div>

  <div class="container-fluid spacethis mb100">
    <div class="row">
      <div class="container">
      
        <div class="row">
          <div class="col-md-6">
            <h3 class="">Documents Required to Sell Online</h3>
            <ul class="dmr">
              <li>Import-Export Code (IEC Code)</li>
              <li>ID Proof (Voter ID Card/Driving License/Passport)</li>
              <li>Trademark Registration Certificate/Trademak Application</li>
              <li> Address Proof (Electricity Bill/Rent Agreement)</li>
              <li> Cancel Cheque</li>

            </ul>
          </div>
          <div class="col-md-6 text-center">
            
            <ul id="documents-slider2" class="gallery list-unstyled cS-hidden">
                      <li> 
                         <img src="<?= url("dropship-content/documents/pan-card.jpg"); ?>" alt="pan card requirement">
                <h4>Pan Card</h4>
                        </li>
                        <li> 
                          <img  src="<?= url("dropship-content/documents/aadhar-card.jpg"); ?>" alt="aadhar card requirement">
              <h4>Aadhar Card</h4>
                        </li>
                         <li> 
                          <img src="<?= url("dropship-content/documents/cancel-cheque.jpg"); ?>" alt="cheque requirement">
              <h4>Cancel Cheque</h4>
                        </li>
                         <li> 
                           <img src="<?= url("dropship-content/documents/electricity-bill.jpg"); ?>" alt="electricity bil requirement">
                <h4>Adress Proof</h4>
                        </li> 
                        <li> 
                           <img src="<?= url("dropship-content/documents/trademark.jpg"); ?>" alt="Trademark registration certificate requirement">
                        </li> 
                         <li> 
                           <img src="<?= url("dropship-content/documents/gst-no.jpg"); ?>" alt="gst">
                        </li> 
                       
                      
                  </ul>
          </div>
        </div>
          
      </div>
          
        </div>
      </div>
    </div>
  </div>

@endsection
