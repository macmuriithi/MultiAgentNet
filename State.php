<?php 
class State {
    private $name;
    private $components;

    public function __construct($name) {
        $this->name = $name;
        $this->components = [];
    }

    public function addComponent($component) {
        // Add a component to the state
        $this->components[] = $component;
    }

    public function getComponents() {
        // Get the components associated with the state
        return $this->components;
    }
}
