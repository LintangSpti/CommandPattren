<?php

require_once 'Chef.php';
require_once 'Command.php';
require_once 'OrderCommand.php';
require_once 'Waiter.php';

function main() {
    $chef = new Chef();
    $waiter = new Waiter();
    
    $order1 = new OrderCommand($chef, "Pizza");
    $order2 = new OrderCommand($chef, "Pasta");

    
    $waiter->takeOrder($order1);
    $waiter->takeOrder($order2);
    
    $waiter->sendOrdersToKitchen();
}

main();
?>
