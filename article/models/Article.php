<?php

namespace article\models;

use Yii;

/**
* Article model
* This is the model class for table "article".
*
* @property integer $id
* @property string $create_at
* @property string $update_at
*/
class Article extends \yii\db\ActiveRecord
{
    /**
    * @inheritdoc
    */
    public static function tableName()
    {
        return 'article';
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [];
    }

    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
        return [];
    }

}
