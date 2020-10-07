<?php

namespace frontend\models;
use yii\web\UploadedFile ;
use Yii;

class Avatar extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'avatar';
    }

    public function rules()
    {
        return [
            
            [['image'], 'required'],
            [['image'], 'file', 'extensions'=>'jpg,jpeg,png'],
            // We can add this line as well for an additional security: 'mimeTypes' => 'image/jpg, image/jpeg, image/png'    
            //[['image'], 'file', 'extensions'=>'jpg,jpeg,png', 'maxFiles' => 5],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
        ];
    }

} // End

