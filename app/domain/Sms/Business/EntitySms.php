<?php

namespace domain\Sms\Business;

use Domain\Sms\Transport\CancelNumberDTO;
use domain\Sms\Transport\GetNumberDTO;
use Domain\Sms\Transport\GetSMSDTO;
use Domain\Sms\Transport\GetStatusDTO;

/*
 * В теории мо
 */

class EntitySms
{

    const URL = 'https://postback-sms.com/api/';

    public function getStatus(GetStatusDTO $DTO)
    {
        $res = file_get_contents(self::URL . "?" . http_build_query($DTO->toArray()));
        $result = json_decode($res);
        return $result;
    }

    public function getSms(GetSMSDTO $DTO)
    {
        $res = file_get_contents(self::URL . "?" . http_build_query($DTO->toArray()));
        $result = json_decode($res);
        return $result;
    }

    public function cancelStatus(CancelNumberDTO $DTO)
    {
        $res = file_get_contents(self::URL . "?" . http_build_query($DTO->toArray()));
        $result = json_decode($res);
        return $result;
    }

    public function getNumber(GetNumberDTO $numberDTO)
    {
        $res = file_get_contents(self::URL . "?" . http_build_query($numberDTO->toArray()));
        $result = json_decode($res);
        return $result;
    }
}
