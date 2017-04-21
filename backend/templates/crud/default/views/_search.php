<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$model = new $generator->modelClass();
echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<link rel="stylesheet" href="<?='<?='?> Yii::$app->request->baseUrl;?>/css/search-form.css">

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">

    <?= "<?php " ?>$form = ActiveForm::begin([
        // 'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?php
$count = 0;
foreach ($generator->getColumnNames() as $attribute) {
    if (++$count < 6) {
        if($attribute == 'status'){
            echo '    <?= $form->field($model, \'status\')->dropDownList('.$model->className().'::$statusArray) ?>'."\n\n";
            continue;
        }
        echo "    <?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    } else {
        if($attribute == 'status'){
            echo '    <?= $form->field($model, \'status\')->dropDownList('.$model->className().'::$statusArray) ?>'."\n\n";
            continue;
        }
        echo "    <?php // echo " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    }

}
?>
    <div class="form-group" style="width: inherit;">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('搜索') ?>, ['class' => 'btn btn-primary']) ?>
        <?= "<?php " ?>// echo Html::resetButton(<?= $generator->generateString('重置') ?>, ['class' => 'btn btn-default']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
