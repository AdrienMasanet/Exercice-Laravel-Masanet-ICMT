<?php

namespace App\Helpers;

class DashboardMenuItem
{
    private $name;
    private $route;
    private $icon;
    private $class;

    public function __construct($name, $route = null, $icon = null, $class = null)
    {
        $this->setName($name);
        $this->setRoute($route);
        $this->setIcon($icon);
        $this->setClass($class);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
        return $this;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function setRoute($newRoute)
    {
        $this->route = $newRoute;
        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon($newIcon)
    {
        $this->icon = $newIcon;
        return $this;
    }

    public function setClass($newClass)
    {
        $this->class = $newClass;
        return $this;
    }
}
