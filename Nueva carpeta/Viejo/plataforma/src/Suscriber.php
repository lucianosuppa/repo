<?php

namespace mixplay\plataforma;

class Suscriber implements SuscriberInterface
{


	private $suscriber = [];

	public function add(PlanInterface $suscriber)
	{
		$this->suscriber[] = $suscriber;
	}


	public function setEmail($email)
	{
        $this->email = $email;
        return $this;
	}


	public function getEmail()
	{
		return email($this->suscriber);
	}


	public function suscribe(PlanInterface $plan)
	{
		$this->suscribe = $suscribe;
	}


	public function cancel()
	{
			$this->suscriber = [];
			return $this;
	}


	public function getPlan(PlanFactory $plan)
	{
		return plan($this->suscriber);
	}

}

?>