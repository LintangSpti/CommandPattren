<?php

class Waiter {
    private $orders = [];

    public function takeOrder(Command $command) {
        $this->orders[] = $command;
    }

    public function sendOrdersToKitchen() {
        foreach ($this->orders as $command) {
            $command->execute();
        }
        $this->orders = [];
    }
}

?>
