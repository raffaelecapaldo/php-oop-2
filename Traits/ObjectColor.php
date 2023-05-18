<?php
trait ObjectColor
{
    protected $color;


    /**
     * Summary of setColor
     * Setter
     *
     * @param string $color
     * @return void
     */
    function setColor($color)
    {
        if (!ctype_alpha($color))
            throw new Exception("The color of the product: <span class='fw-bold'>$this->name</span> must be a word, not containing any number, but is is: <span class='fw-bold'>$color</span>" );
        else {
            $this->color = $color;
        }
    }

    /**
     * Summary of getColor
     * Getter
     *
     * @return string The color of the Product
     */
    function getColor()
    {
        if (isset($this->color))
        return "<p class='m-0 fw-bold'>Color: $this->color</p>";
        else {
            return '';
        }
    }
}

