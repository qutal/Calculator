<?php


namespace app\models;


use yii\db\ActiveRecord;

class Table extends ActiveRecord
{
    public static function tableName()
    {
        return 'calculator';
    }
}