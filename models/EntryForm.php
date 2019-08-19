<?php


namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class EntryForm extends ActiveRecord
{
    const SCENARIO_ORDER = 'order';

    public static function tableName()
    {
        return "orders";
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_ORDER => ['domain', 'registr', 'success', 'design', 'admin', 'speed', 'usability', 'ranging', 'else_problem', 'name', 'email', 'phone', 'sex', 'age', 'middle', 'top', 'else_class', 'locations']
        ];
    }
}