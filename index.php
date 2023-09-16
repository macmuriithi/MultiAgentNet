<?php
//Include Environment,SOP,State,LLM,Semantic Search,Tool,Agent
require_once 'src/Agent.php';
require_once 'src/SOP.php';
require_once 'src/State.php';
require_once 'src/Environment.php';
require_once 'src/LLM.php';
require_once 'src/Tool.php';
require_once 'src/SemanticSearch.php';
$environment = new Environment(/* provide components */);
$sop = new SOP();
$llm = new LLM(); // Initialize the Language Model Manager
$semanticSearch = new SemanticSearch(); // Initialize Semantic Search

$llmTool = new Tool("LLMTool");
$semanticSearchTool = new Tool("SemanticSearchTool");

$agent1 = new Agent([$llmTool], false, $semanticSearch, $llm); // Agent 1 with LLMTool and Semantic Search
$agent2 = new Agent([$semanticSearchTool], false, $semanticSearch, $llm); // Agent 2 with SemanticSearchTool and Semantic Search
$agent3 = new Agent([], true, $semanticSearch, $llm); // Agent 3 as a human with Semantic Search

$sop->addState(new State("State 1"));
$sop->addState(new State("State 2"));

$moderator = new Moderator($sop, [$agent1, $agent2, $agent3], $environment);

$moderator->runSimulation();
