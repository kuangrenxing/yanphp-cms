<?php
/**
* @link http://www.yanphp.com/
* @copyright Copyright (c) 2016 YANPHP Software LLC
* @license http://www.yanphp.com/license/
*/
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdminAction */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Create Admin Action';
$this->params['breadcrumbs'][] = ['label' => 'Admin Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('breadcrumb')?>
<div class="row">
    <div class="col-md-12">
        <div class="y_panel">
            <div class="y_content">
                <div class="admin-action-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                    <?php
                    $roles = \common\models\AdminRole::find()
                            ->asArray()
                            ->all();
                    ?>
                    <?= $form->field($model, 'role_id')->dropDownList(\yii\helpers\ArrayHelper::map($roles,'id','name')) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 're_password')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Create'): Yii::t('app','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>


