<?php
class SOP {
    private $states;
    private $currentState;
    private $finished;

    public function __construct() {
        $this->states = [];
        $this->currentState = null;
        $this->finished = false;
    }

    public function addState($state) {
        // Add a state to the SOP
        $this->states[] = $state;
    }

    public function getNextStateAndAction($agent) {
        // Implement logic to determine the next state and action based on the agent's behavior
        // You can consider agent-specific strategies and state transitions here
        // For simplicity, let's assume random state transitions and actions for now
        $nextState = $this->getRandomState();
        $action = $agent->act(); // Agent performs an action based on its current state
        return [$nextState, $action];
    }

    private function getRandomState() {
        // Implement logic to select the next state randomly from available states
        // You can add more sophisticated state transition strategies here
        return $this->states[array_rand($this->states)];
    }

    public function step($agent, $environment) {
        // Implement the step method as described in the provided architecture
        // This includes state transitions and agent actions
        // Update $this->finished as needed
        $action = $agent->step($environment, $this);
        // Update the environment based on the agent's action
        $environment->update($agent, $action);

        return $this->currentState;
    }

    public function isFinished() {
        return $this->finished;
    }
}
