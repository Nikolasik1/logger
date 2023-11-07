<?php

namespace app\modules\logger\loggers;

use Yii;

class FileLogger extends BaseLogger
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        $this->setType('file');
    }

    public function send(string $message): void
    {
        $filePath = Yii::getAlias('@app') . $this->filePath . date('Y-m-d') . '.log';
        $message = date('H:i:s') . " - " . $message . PHP_EOL;
        file_put_contents($filePath, $message , FILE_APPEND);
    }
}