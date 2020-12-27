<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkout()
    {   
        // Enter Your Stripe Secret        		
		Stripe\Stripe::setApiKey(env('sk_test_51I2n7jC5MckuhAFNCZJ0VVq1H8wiqiVM2cYKVJKkrnVg3xlhCDaLh21smBFPilqQDTc3JcTfExGDDf2MhcqKzrjD00j5oenpcg'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

    public function afterPayment()
    {   
        echo 'Payment Has been Received';
    }
}
