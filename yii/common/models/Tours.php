<?php

namespace common\models;
use yii\helpers\BaseFileHelper;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "Tours".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $start
 * @property string $end
 * @property float $price
 * @property string $direction
 * @property string $photo_src
 */
class Tours extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'start', 'end', 'price', 'direction', 'photo_src'], 'required'],
            [['description', 'direction'], 'string'],
            [['start', 'end'], 'safe'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 50],
            [['photo_src'], 'string', 'max' => 150],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    public function upload()
    {
            $filename = '/'.strtotime('now').'_'.Yii::$app->getSecurity()->generateRandomString(2). '' . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs(Yii::getAlias('@images').$filename);
            $this->photo_src = $filename;
            return true;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Описание',
            'start' => 'Отпрвление',
            'end' => 'Прибытие',
            'price' => 'Цена',
            'direction' => 'Направление',
            'photo_src' => 'Картинка',
            'imageFile' => 'Картинка',
        ];
    }
}
