<?php

namespace app\modules\logger\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Logs extends ActiveRecord
{
    public function attributeLabels(): array
    {
        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }
}