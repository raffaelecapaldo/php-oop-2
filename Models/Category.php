<?php 
class Category{
    public $name, $icon;

    /**
     * Summary of Category
     *
     * @param string $name
     * @param string $icon
     */
    function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
}