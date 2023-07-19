<?php

use yii\helpers\Url;

/**
 * @var $model \common\models\Video
 */

?>

<a href="<?= Url::to(['/video/like', 'id' => $model->video_id]) ?>"
    class="btn btn-sm btn-outline-primary" data-method="post" data-pjax="1">
        <i class="fa-solid fa-thumbs-up"></i> 9
</a>
<a class="btn btn-sm btn-outline-secondary">
    <i class="fa-solid fa-thumbs-down"></i> 3
</a>