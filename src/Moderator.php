<?php
class Moderator {
    private $sop;
    private $agents;
    private $environment;

    public function __construct($sop, $agents, $environment) {
        $this->sop = $sop;
        $this->agents = $agents;
        $this->environment = $environment;
    }

    public function runSimulation() {
        while (!$this->sop->isFinished()) {
            foreach ($this->agents as $agent) {
                $currentState = $this->sop->step($agent, $this->environment);

                // You can add further logic to manage the agents and their interactions here
            }
        }
    }
}
