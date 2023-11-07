<?php

namespace app\modules\logger\components;

use app\modules\logger\interfaces\LoggerInterface;
use app\modules\logger\loggers\DatabaseLogger;
use app\modules\logger\loggers\EmailLogger;
use app\modules\logger\loggers\FileLogger;

class LoggerFactory
{
    public static function createLogger(string $type, array $config): LoggerInterface
    {
        switch ($type) {
            case 'email':
                return new EmailLogger($config['email']);
            case 'database':
                return new DatabaseLogger($config['database']);
            case 'file':
                return new FileLogger($config['file']);
            default:
                throw new \InvalidArgumentException("Logger type '$type' is not supported.");
        }
    }
}