<?php

namespace Domain\Sms\Communication;

use domain\Sms\Business\EntitySms;
use Domain\Sms\Transport\CancelNumberDTO;
use domain\Sms\Transport\GetNumberDTO;
use Domain\Sms\Transport\GetSMSDTO;
use Domain\Sms\Transport\GetStatusDTO;

class SmsWeb
{
    private $business;
    public function __construct()
    {
        $this->business = new EntitySms();
    }
    public function getNumber(GetNumberDTO $request)
    {
        return $this->business->getNumber($request);
    }

    public function cancelNumber(CancelNumberDTO $request)
    {
        return $this->business->cancelStatus($request);
    }
    public function getStatus(GetStatusDTO $request)
    {
        return $this->business->getStatus($request);
    }
    public function getSMS(GetSMSDTO $request)
    {
        return $this->business->getSms($request);
    }
}
