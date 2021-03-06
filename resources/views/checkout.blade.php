@extends('layout.layout') 
@section('extra-css')
<script src="https://js.stripe.com/v3/"></script> 
@endsection 
@section('content')
<div class="clearfix"></div>
<!-- Sub Header -->

<div class="container m-top-1">
  <div class="row">
    @if (session()->has('success_message'))
    <div class="alert alert-primary animate-in" data-anim-delay="300" data-anim-type="fade-in-down">
      <span>
        <i class="fa fa-thumbs-o-up"></i>
      </span>
      {{ session()->get('success_message') }}
    </div>
    @endif 

    @if(count($errors) > 0)
    <div class="alert alert-danger animate-in" data-anim-delay="400" data-anim-type="fade-in-down">
      {{-- <span><i class="fa fa-info"></i></span> --}}
      <ul>
        @foreach ($errors->all() as $error)
          <li><span class="fa fa-info-circle"></span> {!! $error !!}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="container">
  <div class="col-12">
    <h2>Checkout</h2>
    <hr>
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

        <form action="{{route('checkout.store')}}" method="POST" id="payment-form" class="sky-form sty-one" sty-one>
          {{ csrf_field() }}
          <fieldset class="sty-one">
            <div class="row">
              <section class="col col-6">
                <label class="label">Name</label>
                <label class="input">
                  @if (auth()->user())
                    <i class="icon-append fa fa-user"></i>
                    <input name="name" id="name" type="text" value="{{ auth()->user()->name }}" readonly>
                  @else
                    <i class="icon-append fa fa-user"></i>
                    <input name="name" id="name" type="text" value="{{ old('name') }}" required>
                  @endif
                </label>
              </section>
              <section class="col col-6">
                <label class="label">E-mail</label>
                <label class="input">
                  @if (auth()->user())    
                    <i class="icon-append fa fa-envelope-o"></i>
                    <input name="email" id="email" type="email" value="{{ auth()->user()->email }}" readonly>
                  @else
                    <i class="icon-append fa fa-envelope-o"></i>
                    <input name="email" id="email" type="email" value="{{ old('email') }}" required>
                  @endif
                </label>
              </section>
            </div>

            <section>
              <label class="label">Address</label>
              <label class="input">
                @if (auth()->user())
                  <i class="icon-append fa fa-building"></i>
                  <input name="address" id="address" type="text" value="{{ auth()->user()->address }}" readonly>  
                @else
                  <i class="icon-append fa fa-building"></i>
                  <input name="address" id="address" type="text" value="{{ old('address') }}" required>
                @endif
              </label>
            </section>

            <section>
              <label class="label">City</label>
              <label class="input">
                @if (auth()->user())
                  <i class="icon-append fa fa-building"></i>
                  <input name="city" id="city" type="text" value="{{ auth()->user()->city }}" readonly>  
                @else
                  <i class="icon-append fa fa-building"></i>
                  <input name="city" id="city" type="text" value="{{ old('city') }}" required>
                @endif
              </label>
            </section>

            <section>
              <label class="label">Province</label>
              <label class="input">
                @if (auth()->user())
                  <i class="icon-append fa fa-building"></i>
                  <input name="province" id="province" type="text" value="{{ auth()->user()->province }}" readonly>    
                @else
                  <i class="icon-append fa fa-building"></i>
                  <input name="province" id="province" type="text" value="{{ old('province') }}" required>
                @endif
              </label>
            </section>

            <section>
              <label class="label">Postal Code</label>
              <label class="input">
                @if (auth()->user())
                  <i class="icon-append fa fa-tag"></i>
                  <input name="postalcode" id="postalcode" type="text" value="{{ auth()->user()->postalcode }}" readonly>  
                @else
                  <i class="icon-append fa fa-tag"></i>
                  <input name="postalcode" id="postalcode" type="text" value="{{ old('postalcode') }}" required>
                @endif
              </label>
            </section>

            <section>
              <label class="label">Phone</label>
              <label class="input">
                @if (auth()->user())
                  <i class="icon-append fa fa-phone"></i>
                  <input name="phone" id="phone" type="text" value="{{ auth()->user()->phone }}" readonly>    
                @else
                  <i class="icon-append fa fa-phone"></i>
                  <input name="phone" id="phone" type="text" value="{{ old('phone') }}" required>
                @endif
              </label>
            </section>

            <section>
              <label class="label">Name on Card</label>
              <label class="input">
                <i class="icon-append fa fa-credit-card"></i>
                <input name="name_on_card" id="name_on_card" type="text" value="" required>
              </label>
            </section>

            <label for="card-element">
              Credit or debit card
            </label>
            <div id="card-element">
              <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert">

            </div>
          </fieldset>

          <footer>
            <button id="complete-order" type="submit" class="button" style="width: 200px">bayar</button>
          </footer>
        </form>
        {{-- end form --}}

      </div>
      <!-- end section -->
      <div class="col-md-6">
        <h2 class="uppercase">Checkout Items</h2>
        @foreach (Cart::content() as $item)
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="col-md-4">
                  <img src="{{asset('storage/'.$item->model->image)}}" alt="Card images" class="img-responsive">
                </div>
                <div class="col-md-6">
                  <h4>{{ $item->model->name }}</h4>
                  <p>YTD : {{ $item->model->ytd }}</p>
                  <h4>{{ $item->model->presentPrice() }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <hr>
        <div class="row">
          <div class="col-md-6">
            <table class="f-18">
              <tbody>
                <tr>
                  <td>Subtotal</td>
                  <td>:</td>
                  <td>{{presentPrice(Cart::subtotal())}}</td>
                </tr>
                <tr>
                  <td>Tax (Pajak 13%)</td>
                  <td>:</td>
                  <td>{{presentPrice(Cart::tax())}}</td>
                </tr>
                <tr>
                  <td>
                    <strong>Total</strong>
                  </td>
                  <td>:</td>
                  <td>
                    <strong>{{presentPrice(Cart::total())}}</strong>
                  </td>
                </tr>
                <tr>
                  <td><hr></td>
                </tr>
                @if (session()->has('coupon'))
                <tr class="h6">
                  <td>Diskon({{session()->get('coupon')['name']}})</td>
                  <td>:</td>
                  <td> -{{presentPrice($discount)}}</td>
                </tr>
                <tr>
                  <td>
                    <form action="{{route('coupon.destroy')}}" method="post">
                      {{csrf_field()}}
                      {{method_field('delete')}}
                      <button type="submit" class="btn btn-xs btn-danger m-bot-1 m-top-1">Hapus Kupon</button>
                    </form>
                  </td>
                </tr>
                <tr class="h5">
                  <td>Subtotal setelah diskon</td>
                  <td>:</td>
                  <td>{{presentPrice($newSubtotal)}}</td>
                </tr>
                <tr class="h5">
                  <td>Pajak setelah diskon</td>
                  <td>:</td>
                  <td>{{presentPrice($newTax)}}</td>
                </tr>
                <tr class="h4 font-bold">
                  <td>Total setelah diskon</td>
                  <td>:</td>
                  <td class="font-bold">{{presentPrice($newTotal)}}</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
        <hr>
        @if (!session()->has('coupon'))
        <div class="row">
          <div class="col-md-6">
            <div class="f-15">Punya Kode Kupon?</div>
                <form action="{{route('coupon.store')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="coupon_code" id="coupon_code" class="sky-form sty-one">
                <button type="submit" class="btn btn-primary">Apply</button>
              </form>
          </div>
        </div>
        @endif
        <div class="row m-top-4">
          <div class="col-md-6">
            <div class="m-bot-1">Metode Pembayaran :</div>
            <img src="{{URL::asset('images/mastercard.png')}}" alt="pay_card" style="width: 60px; height: 40px">
            <img src="{{URL::asset('images/visa.png')}}" alt="pay_card" style="width: 60px; height: 40px">
            <img src="{{URL::asset('images/america.png')}}" alt="pay_card" style="width: 60px; height: 40px">
            <img src="{{URL::asset('images/discover.png')}}" alt="pay_card" style="width: 60px; height: 40px">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 
@section('extra-js')
<script>
  (function () {
    // Create a Stripe client.
    var stripe = Stripe('pk_test_AqRYzm1MVVnSTgmstxyBrJMu');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
      style: style,
      hidePostalCode: true
    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function (event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
      event.preventDefault();


      // Disable the submit button to prevent repeated clicks
      document.getElementById('complete-order').disabled = true;

      var options =
        {
          name: document.getElementById('name_on_card').value,
          address_line1: document.getElementById('address').value,
          address_city: document.getElementById('city').value,
          address_state: document.getElementById('province').value,
          address_zip: document.getElementById('postalcode').value
        }

      stripe.createToken(card, options).then(function (result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;

          // enable the submit button to prevent repeated clicks
          document.getElementById('complete-order').disabled = false;

        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }
  })();
</script> 
@endsection