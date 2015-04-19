<?php

/**
 * @author Bizley
 */
namespace bizley\podium\models;

use bizley\podium\components\Cache;
use Exception;
use Yii;
use yii\db\ActiveRecord;

/**
 * ThreadView model
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $thread_id
 * @property integer $new_last_seen
 * @property integer $edited_last_seen
 */
class ThreadView extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%podium_thread_view}}';
    }

}