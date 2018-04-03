@extends('layout.layout') 
@section('content')
<div class="clearfix"></div>
  <!-- Sub Header -->
  <div class="container">
      <div class="col-12">
          <h2>Cart</h2>
          <nav class="text-right" aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
              <li class="breadcrumb-item"><a href="/product">Product</a></li>
              <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
          </ol>
          </nav>
      </div>
  </div>
<!-- Sub Header -->
  <div class="clearfix"></div>
  <!-- end features Section 01 -->
  <div class="section-md">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
              <h2 class="uppercase">Billing Details</h2>
              <form action="" method="POST" id="sky-form" class="sky-form sty-one" sty-one novalidate>
              <fieldset class="sty-one">					
              <div class="row">
                <section class="col col-6">
                  <label class="label">Name</label>
                  <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input name="name" id="name" type="text">
                  </label>
                </section>
                <section class="col col-6">
                  <label class="label">E-mail</label>
                  <label class="input">
                    <i class="icon-append fa fa-envelope-o"></i>
                    <input name="email" id="email" type="email">
                  </label>
                </section>
              </div>
              
              <section>
                <label class="label">Subject</label>
                <label class="input">
                  <i class="icon-append fa fa-tag"></i>
                  <input name="subject" id="subject" type="text">
                </label>
              </section>
              
              <section>
                <label class="label">Message</label>
                <label class="textarea">
                  <i class="icon-append fa fa-comment"></i>
                  <textarea rows="4" name="message" id="message"></textarea>
                </label>
              </section>
              
              <section>
                <label class="label">Enter characters below:</label>
                <label class="input input-captcha">
                  <img src="captcha/image.php?<?php echo time(); ?>" alt="Captcha image" width="100" height="35">
                  <input maxlength="6" name="captcha" id="captcha" type="text">
                </label>
              </section>
              
              <section>
                <label class="checkbox"><input name="copy" type="checkbox"><i></i>Send a copy to my e-mail address</label>
              </section>
            </fieldset>
            
            <footer>
              <button type="submit" class="button">Send message</button>
            </footer>
            
            <div class="message">
              <i class="fa fa-check"></i>
              <p>Your message was successfully sent!</p>
            </div>
          </form>
        </div>
        <!-- end section --> 
        <div class="col-md-6">
            <h2 class="uppercase">Checkout</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row pad-20">
                        <div class="col-12 m-bot-5">
                            <div class="col-md-2">
                                <img src="images/cart-img-01.jpg" class="img-responsive" alt=""> </div>
                            <div class="col-md-6">
                                <p>Lorem Ipsum passages more recently with desktop publishing software including versions
                                    of Lorem Ipsum generators on the Internet.</p>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#"><span class="fa fa-lg fa-close"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection