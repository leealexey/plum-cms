<?php

use app\modules\admin\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var $this yii\web\View
 * @var $model Category
 * @var $form yii\widgets\ActiveForm
 */
?>

<div class="content-form">
    <?php $form = ActiveForm::begin(); ?>
  <div class="panel panel-default">
    <div class="panel-body">
        <?= Html::submitButton('Применить', ['class' => 'btn btn-primary', 'name' => 'action', 'value' => 'apply']) ?>
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'name' => 'action', 'value' => 'save']) ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-4"><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-4">
            <?= $form->field($model, 'parent_id')->dropDownList(Category::dropdownList(), ['prompt' => '']) ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'status')->checkbox(['checked' => true]) ?>
        </div>
      </div>
    </div>
  </div>
    <?php ActiveForm::end(); ?>
</div>