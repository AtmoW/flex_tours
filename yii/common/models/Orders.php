<?php

namespace common\models;

use Yii;
use udokmeci\yii2PhoneValidator\PhoneValidator;

/**
 * This is the model class for table "Orders".
 *
 * @property int $id
 * @property int $tour_id
 * @property int $phone
 * @property string $name
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tour_id', 'phone', 'name'], 'required'],
            [['tour_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_id' => 'Тур',
            'phone' => 'Номер телефона',
            'name' => 'Имя',
        ];
    }
}
