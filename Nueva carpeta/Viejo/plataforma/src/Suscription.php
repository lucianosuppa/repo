<?php

namespace mixplay\plataforma;

class Suscription implements SuscriptionInterface
{

    public function setSuscriber(SuscriberInterface $s)
    {
        $this->s = $s;
        return $this;
    }


    public function setPlan (PlanInterface $s)
    {
        $this->s = $s;
        return $this;
    }
    

    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    

    public function getExpirationData()
    {
        return $this->expirationData;
    }

}


?>