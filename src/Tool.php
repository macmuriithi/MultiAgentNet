class Tool {
    protected $name;
    protected $parameters;

    public function __construct($name) {
        $this->name = $name;
        $this->parameters = [];
    }

    public function getName() {
        return $this->name;
    }

    public function setParameters($parameters) {
        $this->parameters = $parameters;
    }

    public function performAction() {
        // Implement tool-specific action logic using $this->parameters
    }

    public function getOutput() {
        // Implement logic to provide tool-specific output
    }
}
