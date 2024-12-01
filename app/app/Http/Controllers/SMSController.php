<?php

namespace App\Http\Controllers;

use Domain\Sms\Communication\SmsWeb;
use Domain\Sms\Transport\CancelNumberDTO;
use domain\Sms\Transport\GetNumberDTO;
use Domain\Sms\Transport\GetSMSDTO;
use Domain\Sms\Transport\GetStatusDTO;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function __construct()
    {
        $this->controller = new SmsWeb();
    }
    /*
     * Как вариант можно разместить валидацию в CustomRequest
     */
    public function getNumber(Request $request)
    {
        $return = $this->controller->getNumber(
            new GetNumberDTO(
                $request->country,
                $request->service,
                config('token')
                )
        );

        return $return;
    }

    public function getSms(Request $request)
    {
        $return = $this->controller->getSMS(
            new GetSMSDTO(
                $request->activation,
                config('token')
            )
        );

        return $return;
    }

    public function cancelNumber(Request $request)
    {
        $return = $this->controller->cancelNumber(
            new CancelNumberDTO(
                $request->activation,
                config('token')
            )
        );

        return $return;
    }

    public function getStatus(Request $request)
    {
        $return = $this->controller->getStatus(
            new GetStatusDTO(
                $request->activation,
                config('token')
            )
        );

        return $return;
    }
}
