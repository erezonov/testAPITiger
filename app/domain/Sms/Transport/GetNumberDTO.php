<?php

namespace domain\Sms\Transport;

class GetNumberDTO {
    private $action;
    private $country;
    private $service;
    private string $token;
    private $rentTime;

    function __construct($country, $service, $token, $rentTime = 0 )
    {
        $this->action = 'getNumber';
        $this->country = $country;
        $this->service = $service;
        $this->token = $token;
        $this->rentTime = $rentTime;
    }

    public function toArray()
    {
        return [
            'action' => $this->action,
            'country' => $this->country,
            'service' => $this->service,
            'token' => $this->token,
            'rentTime' => $this->rentTime
        ];
    }
}
