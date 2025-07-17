<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_YourSecretKeyHere');

try {
    $charge = \Stripe\Charge::create([
        'amount' => 1000,
        'currency' => 'usd',
        'description' => 'Example charge',
        'source' => $_POST['stripeToken'],
    ]);

    echo "<h3>Payment successful! ✅</h3>";
} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Error: " . $e->getMessage();
}
