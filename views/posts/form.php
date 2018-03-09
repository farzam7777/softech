<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	/* @var $this yii\web\View */
?>

<div class="container">
    <div class="row">
        <div class="col-md-5">

            <?php $form = ActiveForm::begin(['id' => 'create-post', 'method' => 'post', 'options' => ['class' => 'form-horizontal'] ]) ?>

                <?= $form->field($post, 'title') ?>
                <?= $form->field($post, 'description')->textarea() ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
                </div>
            <?php ActiveForm::end() ?>
        </div>
        <div class="col-md-7"></div>
    </div>
</div>