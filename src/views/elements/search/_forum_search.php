<?php

use yii\helpers\Html;
use yii\helpers\Url;

if (!empty($dataProvider)): ?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="forumSearch">
        <h4 class="panel-title">
            <?= Yii::t('podium/view', 'Search for "{query}"', ['query' => Html::encode($query)]) ?>
        </h4>
    </div>
    <div id="collapseSearch" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="forumSearch">
        <?= $this->render('/elements/search/_threads_search', ['dataProvider' => $dataProvider]) ?>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body small">
        <?= $this->render('/elements/forum/_icons') ?>
    </div>
</div>
<?php else: ?>
<?= $this->render('/elements/search/_search') ?>
<?php endif;