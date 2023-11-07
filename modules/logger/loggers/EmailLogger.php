<?php

namespace app\modules\logger\loggers;

class EmailLogger extends BaseLogger
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->setType('email');
    }

    public function send(string $message): void
    {
        mail($this->email, 'Log Message', $message . '" - "' . date('Y-m-d H:i:s'));
    }
}