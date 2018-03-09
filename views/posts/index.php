<?php
	
	$this->registerJsFile("/basic/web/js/main.js", ['depends' => 'yii\web\JqueryAsset']);

	use yii\helpers\Html;
	use yii\widgets\LinkPager;
	use yii\bootstrap\Modal;
	use yii\helpers\Url;
	/* @var $this yii\web\View */
?>

<h1>All Posts</h1>

<?php foreach ($posts as $post): ?>
	<div>
		<h3><?= $post->title ?></h3>
		<p><?= $post->description ?></p>
		<p>Created By: <?= $post->user->username ?></p>
		<?= Html::button('Edit Post', ['value' => Url::to(['posts/edit', 'id' => $post->id]), 'class' => 'modalEditButton']) ?> <br>
	</div>
<?php endforeach ?>

<div>
	<?php 
		echo LinkPager::widget([
		    'pagination' => $pages,
		]);
	?>

	<br>
</div>

<?= Html::button('New Post', ['value' => Url::to(['posts/new']), 'class' => 'btn btn-primary', 'id' => 'modalButton']) ?>

<?php

	Modal::begin([
		'header' => '<h3> Create Post </h3>',
		'id' => 'modal',
		'size' => 'modal-lg',
	]);

	echo "<div id='modalContent'></div>";

	Modal::end();

?>