<?php

/**
 * @var $attribute_name string
 * @var $form \yii\widgets\ActiveForm
 * @var $label string
 * @var $model \app\properties\AbstractModel
 * @var $multiple boolean
 * @var $property_id integer
 * @var $property_key string
 * @var $this \app\properties\handlers\Handler
 * @var $values array
 */

?>
<?if ($property_key == 'captcha'):?>
    <?= $form->field($model, $property_key)->widget(\yii\captcha\Captcha::className(), ['captchaAction' => '/default/captcha',]);?>
<?elseif($property_key == 'reCaptcha'):?>
    <?= $form->field($model, $property_key)->widget(
        \app\web\theme\module\components\recaptcha\ReCaptcha::className(),
        [
            'theme' => 'light'
        ]
    )
    ?>
<?else:?>
    <?= $form->field($model, $property_key);?>
<?endif;?>
