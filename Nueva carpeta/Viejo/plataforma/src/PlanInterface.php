<?php

interface PlanInterface
{
    public function getName($name);
	public function getPeriod($date);
    public function getPrice($price);
}

?>