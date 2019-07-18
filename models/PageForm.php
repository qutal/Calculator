<?php


namespace app\models;


use yii\base\Model;

class PageForm extends Model
{

    public $firstCount;
    public $secondCount;
    public $sign;


    public function attributeLabels()
    {
        return [
            'firstCount'=>'Первое число',
            'secondCount'=>'Второе число',
            'sign'=>'Знак'
        ];
    }

    public function rules()
    {
        return[
            [['firstCount','secondCount','sign'],'required'],
            [['firstCount','secondCount'],'trim'],
            [['firstCount','secondCount'],'string','max'=>5],
            [['firstCount','secondCount'],'integer'],
            ['sign','string','max'=>1],
            ['sign','myRule'],

        ];
    }

    public function myRule($attr){
        if(!in_array($this->$attr,['+','-','*','/'])){
            $this->addError($attr,'Можно записывать только +,-,*,/');
        }
    }

}