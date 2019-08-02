<?php
    require_once('stripe-php-6.24.0/init.php');

    $stripe = [
        "secret_key"      => "sk_test_gqh6m9WLQtQGOq1pNbdsodFu",
"publishable_key" => "pk_test_BDYYezdP0kRNtXlzgrEaDZXD",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);

$pid = $_GET['pid'];
$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];

$customer = \Stripe\Customer::create([
'email' => $email,
'source'  => $token,
]);

\Stripe\Subscription::create([
"customer" => $customer->id,
"items" => [
[
"plan" => "plan_FXNnkiOEovvVeJ",
],
]
]);
?>


