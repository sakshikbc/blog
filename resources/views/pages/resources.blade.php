@extends('layouts.master')

@section('content')
 <div class="container-fluid por front-bg-main bg-for-pricing small-price">
   @include('layouts.nav')
   <h1 class="main-front-heading wow fadeInDown text-center display-3">eBooks</h1>
  
</div>
<div class="container spacethis tpc">
  <div class="blog-flex-row">
          <div class="blog-flex-item" style="flex-grow: inherit;">
            <div class="news-box">
               <div class="img-overlay">
              <img src="dropship-content/img/ebook-cover.jpg">
                
               </div>
              <div class="blog-content">
                <h3 class="post-header">
                  Beginner's
                  Guide To Sell
                  Online On
                  Facebook
                </h3>
                <p class="post-content">A Complete Guide for Entrepreneurs and FB users to setting up a business on Facebook</p>
                <a href="dropship-content/img/eBook.pdf" class="read-more-link">Download</a>
              </div>
            </div>
          </div>
         
        </div>
</div>
@endsection
