<?php

namespace frontend\controllers;
use frontend\models\Avatar ;
use Yii ;
use yii\web\UploadedFile ;

class AvatarController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $avatar = new Avatar() ;
      
        if ($avatar->load(Yii::$app->request->post())) {
            
            $images = UploadedFile::getInstances($avatar, 'image') ;
            
            foreach($images as $image) {
                $image->saveAs('@app/views/avatar/uploads/'.$image->baseName . '.' . $image->extension) ;
            }
            
            $avatar->image = $image->baseName . '.' . $image->extension ;
            
            if ($avatar->save()) {
                return $this->redirect('site/index') ;
            }
        }
            return $this->render('create', [
                'avatar' => $avatar,
            ]);
    }
    
} // End of the controller class
