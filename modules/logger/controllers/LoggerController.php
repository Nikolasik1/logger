<?php

namespace app\modules\logger\controllers;

use app\modules\logger\components\LoggerFactory;
use Yii;
use yii\web\Controller;

class LoggerController extends Controller
{

    private $error = '';

    /**
     * @throws \Exception
     */
    public function actionLog(): string
    {
        $defaultLogger = Yii::$app->params['defaultLoggerType'];

        $message = $this->getMessageText($defaultLogger);
        $logger = LoggerFactory::createLogger($defaultLogger, Yii::$app->params['loggerTypes']);
        $logger->sendByLogger($this->getLogText(), $defaultLogger);

        return $this->render('index', ['message' => $message]);
    }

    public function actionLogTo(string $type = '')
    {
        if (!$this->isValidType($type)) {
            return $this->render('index', ['message' => $this->error]);
        }

        $message = $this->getMessageText($type);
        $logger = LoggerFactory::createLogger($type, Yii::$app->params['loggerTypes']);
        $logger->sendByLogger($this->getLogText(), $type);

        return $this->render('index', ['message' => $message]);
    }

    public function actionLogToAll()
    {
        $message = "";

        $loggerTypes = array_keys(Yii::$app->params['loggerTypes']);
        $logText = $this->getLogText();
        foreach ($loggerTypes as $type) {
            $logger = LoggerFactory::createLogger($type, Yii::$app->params['loggerTypes']);
            $logger->sendByLogger($logText, $type);
            $message .= "'" . $logText . "' was sent via " . $type . ' ';
        }

        return $this->render('index', ['message' => $message]);
    }

    private function getDate(): string
    {
        return date('Y-m-d H:i:s');
    }

    private function isValidType(string $type): bool
    {
        $result = true;
        $loggerTypes = Yii::$app->params['loggerTypes'];

        if (empty($type)) {
            $this->error = 'type is empty';
            $result = false;
        }

        if (!in_array($type, array_keys($loggerTypes))) {
            $this->error = 'Logger type is not supported';
            $result = false;
        }

        return $result;
    }

    /**
     * @throws \Exception
     */
    private function getMessageText(string $type): string
    {
        $textLog = $this->getLogText();
        return $this->getDate() . " - '" . $textLog . "' was sent via " . $type;
    }

    private function getLogText(): string
    {
        // - create random text
        return bin2hex(random_bytes(10));
    }
}