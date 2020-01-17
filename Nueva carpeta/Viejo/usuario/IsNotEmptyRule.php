<?php

require 'ValidationRuleInterface.php';

class IsNotEmptyRule implements ValidationRuleInterface
{
    private $value;

    public function setValue($value)
    {
        if (is_string($value)) {
            $value = trim($value);
        }

        if (is_array($value)) {
            $value = $value;
        }
        return $this;
    }

    public function isValid() : bool
    {
        return ! empty($value);
    }

    public function getMessage() : string
    {
        return 'Este campo de IsNotEmptyRule debe set completado';
    }
}