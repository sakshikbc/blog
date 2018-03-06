@extends('layouts.master')

@section('content')
 <div class="container-fluid por front-bg-main bg-for-pricing">
   @include('layouts.nav')
   <h1 class="main-front-heading wow fadeInDown text-center display-3"> Pricing</h1>
              
                   
</div>
<div class="container pricebox-container">
    <div class="row">
        <div class="col-md-4">
          <div class="pricing-box price-heighlight">
            <div class="pricing-header text-center">
            <h4 class="sub-heading">Premium</h4>
                  <img src="<?= url("dropship-content/pricing/pricing-premium.svg"); ?>" alt="" />
            <h1 class="priceh">
              <i class="aqil-icon-rupee-indian"></i>4999
            </h1>
            <small class="month">90days</small>
            </div>
              <div class="pricing-content">
                  <ul class="price-listing">
                      <li><i class=" aqil-icon-shopping-cart-f"></i>  Unlimited order</li>
                      <li><i class="aqil-icon-category"></i>  Unlimited category</li>
                      <li><i class="aqil-icon-suppliers"></i>  Unlimited supplier</li>
                      <li><i class="aqil-icon-product-box"></i>  Unlimited product</li>
                      <li><i class="aqil-icon-profits"></i>  0.00 % Commision</li>
                      <li><i class="aqil-icon-payment-method"></i>  Cash on Delivery Service</li>
                      <li><i class="aqil-icon-home-f"></i> Shipping and Handling</li>
                      <li><i class="aqil-icon-logistics-delivery-truck-in-movement"></i> Delivery Management</li>
                      <li><i class="aqil-icon-package-return"></i>  Return and Refund Management</li>
                      <li><i class="aqil-icon-messages-alt-f"></i> Chat/Email Support</li>
                      <li><i class="aqil-icon-document-f"></i>  Product feed</li>

                  </ul>
              </div>
                <div class="pricefooter text-center">
              <a href="http://dropship.bigly.io/"><button class="btn btn-blue btn-round">Sign Up Now</button></a>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pricing-box">
            <div class="pricing-header text-center">
            <h4 class="sub-heading">Starter</h4>
                  <img src="<?= url("dropship-content/pricing/advance-pricing.svg"); ?>" alt="" />
            <h1 class="priceh">
              <i class="aqil-icon-rupee-indian"></i>1999
            </h1>
            <small class="month">30days</small>
            </div>
              <div class="pricing-content">
                  <ul class="price-listing">
                      <li><i class=" aqil-icon-shopping-cart-f"></i>  Unlimited order</li>
                      <li><i class="aqil-icon-category"></i>  Unlimited category</li>
                      <li><i class="aqil-icon-suppliers"></i>  Unlimited supplier</li>
                      <li><i class="aqil-icon-product-box"></i>  Unlimited product</li>
                      <li><i class="aqil-icon-profits"></i>  0.00 % Commision</li>
                      <li><i class="aqil-icon-payment-method"></i>  Cash on Delivery Service</li>
                      <li><i class="aqil-icon-home-f"></i> Shipping and Handling</li>
                      <li><i class="aqil-icon-logistics-delivery-truck-in-movement"></i> Delivery Management</li>
                      <li><i class="aqil-icon-package-return"></i>  Return and Refund Management</li>
                      <li><i class="aqil-icon-messages-alt-f"></i> Chat/Email Support</li>
                      <li><i class="aqil-icon-document-f"></i>  Product feed</li>

                  </ul>
              </div>
                <div class="pricefooter text-center">
              <a href="http://dropship.bigly.io/"><button class="btn btn-blue btn-round">Sign Up Now</button></a>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pricing-box">
            <div class="pricing-header text-center">
            <h4 class="sub-heading">Bassic</h4>
                  <img style="width: 150px;" src="<?= url("dropship-content/pricing/pricing-basic.svg"); ?>" alt="" />
            <h1 class="priceh">
              <i class="aqil-icon-rupee-indian"></i>Free
            </h1>
            <small class="month">Forever</small>
            </div>
              <div class="pricing-content">
                  <ul class="price-listing">
                      <li><i class=" aqil-icon-shopping-cart-f"></i>  Unlimited order</li>
                      <li><i class="aqil-icon-category"></i>  Unlimited category</li>
                      <li><i class="aqil-icon-suppliers"></i>  Unlimited supplier</li>
                      <li><i class="aqil-icon-product-box"></i>  Unlimited product</li>
                      <li><i class="aqil-icon-profits"></i>  0.00 % Commision</li>
                      <li><i class="aqil-icon-payment-method"></i>  Cash on Delivery Service</li>
                      <li><i class="aqil-icon-home-f"></i> Shipping and Handling</li>
                      <li><i class="aqil-icon-logistics-delivery-truck-in-movement"></i> Delivery Management</li>
                      <li><i class="aqil-icon-package-return"></i>  Return and Refund Management</li>
                      <li><i class="aqil-icon-messages-alt-f"></i> Chat/Email Support</li>
                      <li><i class="aqil-icon-document-f"></i>  Product feed</li>

                  </ul>
              </div>
                <div class="pricefooter text-center">
              <a href="http://dropship.bigly.io/"><button class="btn btn-blue btn-round">Sign Up Now</button></a>
          </div>
          </div>
        </div>

</div>
</div>



<div class="container spacethis tpc">
  <div class="text-center mb100">
    <div class="por dib">
     <h1 class="text-widget">FAQs</h1>
           <div class="w-line wow-reveal b0" ></div>
    </div>
  </div>
 <div class="row faqs-list-item">
   <div class="col-md-6">
     <ul class="media-list">
         <li class="media">
           <div class="media-left">
            <span class="aqil-icon-cogs-f icon-grade" style="font-size: 35px;"></span>
           
           </div>
           <div class="media-body">
             <h3 class="media-heading">How does the free trial work?</h3>

             <p class="vi-text">
            When you sign up for your trial, you'll have access to all features. You can Import the
            product and can sell the product.You can do everything like a paid plan. At any point during
            the trial, you can choose a plan and pay by credit card from within your account.

             </p>
           </div>
         </li>
        <li class="media">
           <div class="media-left">
            <span class="aqil-icon-product-box icon-grade "></span>
           
           </div>
           <div class="media-body">
             <h3 class="media-heading">Will you Process the order in Trial Period?</h3>


             <p class="vi-text">
         Yes, we will definitely process your order in trail period?

             </p>
           </div>
         </li>
         <li class="media">
             <div class="media-left">
              <span class="aqil-icon-confused icon-grade "></span>
             
             </div>
             <div class="media-body">
               <h3 class="media-heading">What happens after the trial ends?</h3>

               <p class="vi-text">
          You have access to your accounts, you can upgrade the plan but you will not be able
          to take any action?


               </p>
             </div>
           </li> 
           
        <li class="media">
             <div class="media-left">
              <span class="aqil-icon-question-mark icon-grade "></span>
             
             </div>
             <div class="media-body">
               <h3 class="media-heading">How can I buy your Plan?</h3>
               <p class="vi-text">
     Plans are month-to-month or annual. You can start/stop or make changes to your
     plan at any time (but note that refunds are not given for cancellation or downgrades).
     Contact us for details.

               </p>
             </div>
           </li>
        <li class="media">
             <div class="media-left">
              <span class="aqil-icon-payment-method icon-grade "></span>
             
             </div>
             <div class="media-body">
               <h3 class="media-heading">What discounts are available?</h3>

               <p class="vi-text">
   We offer a discounted price for subscriptions billed annually. The prices shown on
   this page reflect this annual discount.

               </p>
             </div>
           </li>
       
       </ul>
   </div>
   <div class="col-md-6">
     <img class="faq-vector" src="dropship-content/img/FAQ.svg">
   </div>
 </div>
</div>
@endsection
