<?php
class Updater {
    public function updateMemories(array $agents, $action) {
        // Implement logic to update the memory of each agent based on the action
        foreach ($agents as $agent) {
            $agent->updateMemory($action);
        }
    }
}
