# MultiAgentNet

MultiAgentNet is an open-source framework designed to facilitate autonomous multi-agent communication and execution. It provides developers with a powerful platform to create intelligent agents equipped with both long-term and short-term memory capabilities, enabling complex interactions and coordination in a variety of scenarios.

## Components

### Agent

An `Agent` represents an autonomous entity with the capability to make decisions, take actions, and interact with the environment. Each agent can maintain both long-term and short-term memory, allowing them to store information and experiences for future reference.

### Environment

The `Environment` module serves as a simulated context in which agents operate. It provides observations to agents, receives their actions, and may undergo changes based on agent interactions. The environment is crucial for testing, evaluating, and simulating real-world scenarios for agent behavior.

### Standard Operational Procedures (SOP)

The SOP module, or Standard Operational Procedures, enables you to define states and state transitions for your agents. States represent specific conditions or phases in an agent's behavior. SOP allows you to orchestrate agent actions based on their current state, facilitating structured decision-making and coordination.

### State

A `State` in MultiAgentNet represents a particular condition or phase in an agent's behavior. Agents can transition between states based on predefined rules or conditions. States help organize and control agent decision-making, enabling them to adapt to changing circumstances effectively.

### Tool

A `Tool` is a versatile component that agents can use to perform specific actions or tasks. These tools extend agent capabilities and may include various resources or functionalities. For instance, an LLMTool can provide access to language models for natural language understanding and generation.

### LLMTool (Language Model Tool)

An `LLMTool` is a specialized tool that allows agents to interact with language models (LLMs). LLMTools enable agents to send instructions to LLMs and retrieve responses, making them valuable for tasks involving natural language processing and generation.

### Semantic Search

Semantic Search is a feature that leverages VectorDB for enhanced information retrieval. Agents can use Semantic Search to search for and retrieve relevant data and knowledge from both short-term and long-term memory. This capability supports informed decision-making by providing access to pertinent information.

# MultiAgentNet Framework Advantages

1. **Modularity and Separation of Concerns:**
   - The framework's modular design ensures that each component has a distinct responsibility, making it easier to maintain, extend, and understand. The SOP manages the agent's behavior and transitions between states, while the Environment handles the observation and modification of the environment. This separation promotes clarity and maintainability. Separating SOP and States allows for easier modification and extension of the agent's behavior. You can add or change states and define different SOPs without altering the core Environment logic. This modularity facilitates the development of diverse agent behaviors and strategies.

2. **Flexibility:**
   - It allows for the definition of different agents with various tools and behaviors, making it adaptable to a wide range of scenarios.

3. **Intelligent Tool Selection:**
   - The Language Model Manager (LLM) enables intelligent tool selection for AI agents, enhancing their decision-making capabilities based on observations.

4. **Memory Management:**
   - The framework supports both short-term and long-term memory management, aiding in retaining and retrieving information, which is crucial for agent behavior.

5. **Semantic Search Integration:**
   - Integration of semantic search enhances the capabilities of agents in recalling and utilizing past experiences and actions.

6. **Human and AI Interaction:**
   - The ability to configure agents as both human and AI promotes versatile simulations and interactions with the environment.

7. **Structured Agent Behavior:**
   - The Standard Operating Procedure (SOP) class structures agent behavior, allowing for the definition of states and their transitions, providing a clear path for implementing complex strategies.

8. **Simulation Control:**
   - The Moderator class manages the simulation's control flow, making it easy to run and manage simulations with multiple agents.
