<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$modelClass = StringHelper::basename($generator->modelClass);

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\detail\DetailView;
use <?= ltrim($generator->modelClass, '\\') ?>;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$title = <?= $modelClass;?>::classNameZhCn();

$this->title = '查看' . $title;
$this->params['breadcrumbs'][0] = $title . '管理';
$this->params['breadcrumbs'][1] = $this->title;
?>


<style>
<!--
    .table{
	   margin-top: 30px;
    }
-->
</style>

<!-- PAGE HEADER-->
<div class="row">
	<div class="col-sm-12">
		<div class="page-header" style="margin-bottom: 15px;">
			<!-- STYLER -->

			<!-- /STYLER -->
			<!-- BREADCRUMBS 面包屑导航-->
			<ul class="breadcrumb">
				<li><i class="fa fa-user"></i> <a href="<?="<?php ";?>echo Url::toRoute(['index'], true)?>"><?="<?php ";?>echo Html::encode($this->params['breadcrumbs'][0]); ?></a>
				</li>
				<li><?="<?php ";?>echo Html::encode($this->params['breadcrumbs'][1]); ?></li>
			</ul>
			<!-- /BREADCRUMBS -->
			<div class="clearfix">
				<h3 class="content-title pull-left"><?="<?php ";?>echo $this->title; ?></h3>
			</div>
			<div class="description">查看<?='<?php'?> echo $title ?>各项信息。</div>
		</div>
	</div>
</div>
<!-- /PAGE HEADER -->
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        // by cenyol 2016-07-15 21:34:00
        if($column->name == "id") continue;
        if($column->name == "status"){
            echo '
            [
                \'attribute\' => \'status\',
                \'value\' => isset('.$modelClass.'::$statusArray[$model->status])?'.$modelClass.'::$statusArray[$model->status]:\'\',
            ],
            '."\n";
            continue;
        }
        $format = $generator->generateColumnFormat($column);
        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
        ],
    ]) ?>

</div>
