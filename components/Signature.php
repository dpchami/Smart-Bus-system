<?php
namespace app\components;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

trait Signature 
{
	public function behaviors()
	{
		 return [
        [
            'class' => BlameableBehavior::className(),
            'createdByAttribute' => 'created_by',
            'updatedByAttribute' => 'updated_by',
        ],
        [
        	 'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            'value' => function(){
                    return time();
                },
        ],
    ];
   }
}
