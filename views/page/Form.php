<title>Contact Us</title>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<style>
     #content_box {
        max-width: 1200px;
        padding-top: 30px;
        margin: 0 auto 150px;
    }

    #container {
        min-height: auto;
    }

</style>
<div id='content_box'>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['method' => 'post']])  ?>

<?= $form->field($model, 'surname') ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'patronymic') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'phone')->input('tel')->textInput(['placeholder' => '89991234567']) ?>
<?= $form->field($model, 'message')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>

<?php ActiveForm::end()?>
</div>