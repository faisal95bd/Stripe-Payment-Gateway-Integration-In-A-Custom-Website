<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_QOEPKH39wpj8mSErJYKcdnO600xv8VCwTq",
  "publishable_key" => "pk_test_oS6VU2vG4z3P1C3mlMuZwdia004n6GoBT4",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>