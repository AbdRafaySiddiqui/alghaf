<?php
require('stripe-php-master/init.php');

$publishKey="pk_test_51KuLLlJAlBbGYac4E6tlZXGwDoHMBljMixN6JURGEPbIo2a4rw4Xyp19Sk63L3cjYevFG7SjohFDerCIzxTxePRQ00t8atsqnp";
$secretKey="sk_test_51KuLLlJAlBbGYac4LBOHZTa2AP0TSZPc2IhELpr8kO6Q8aq5bTwQEXI7W0wP91GVsMH1XCabLemADX6hAc7MrWSG00AfPPkJLz";

\Stripe\Stripe::setApiKey($secretKey);
?>