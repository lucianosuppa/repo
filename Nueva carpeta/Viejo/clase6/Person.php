<?php

class Person
{
    use BreatherTrait;

    public function __set($prop, $value)
    {
        if (property_exists($this,$prop))
        {
            $this->{$prop} = $value;
        } else {
            throw new \Exception('No se puede escribir la propiedad'. $prop);
        }
    }
}