<?php

class OrderCommand implements Command {
    private $chef;
    private $details;

    public function __construct(Chef $chef, string $details) {
        $this->chef = $chef;
        $this->details = $details;
    }

    public function execute() {
        $this->chef->cook($this->details);
    }
}

?>
