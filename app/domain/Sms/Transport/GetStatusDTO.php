<?php

namespace Domain\Sms\Transport;

class GetStatusDTO {
    private string $action;
    private string $token;
    private string $activation;

    function __construct($activation, $token)
    {
        $this->action = 'getStatus';
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
