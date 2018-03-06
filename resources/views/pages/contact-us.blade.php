@extends('layouts.master')

@section('content')
 <div class="container-fluid por front-bg-main bg-for-pricing">
   @include('layouts.nav')
</div>
<div class="container">
  <div class="cnus-img-box">
      <img class="cnus-img" src="{{asset('dropship-content/img/contact-us.svg')}}">
    <div class="contact-details">
      <ul class="">
        <li><a href=""><i class="aqil-icon-tele-phone-f"></i>7210562014</a></li>
        <li><a href=""><i class="aqil-icon-close-envelope"></i>aqilali381@gmail.com</a></li>
        <li><a href=""><i class="aqil-icon-map-marker-f"></i>aqilali381@gmail.com</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection
