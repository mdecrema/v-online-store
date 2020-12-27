<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51I2n7jC5MckuhAFNCZJ0VVq1H8wiqiVM2cYKVJKkrnVg3xlhCDaLh21smBFPilqQDTc3JcTfExGDDf2MhcqKzrjD00j5oenpcg');
        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('orderCompleted', compact('intent'));

    }

    public function afterPayment()
    {   
        echo 'Payment Has been Received';
    }
}
