<?php

namespace app\modules\logger\loggers;

use app\modules\logger\models\Logs;
class DatabaseLogger extends BaseLogger
{
    private $table;

    public function __construct(array $dbConfig)
    {
        $this->table = $dbConfig['table'];
        $this->setType('database');
    }

    public function send(string $message): void
    {
        if ($this->table != 'Logs') {
            return;
        }

        $table = new Logs();
        $table->text = $message;
        $table->save();
    }
}