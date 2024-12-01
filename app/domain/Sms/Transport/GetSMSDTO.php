<?php

namespace Domain\Sms\Transport;

class GetSMSDTO {
    private string $action;
    private string $token;
    private string $activation;

    function __construct($activation, $token)
    {
        $this->action = 'getSMS';
        $this->token = $token;
        $this->activation = $activation;
    }

    public function toArray()
    {
        return [
            'action' => $this->action,
            'token' => $this->token,
            'activation' => $this->activation
        ];
    }
}
