<?php


namespace App\Data\DTO;


class Param
{
    private array $props = [];

    public function __construct(array $param = [])
    {
        $this->props = $param;
    }

    public function getParams(): string
    {
        return '&' . http_build_query($this->props, '', '&');
    }

    public function addParameter(array $param)
    {
        $this->props[] = $param;
    }

    public function buildQueryString()
    {
        return $this->getParams();
    }
}
