

<?php use yii\widgets\ActiveForm;
use yii\helpers\Html;?>

<?php $form=ActiveForm::begin()?>

<head>
    <title>Калькулятор</title>
</head>

<?= $form->field($model,'firstCount')?>
<?= $form->field($model,'secondCount')?>
<?= $form->field($model,'sign')?>

<?//= HTML::Button('+',['value'=>'add','class' => 'btn btn-primary','name'=>'submit','onclick'=>"sign('+')"]) ?>
<?//= HTML::submitButton('-',['value'=>'sub','class' => 'btn btn-info','name'=>'submit','onclick'=>""]) ?>
<?//= HTML::submitButton('*',['value'=>'mul','class' => 'btn btn-danger','name'=>'submit','onclick'=>""]) ?>
<?//= HTML::submitButton('/',['value'=>'del','class' => 'btn btn-warning','name'=>'submit','onclick'=>""]) ?>
<br>

<?= HTML::submitButton('Готово',['value'=>'done','name'=>'submit','class'=>'btn btn-success center-block ']) ?>

<br>
<br>

<?php if(Yii::$app->session->hasFlash('res')){
    echo Yii::$app->session->getFlash('res');
}
?>



<?php ActiveForm::end()?>

</html>

