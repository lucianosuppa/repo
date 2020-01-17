<?php

interface SuscriptionInterface
{
    public function setSuscriber(SuscriberInterface $s);
	public function setPlan (PlanInterface $s);
	public function getCreatedDate();
	public function getExpirationData();
}