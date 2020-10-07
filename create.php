<?php
use yii\widgets\ActiveForm ;
use frontend\models\Avatar ;
use yii\helpers\Html ;
?>

<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data'] 
 ]) ; ?>

    <?= $form->field($avatar, 'image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?> 
