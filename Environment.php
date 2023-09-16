<?php
class Environment {
    private $describer;
    private $updater;

    public function __construct($describer, $updater) {
        $this->describer = $describer;
        $this->updater = $updater;
    }

    public function observe($agent) {
        // Use the describer to provide observations to the agent
        return $this->describer->describe($agent);
    }

    public function update($agent, $action) {
        // Use the updater to update the agent's memory based on the action
        $this->updater->update($agent, $action);
    }
}
