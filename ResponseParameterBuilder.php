<?php

namespace TwinElements\Component\ResponseParameterBuilder;

class ResponseParameterBuilder
{
    private array $responseParameters;

    public function __construct()
    {
        $this->responseParameters = [];
    }

    public function addParameter(string $key, $value): self
    {
        $this->responseParameters[$key] = $value;

        return $this;
    }

    public function getParameters(): array
    {
        return $this->responseParameters;
    }
}
