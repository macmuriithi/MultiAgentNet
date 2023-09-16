<?php
class Describer {
    public function describe(Environment $environment, Agent $agent) {
        // Implement logic to provide a description of the environment
        // at each turn for the given agent
        return "Description of the environment for Agent: " . $agent->getId();
    }
}
