<?php

require_once 'Order.php';

class Waiter {
    private $orders = [];

    public function takeOrder($details) {
        $order = new Order($details);
        $this->orders[] = $order;
    }

    public function sendOrdersToKitchen() {
        foreach ($this->orders as $order) {
            $order->execute();
        }
        $this->orders = [];
    }
}
