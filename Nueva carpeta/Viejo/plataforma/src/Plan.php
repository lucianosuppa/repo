<?php

namespace mixplay\plataforma;

class PlanType implements PlanInterface
{

        protected $name;
        protected $date;
        protected $price;
    
        public function __construct(Suscriptorinterface $suscriptor = null)
        {
            if ($suscriptor) {
                $this->setsuscriptor($suscriptor);
            }
        }
    
        public function getName($name)
        {
            $this->name = $name;

            return $this;
        }
        
        public function getPeriod($date)
        {
            $this->date = $date;

            return $this;
        }
    
        public function getPrice($price)
        {
            $this->price = $price;

            return $this;
        }

        public function search()
        {
            return array_filter($this->plan->getName(), function (PlanInterface $name) {
                return $name;
            });
        }
    
}

?>