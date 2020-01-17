<?php

class Request
{
    public function get(string $key, ?string $type= null)
    {
        if (isset($_POST[$key])) { 
            if($type) {
                if ($type === 'bool'){
                    return (bool) $_POST[$key];
                }
            }

            return $_POST[$key];
        }
        
        return '';
    }
}

?>