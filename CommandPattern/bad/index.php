<?php

require_once 'Waiter.php';

function main() {
    $waiter = new Waiter();
    $waiter->takeOrder("Pizza");
    $waiter->takeOrder("Pasta");
    $waiter->takeOrder("Sosis");
    $waiter->sendOrdersToKitchen();
}

main();
