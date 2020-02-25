<?php


namespace App\Service;

use App\Data\DTO\Param;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class ParamService
{
    private ?Request $request;

    public function __construct(RequestStack $request)
    {
        $this->setRequest($request->getCurrentRequest());
    }

    public function setRequest(?Request $request)
    {
        $this->request = $request ?? null;
    }

    public function getParam()
    {
        if (!$this->request) {
            return new Param([]);
        }

        return new Param(
            $this->request->query->all()
        );
    }
}
