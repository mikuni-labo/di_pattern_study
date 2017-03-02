<?php
namespace NDI\App;

class Container
{
    private $container;
    
    public function __construct(/*\Pimple $container*/)
    {
        $this->container = new \Pimple();
    }
    
    public function addContainer($key, $service)
    {
        $this->container[$key] = $service;
        return $this;
    }
    
    public function getContainer($key)
    {
        return $this->container[$key];
    }
}