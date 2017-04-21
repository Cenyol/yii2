<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
$modelClass = StringHelper::basename($generator->modelClass);

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\helpers\Url;
use <?= ltrim($generator->modelClass, '\\') ?>;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$title = <?= $modelClass;?>::classNameZhCn();
$this->title = $title . '列表';
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
			<div class="description">列表管理，可进行查看，审核，删除等操作。</div>
		</div>
	</div>
</div>
<!-- /PAGE HEADER -->

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>
    <p>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('添加新') ?> . $title, ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <div style="overflow-x:auto;overflow-y:hidden;">
    <?= $generator->enablePjax ? '<?php Pjax::begin(); ?>' : '' ?>
    <?php if ($generator->indexWidgetType === 'grid'): ?>

        <?= "<?= " ?>GridView::widget([
            'dataProvider' => $dataProvider,
            'options' => ['style' => 'width:150%;'],
            'layout' => '{items}{pager}',
            <?= !empty($generator->searchModelClass) ? "// 'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
    //             ['class' => 'yii\grid\SerialColumn'],
    
    <?php
    $count = 0;
    if (($tableSchema = $generator->getTableSchema()) === false) {
        foreach ($generator->getColumnNames() as $name) {
            if (++$count < 6) {
                echo "            '" . $name . "',\n";
            } else {
                echo "            // '" . $name . "',\n";
            }
        }
    } else {
        foreach ($tableSchema->columns as $column) {
            // by cenyol 2016-07-15 21:34:00
            if($column->name == "id") continue;
            if($column->name == "status"){
                echo '
                [
                    \'attribute\' => \'status\',
                    \'value\' => function ($model) {
                        return isset('.$modelClass.'::$statusArray[$model->status])?'.$modelClass.'::$statusArray[$model->status]:\'\';
                    },
                ],
                '."\n";
                continue;
            }
            
            $format = $generator->generateColumnFormat($column);
            if (++$count < 6) {
                echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
            } else {
                echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
            }
        }
    }
    ?>
    
                [
                    'class' => 'common\models\mygrid\ActionColumn',
                    'template' => '{view} {update} {delete}',
                ],
            ],
        ]); ?>
    <?php else: ?>
        <?= "<?= " ?>ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($model, $key, $index, $widget) {
                return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
            },
        ]) ?>
    <?php endif; ?>
    <?= $generator->enablePjax ? '<?php Pjax::end(); ?>' : '' ?>
    </div>
</div>
