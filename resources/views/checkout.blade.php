@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <h2>Check-Out</h2>

        <form id="payment-form">
            <div class="form-row">
              <label for="name">
                Name
              </label>
              <input id="name" name="name" placeholder="Jenny Rosen" required>
            </div>
          
            <div class="form-row">
              <label for="ideal-bank-element">
                iDEAL Bank
              </label>
              <div id="ideal-bank-element">
                <!-- A Stripe Element will be inserted here. -->
              </div>
            </div>
          
            <button>Submit Payment</button>
          
            <!-- Used to display form errors. -->
              <div id="error-message" role="alert"></div>
          </form>
        </div>
    </div>

    {{-- JAVASCRIPT NEED TO BE REPLACED --}}
    <script>
        (function{
            // Create a Stripe client.
// Note: this merchant has been set up for demo purposes.
var stripe = Stripe('sk_test_51I2n7jC5MckuhAFNCZJ0VVq1H8wiqiVM2cYKVJKkrnVg3xlhCDaLh21smBFPilqQDTc3JcTfExGDDf2MhcqKzrjD00j5oenpcg');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    padding: '10px 12px',
    color: '#32325d',
    fontFamily: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    },
  },
  invalid: {
    color: '#fa755a',
  }
};

// Create an instance of the idealBank Element.
var idealBank = elements.create('idealBank', {style: style});

// Add an instance of the idealBank Element into the `ideal-bank-element` <div>.
idealBank.mount('#ideal-bank-element');
        })
    </script>

@endsection