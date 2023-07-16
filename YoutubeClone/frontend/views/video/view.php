<?php

/** $model \common\models\Video */

?>

<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                poster="<?= $model->getThumbnailLink() ?>"
                src="<?= $model->getVideoLink() ?>"
                controls
                width=100%
                height=100%>
            </video>
        </div>
        <h6 class="mt-2"><?= $model->title ?></h6>
        <p>123 views : <?= \Yii::$app->formatter->asDate($model->created_at) ?></p>
    </div>
    <div class="col-sm-4">

    </div>
</div>