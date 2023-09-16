class Environment {
    private $describer;
    private $order;
    private $selector;
    private $updater;
    private $visibility;

    public function __construct($describer, $order, $selector, $updater, $visibility) {
        $this->describer = $describer;
        $this->order = $order;
        $this->selector = $selector;
        $this->updater = $updater;
        $this->visibility = $visibility;
    }

    public function observe($agent) {
        // Use the describer to provide observations to the agent
        return $this->describer->describe($agent);
    }

    public function update($agent, $action) {
        // Use the updater to update the agent's memory based on the action
        $this->updater->update($agent, $action);
    }

    public function executeAgentsActions($agents) {
        // Use the order to determine the sequence of agent actions
        $orderedAgents = $this->order->orderAgents($agents);

        foreach ($orderedAgents as $agent) {
            // Use the selector to filter agent-generated messages
            $message = $this->selector->selectMessage($agent->generateMessage());
            
            // Use the visibility component to update agents' visibility
            $this->visibility->updateVisibility($agents, $agent, $message);
        }
    }
}
