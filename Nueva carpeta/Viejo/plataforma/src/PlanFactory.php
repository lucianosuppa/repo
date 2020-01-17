<?php 

namespace mixplay\plataforma;

use InvalidArgumentException;

class PlataformaFactory 
{
	const TRIALPLAN= 1;
	const PAIDPLAN = 2;
    const GIFTPLAN = 3;
    
    public static $COUNTER = 0;
    
    private function __construct() {}
        
	public static function createPlan(int $type)
	{
		self::$COUNTER++;
		if ($type == self::TRIALPLAN) {
			return new TrialPlan;
		}
		if ($type == self::PAIDPLAN) {
			return new PaidPlan;
		}
		if ($type == self::GIFTPLAN) {
			return new GiftPlan;
		}
		throw new InvalidArgumentException('Missing plan type, given ' . $type);		
	}
}