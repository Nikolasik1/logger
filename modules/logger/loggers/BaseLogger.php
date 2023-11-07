<?php

namespace app\modules\logger\loggers;

use app\modules\logger\interfaces\LoggerInterface;

abstract class BaseLogger implements LoggerInterface
{
    private $type;

    public function sendByLogger(string $message, string $loggerType): void
    {
        if ($loggerType === $this->type) {
            $this->send($message);
        }
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    abstract public function send(string $message): void;
}