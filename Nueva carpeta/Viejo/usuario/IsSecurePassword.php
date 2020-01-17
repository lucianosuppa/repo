<?php

class IsSecurePassword implements ValidationRuleInterface
{
    private $value;
    private $regex = '';

    public function setValue ($value)
    {
        $this->value = $value;
        return $this;
    }


    public function isValid () : bool
    {
        $regex = '/^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/';

        return (bool) preg_match_all ($regex, $this->value);
    }

    public function getMessage() : string
    {
        return 'Completa este campo de IsSecurePassword';
    }
}