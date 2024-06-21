<?php

class Order {
    private $details;

    public function __construct($details) {
        $this->details = $details;
    }

    public function execute() {
        // Directly calling the kitchen to execute order
        echo "Order is being processed: " . $this->details . "<br>";
    }
}
