<?php

namespace App\Views;

abstract class View
{
    public function render()
    {
        return $this->getViewString();
    }

    abstract protected function getViewString();
}