<?php

interface SuscriberInterface
{
    public function setEmail($email);
	public function getEmail();
	public function suscribe(PlanInterface $plan);
	public function cancel();
	public function getPlan();
}