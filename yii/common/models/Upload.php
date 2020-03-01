<?php


namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Upload
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
        ];
    }

}